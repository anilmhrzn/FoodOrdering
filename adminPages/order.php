<?php
include 'admin-header.php';
include 'admin-navbar.php';
?>
<script>
    window.onload = () => {
        document.getElementById('customer-for-navbar').classList.add('active');
    }
</script>
<div>

    <h1 style="display:block;">
        this is for orders details
    </h1>
    <table>
    <table>
    <tr>
        <th>Name:</th>
        <th>Phone no:</th>
        <th>Address</th>
        <th>Email:</th>
        <th>Total Price:</th>
        <th>Quantity:</th>
        <th>Ordered Time:</th>
        <th>Ordered Date:</th>
        <th>Food Name:</th>
        <th>Status</th>
        <th>Option</th>
    </tr>

        <?php
    include './../landingpage/db_config.php';
    $sql = "SELECT customer.full_name,customer.phone_number,customer.address,customer.email, orders.total_price ,orders.quantity,orders.ordered_time,orders.order_date,food.name ,orders.order_status FROM customer JOIN orders ON customer.id = orders.customer_id JOIN food ON food.id=orders.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
           <tr class="<?=($row['order_status']==1) ? 'delivered' : 'not-delivered'; ?>">
           <td><?=$row['full_name'] ?></td>
           <td><?=$row['phone_number'] ?></td>
           <td><?=$row['address'] ?></td>
           <td><?=$row['email'] ?></td>
           <td><?=$row['total_price'] ?></td>
           <td><?=$row['quantity'] ?></td>
           <td><?=$row['ordered_time'] ?></td>
           <td><?=$row['order_date'] ?></td>
           <td><?=$row['name'] ?></td>
           <td ><?=($row['order_status']==1) ? 'delivered' : 'not delivered'; ?></td>
           <td><button onclick="">delivered</button></td>
           <!-- TODO:make delevered button -->
           </tr>
        <?php

        }
    }
    mysqli_close($conn);
    ?>
</table>
</div>
<?php include 'admin-footer.php';
?>
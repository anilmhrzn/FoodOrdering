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
    <?php
    include './../landingpage/db_config.php';
    $sql = "SELECT * from `orders`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row['id'];

            ?>
            
            <?php
        }
    }
    ?>
</div>
<?php include 'admin-footer.php';
?>
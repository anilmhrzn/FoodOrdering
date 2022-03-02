<h1 style="text-align:center"><?php echo categoryName($category_id);?> Table</h1>
<a href="insert-for-food.php"  style="display:block;text-align:center;">insert in this category</a>
<div class='for-table'>
    <table>
        <tr>
            <!-- <th>Id</th> -->
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category Name</th>
            <th>Image</th>
            <th>Functions</th>
        </tr>
        <?php

include './../landingpage/db_config.php';
$sql = "SELECT * FROM food where category_id=$category_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        ?>
        <tr>
            <!-- <td>
                <?php
        // echo $row['id'];
        ?>
    </td> -->
            <td>
                <?php
        echo $row['name'];
        ?>
            </td>
            <td>
                <?php
        echo $row['price'];
        ?>
            </td>
            <td>
                <?php
        echo $row['description'];
        ?>
            </td>
            <td>
                <?php
        echo categoryName($category_id);
        ?>
            </td>
            <td>
                <input class="for-admin-buttons" type="button" value="view"
                    onclick="viewImg('<?php echo $row['image_address'];?>')">
                <img class="for-img-of-admin" id="<?php echo $row['image_address'];?>"
                    src="<?php echo $row['image_address'];?>" alt="image not available">

            </td>
            <td>
                <!-- <input type="button" class="for-admin-buttons" value="Update"> -->
                <a href="http://localhost/FoodOrdering/adminPages/update-for-food.php?id=<?=$row['id']?>" class="for-admin-buttons" >Update</a>
                <input type="button" class="for-admin-buttons" value="Delete">
            </td>

        </tr>
        <?php
 }
} else {
    
    echo "<tr><td style='color:red;'?>0 results for ". categoryName($category_id);
    }
    $conn->close();
    ?>
    </table>
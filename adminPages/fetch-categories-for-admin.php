<h1 style="text-align:center"><?php echo categoryName($category_id);?> Table</h1>
<a href="insert-for-food.php"   class="button">Insert in this category</a>
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
$sql = "SELECT * FROM food where category_id=$category_id ORDER BY name";
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
                <input style="width:100%;" class="button-for-view-update" type="button" value="view"
                    onclick="viewAndHide('<?php echo $row['image_address'];?>')" >
                <img class="for-img-of-admin" id="<?php echo $row['image_address'];?>"
                    src="<?php echo $row['image_address'];?>" alt="image not available">

            </td>
            <td>
                <!-- <input type="button" class="for-admin-buttons" value="Update"> -->
                <a href="http://localhost/FoodOrdering/adminPages/insert-for-food.php?id=<?=$row['id']?>">
                <input type="button" value="Update" class="button-for-view-update"></a>
                
                <a href="http://localhost/FoodOrdering/adminPages/for-delete.php?id=<?=$row['id']?>" ><input type="button" class="button-for-view-update" value="Delete"></a>
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
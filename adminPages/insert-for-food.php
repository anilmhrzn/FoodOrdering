<?php
$e_messsage_for_fileupload = '';


//including the configuration file.
//If something has been posted from the form
if ($_POST) {
    include './../landingpage/db_config.php';
    $foodName = $_POST['food-name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $categoryId = $_POST['category_id'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "UPDATE food SET `name` = '$foodName',`price` = '$price',`description`='$description', `category_id` = '$categoryId' WHERE id = $id";
    } else {
        
        $img_address = './../images/foodImages/' . $_FILES['fileToUpload']['name'];
        $sql = "INSERT into food(name,price,description,category_id,image_address) VALUES ('$foodName', '$price','$description','$categoryId','$img_address ')";
    }
    // TODO:fronted validation left and image inserting not done
    if(trim($foodName)!='' && trim($price)!='' && trim($description)!=''){

        if (mysqli_query($conn, $sql)) {
            // echo "New record added successfully";
            $e_messsage_for_fileupload = 'New record added successfully';
            if (isset($_GET['id'])){

                header('Location: http://localhost/FoodOrdering/adminPages/insert-for-food.php?e_messsage_for_fileupload=New record added/updated successfully&id='.$id);
            }
            header('Location: http://localhost/FoodOrdering/adminPages/categories.php?e_messsage_for_fileupload=record was sucessfully inserted');

            // echo "<br /> <a href='http://localhost/FoodOrdering/adminPages/categories.php'
            // >Go back</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }else{
    $e_messsage_for_fileupload = 'none of the field should be empty';

    }
}
if ($_GET) {
    include './../landingpage/db_config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM food WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $food = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "price" => $row['price'],
                "category_id" => $row['category_id'],
                "description" => $row['description'],
                "image_address" => $row['image_address'],
            );
        }
    } else {
        echo "No records found!!";
        exit;
    }
    // print_r($student);exit;
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style-for-admin-page.css">
    <!-- <link rel="stylesheet" href="./../landingpage/style.css"> -->
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: none;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    include 'admin-navbar.php';
    ?>
    <p class="for-insert-update-heading">insert/update page</p>
    <form method="post" action="" enctype="multipart/form-data">
        <table class="for-food-form-admin-page">
            <tr>
                <td>
                    Name of Food
                </td>
                <td>
                    <input type="text" name="food-name" value="<?php if (isset($food['name'])) echo $food['name']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    <input type="number" name="price" value="<?php if (isset($food['price'])) echo $food['price']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Category
                </td>
                <td>
                    <select name="category_id">
                        <option value="1" <?php  if (isset($food['category_id'])) echo $food['category_id'] == 1 ? 'selected' : ''; ?>>
                            Appetizer</option>
                        <option value="2" <?php if (isset($food['category_id'])) echo $food['category_id'] == '2' ? 'selected' : ''; ?>>Main
                            Course</option>
                        <option value="3" <?php if (isset($food['category_id'])) echo  $food['category_id'] == '3' ? 'selected' : ''; ?>>Dessert
                        </option>
                        <option value="4" <?php if (isset($food['category_id'])) echo $food['category_id'] == '4' ? 'selected' : ''; ?>>Drinks
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Image:
                </td>
                <td>
                    <?php
                    if (isset($food['image_address'])) {
                    ?>
                        <img src="<?= $food['image_address'] ?>" alt="" width="100px">
                    <?php
                    } else {
                    ?>
                        <input type="file" name="fileToUpload" id="fileToUpload" />
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend class="center-text">Description</legend>
                        <textarea name="description" cols="33" rows="10" class="style-for-textarea"><?php if (isset($food['description'])) echo $food['description']; ?></textarea>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="center-text">
                    <input type="submit" value="submit" class="forSubmitButton">
                </td>

            </tr>
            <tr>
                <?php if(isset($_GET['e_messsage_for_fileupload'])){?>
                <td colspan="2">
                    <i class="sucess"><?php echo $_GET['e_messsage_for_fileupload']; ?></i>
                </td>
                <?php
                }
                ?>
                <td colspan="2">
                    <i class="error"><?php if((isset($e_messsage_for_fileupload)))  echo $e_messsage_for_fileupload ; ?></i>
                </td>

            </tr>
            <tr>
                <td colspan="2" class="center-text">
                    <a href="http://localhost/FoodOrdering/adminPages/categories.php"><input type="button" value="Go Back" class="button-for-view-update goBackButton"></a>
                </td>
            </tr>
        </table>

    </form>


</body>

</html>
<script>
    window.onload = () => {
        document.getElementById('categories-for-navbar').classList.add('active');
    }
</script>
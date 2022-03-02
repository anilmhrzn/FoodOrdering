<?php
    //including the configuration file.
    include './../landingpage/db_config.php';

    // //If something has been posted from the form
    if($_POST){
        // print_r($_POST);
        $foodName = $_POST['food-name'];
        $price = $_POST['price'];
        $categoryId = $_POST['category_id'];
        $fileToUpload = $_POST['fileToUpload'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $sql = "UPDATE food SET `name` = '$foodName',
         `price` = '$price',`description`='$description', `category_id` = '$categoryId' WHERE id = $id";
        if(mysqli_query($conn, $sql)){
           
            header('Location: http://localhost/FoodOrdering/adminPages/categories.php');
            mysqli_close($conn);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    if($_GET){
        $id = $_GET['id'];
        $sql = "SELECT * FROM food WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $food = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "price" => $row['price'],
                    "category_id" => $row['category_id'],
                    "description"=> $row['description'],
                    "image_address" => $row['image_address'],
                );
            }
        } else {
          echo "No records found!!";
          exit;
        }
        // print_r($student);exit;
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-for-admin-page.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <title>Document</title>
    <style>
        table,tr,td{
            border: none;
        }
        th, td {
  padding: 15px ;
}
    </style>
</head>

<!-- TODO:use database and update the food table using food form  -->
<body>
<?php
include 'admin-navbar.php';
?>
<h1 class="center-text">food update page</h1>
    <form  action="" method="POST">
            <table class="for-food-form-admin-page">
                <tr>
                    <td>
                        Name of Food
                    </td>
                    <td>
                        <input type="hidden" name="id" value="<?=$food['id']?>" />
                        <input type="text" name="food-name" value="<?=$food['name']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Price
                    </td>
                    <td>
                        <input type="number" name="price" value="<?=$food['price']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Category
                    </td>
                    <td>
                        <select name="category_id" value="<?=$food['id']?>">
                            <option <?=$food['category_id']=='1' ? 'selected': '';  ?> value="1">Appetizer</option>
                            <option <?=$food['category_id']=='2' ? 'selected': '';  ?> value="2">Main Course</option>
                            <option <?=$food['category_id']=='3' ? 'selected': '';  ?> value="3">Dessert</option>
                            <option <?=$food['category_id']=='4' ? 'selected': '';  ?> value="4">Drinks</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Image: <br>
                        
                    </td>
                    <td>
                        <img src="<?=$food['image_address']?>" alt="" width="200px">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Description</legend>
                            <textarea name="description"  cols="33" rows="10" class="style-for-textarea"><?php echo $food['description']?></textarea>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="update" value="submit" style="width:100%" onsubmit="" >                 
                    </td>
                    
                </tr>
            </table>
        </form>
        <h1 class="center-text"><a href="http://localhost/FoodOrdering/adminPages/categories.php">Go Back</a></h1>
    
</body>

</html>
<script>
window.onload = () => {
    document.getElementById('categories-for-navbar').classList.add('active');
}
</script>
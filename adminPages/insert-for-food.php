<!DOCTYPE html>
<html>
<head>
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

<body>
<?php
include 'admin-navbar.php';
?>
<h1 class="center-text">food insert page</h1>
    <form method="POST" action="" enctype="multipart/form-data" >
        <table class="for-food-form-admin-page" >
            <tr>
                <td>
                    Name of Food
                </td>
                <td>
                    <input type="text" name="food-name">
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    <input type="number" name="price">
                </td>
            </tr>
            <tr>
                <td>
                    Category
                </td>
                <td>
                    <select name="category_id">
                        <option value="1">Appetizer</option>
                        <option value="2">Main Course</option>
                        <option value="3">Dessert</option>
                        <option value="4">Drinks</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Image: 
                </td>
                <td>

                    <input type="file" name="fileToUpload" id="fileToUpload" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend class="center-text">Description</legend>
                        <textarea name="description" cols="33" rows="10"
                          class="style-for-textarea"></textarea>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="submit" name="ins" style="width:100%">
                </td>
                
                </tr>
            </table>
        </form>
        <h1><?php echo $e_messsage_for_fileupload?></h1>
    <h1 class="center-text"><a href="http://localhost/FoodOrdering/adminPages/categories.php">Go Back</a></h1>

<?php
$e_messsage_for_fileupload='';
    //including the configuration file.
    //If something has been posted from the form
    if($_POST){
        $e_messsage_for_fileupload='';
        $target_dir = "D:/xampp/htdocs/FoodOrdering/images/foodImages/";
        $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
//   $e_messsage_for_fileupload="Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    include './../landingpage/db_config.php';
                    $foodName = $_POST['food-name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $categoryId = $_POST['category_id'];
                    $img_address = './../images/foodImages/'.$_FILES['fileToUpload']['name'];
                    $sql = "INSERT into food(name,price,description,category_id,image_address) VALUES ('$foodName', '$price','$description','$categoryId','$img_address ')";
                    if(mysqli_query($conn, $sql)){
                        echo "New record added successfully";
                        echo "<br /> <a href='http://localhost/FoodOrdering/adminPages/categories.php'
                        >Go back</a>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>
</body>

</html>
<script>
window.onload = () => {
    document.getElementById('categories-for-navbar').classList.add('active');
}
</script>
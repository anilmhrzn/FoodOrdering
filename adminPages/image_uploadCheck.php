<?php
// $target_dir = "D:/Projects/xampp/htdocs/BCA-Scripting-Language/unit-2/file-handling/uploads/";
$target_dir = "D:/xampp/htdocs/FoodOrdering/images/foodImages/";

$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        die ("<br>Sorry, there was an error uploading your file.");
    }

?>
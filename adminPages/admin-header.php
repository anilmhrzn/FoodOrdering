<?php
function categoryName($category_id) {
    include './../landingpage/db_config.php';
    // code to be executed;
    $sql="SELECT * FROM `food_paradise_db`.`category` WHERE `id` =$category_id ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    return $row['name'];
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style-for-admin-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="JsForAdminpage.js"></script>

</head>
<body>

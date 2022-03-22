<?php
if($_GET){
    include './../landingpage/db_config.php';
    $sql="UPDATE `orders` SET `order_status` = '1' WHERE id =".$_GET['order_id'];
    if(!mysqli_query($conn, $sql)){
            echo 'not sucessful';
        }
        else{
        header("location:order.php");
        } 
        }
?>
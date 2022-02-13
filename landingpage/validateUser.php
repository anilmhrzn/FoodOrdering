<?php
include 'db_config.php';
if($_GET){
    $username=$_REQUEST['username-for-login'];
    $password=$_REQUEST['password-for-login'];
    // echo $username;
    // echo $password;

    $sql = "SELECT username , password FROM customer";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($username==$row['username'] && $password==$row['password']){
            echo 'good';
        }
    }
}
}
?>
<?php
include 'db_config.php';
if($_GET){
    $searched=strtolower($_REQUEST['searched']);
    $sql="SELECT name FROM `food`where name like '$searched%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row['name'];
        }
    }
    else{

    }
}
?>
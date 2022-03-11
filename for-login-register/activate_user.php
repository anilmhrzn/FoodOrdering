<?php

if ($_GET) {
    include './../landingpage/db_config.php';
    $email = $_GET['email'];
    $sql_set_customer_status = "UPDATE `customer` SET `status` = '1' WHERE `customer`.`email`='$email'";
    $query = mysqli_query($conn, $sql_set_customer_status);
    if ($query) {
        mysqli_close($conn); 
?>
        <script>
            if (confirm('Your account successfully activated go to login page.')) {
                window.location.href = "login.php";
            }
        </script>
<?php
    } else {

        echo 'activation failed' . $query ;
    }
}

?>
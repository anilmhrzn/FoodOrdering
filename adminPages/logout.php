<?php
session_start();
unset($_SESSION['ADMIN_ID']);
unset($_SESSION['ADMIN_NAME']);
header("location:loginForAdminPage.php");
die();
?>
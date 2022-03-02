<?php
session_start();
include './../landingpage/db_config.php';
if(!isset($_SESSION['ADMIN_ID'])){
    header("location:loginForAdminPage.php");
    die();
}?>


    <nav>
        <span class="company-name">
            food paradise
        </span>
        <ul>
            <li><a href="homepage.php" id="home-for-navbar" class="options ">Home</a></li>
            <li><a href="categories.php" id="categories-for-navbar" class="options">Categories</a></li>
            <li><a href="customer.php" id="customer-for-navbar" class="options">Customers</a></li>
            <li>

                <a class="options" href="logout.php">logout</a>
            </li>
        </ul>
    </nav>
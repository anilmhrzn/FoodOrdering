<?php
session_start();
include 'db_config.php';
if (!isset($_SESSION['USER_ID'])) {
    header("location:./../for-login-register/login.php");
    die();
}
?>
<?php include 'header.php'; ?>
<body class="hideScrollBar">
    <?php include 'navbar.php' ?>
    <div id="middle-body">
        <div id="main-content">
            <form id="for-search-form" action="" method="GET" style="margin: 2vw;">
                <div class="center">
                    <img src="./../images/foodImages/hungerheist.jpg" style="margin:auto; height:50vh;" alt="">
                </div>
                <span id="searchbar">
                    <input id="inputSearchBar" type="text" name="searched" placeholder="search for food or drinks" /><i
                        class="fas fa-search search-icon"
                        onclick="document.getElementById('for-search-form').submit();">
                    </i>
                </span>
            </form>
        </div>
    </div>
    <div id="categories-bar">
        <!-- show function is for showing the categories section on click -->
        <li id="appetizers" class="categories-button" onclick="show('appetizers','appetizers-section');">
            <!-- if we click in this  the show function will be called where we send the appetizers to use this as id in js to select this for giving background color on click    -->
            Appetizers
        </li>
        <li id="mainCourse" class="categories-button" onclick="show('mainCourse','mainCourse-section');">
            Main course
        </li>
        <li id="dessert" class="categories-button" onclick="show('dessert','dessert-section');">
            Dessert
        </li>
        <li id="drinks" class="categories-button" onclick="show('drinks','drinks-section');">
            Drinks
        </li>
    </div>
    <div id="appetizers-section" class="catedories-section">
        <?php $category_id = 1;
            include 'fetch_categories.php' ?>
    </div>
    <div id="mainCourse-section" class="catedories-section">
        <?php $category_id = 2;
            include 'fetch_categories.php' ?>
    </div>
    <div id="dessert-section" class="catedories-section">
        <?php $category_id = 3;
            include 'fetch_categories.php' ?>
    </div>
    <div id="drinks-section" class="catedories-section">
        <?php $category_id = 4;
            include 'fetch_categories.php' ?>
    </div>
    </div>
    <?php
    include 'QtyPriceTable.php';
    ?>
    <!-- this whole php is for showing shearched panel -->
    <?php
        include 'db_config.php';
        if ($_GET) {
            ?>
    <div class="closeSearchedPanel for-search-panel">
        <h3 class="heding-of-searched-results">Results of your search</h3><i class="fas fa-times-circle icon-close"
            onclick="document.querySelector('div.closeSearchedPanel').style.display='none'"></i>
        <?php
            $searched = strtolower($_REQUEST['searched']);
            $sql = "SELECT * FROM `food` where name like '$searched%' or name like '%$searched' or name like '%$searched%' ";
            $result = $conn->query($sql);
            if ($result !== false && $result->num_rows > 0) {

                echo "\"" .$_REQUEST['searched']."\"";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // echo $row['name'];
                    // echo '<br><h1>' . $row['name'] . '</h1>';
                    ?>
        <div class="for-border">
            <div class='imgFoodSection '>
                <img src="<?php echo $row['image_address'] ?>" alt="sorry image is not availale......"
                    class="imageOfFoods">
            </div>
            <div class="margin-3vh for-dancingScript-font">
                <h4 class=" for"><?php echo $row['name'] ?></h4><span style="margin:1vh;">
                    <?php echo $row['description'] ?>
                </span>
                <h6>R.s.<?php echo $row['price'] ?></h6>
                <input type="button" value="order now" class="box button"
                    onclick="showQtyBox(<?= $row['price'] ?>,'<?= $row['name'] ?>',<?= $row['id'] ?>); calculateAmount(document.getElementById('inputTagOfOrder').value);">
            </div>
        </div>
        <?php
                }
            } else {?>
        <h1>did you searched for <br> " <?php echo $_REQUEST['searched']?>" <br> not available </h1><i
            class="fas fa-times-circle icon-close"
            onclick="document.querySelector('div.closeSearchedPanel').style.display='none'"></i>
        <?php 

        }
    } 
        ?>
    </div>
    <?php include 'footer.php'; ?>
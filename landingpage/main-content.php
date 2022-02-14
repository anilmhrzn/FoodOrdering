<?php
session_start();
include 'db_config.php';
if(!isset($_SESSION['USER_ID'])){
    header("location:login.php");
    die();
}
?>
<?php include 'header.php';?>

<body class="hideScrollBar">
    <!--this is used in js for background blur while registration form is opened by user  making whole webpage blur except registration form box-->
    <div id="content-except-register-form" class="for-content-except-register-form">
        <?php include 'navbar.php'?>
        <div id="middle-body">
            <div id="main-content" class="grid-item">
                <form id="for-search-form" action="http://localhost/FoodOrdering/landingpage/search-for-foods.php"
                    method="GET" style="margin: 2vw;">
                    hungry? <br />Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Hic, nostrum nesciunt rem, numquam veritatis fuga at obcaecati sed
                    sunt ut saepe vero nemo enim. Nostrum tempora fugiat aspernatur fuga
                    inventore.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id quia, a ad dolorem at atque. Est vel
                    blanditiis adipisci corrupti dignissimos, ipsam sequi dolorum vitae voluptate sunt vero porro eum
                    dolore beatae.
                    <span id="searchbar">
                        <input id="inputSearchBar" type="text" name="searched"
                            placeholder="search for food or drinks" /><i class="fas fa-search search-icon"
                            onclick="document.getElementById('for-search-form').submit()"></i>
                    </span>
                </form>
                <!-- </div> -->
                <div id="slider">
                    <ul id="slideWrap">
                        <li><img src="./../images/foodImages/pizza.jpg"></li>
                        <!-- <li><img src="./../images/foodImages/butterChicken.jpg"></li>
                        <li><img src="./../images/foodImages/biriyani.jpg"></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div id="categories-bar">
            <!-- show function is for showing the categories section on click -->
            <li id="appetizers" class="categories-button" onclick="show('appetizers','appetizers-section');">
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
            <?php $category_id=1; include 'fetch_from_db_forcategories.php' ?>
        </div>
        <div id="mainCourse-section" class="catedories-section">
            <?php $category_id=2; include 'fetch_from_db_forcategories.php' ?>
        </div>
        <div id="dessert-section" class="catedories-section">
            <?php $category_id=3; include 'fetch_from_db_forcategories.php' ?>
        </div>
        <div id="drinks-section" class="catedories-section">
            <?php $category_id=4; include 'fetch_from_db_forcategories.php' ?>
        </div>
        <?php include 'footer.php';?>
    </div>
    <?php 
    include 'registration.php';
    include 'QtyPriceTable.php';
    ?>
    
</body>

</html>
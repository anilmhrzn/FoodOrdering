<?php include 'header.php';?>

<body  class="hideScrollBar">
    <form action="http://localhost/FoodOrdering/landingpage/validateUser.php" method="GET">
        <!--this is used in js for background blur while registration form is opened by user  making whole webpage blur except registration form box-->
    <div id="content-except-register-form" class="for-content-except-register-form">
        <nav id="navbar">
            <!--this is for navigation bar-->
            <a href="#aboutUs" id="companyname" class="company-name"> Food Paradise </a>
            <ul id="nav-right-side">
                <!--this is for right side part of navigation bar such as username , password , login and register-->
                <li class="inputBlock">
                    <i class=" far fa-user icon"></i> <!-- this is for icon -->
                    <input type="text" name="username-for-login" id="username-for-login" class="inputTag"
                    placeholder="Username" style="margin-right: 10px;" />
                    </li>
                    <li class="inputBlock">
                        <i class="fas fa-key icon"></i>
                        <input type="password" name="password-for-login" id="password-for-login" class="inputTag"
                        placeholder="Password" />
                    </li>
                </form>
                <li class="inputBlock">
                    <input type="submit" value="login" id="login" class="button" onclick="console.log('hello')">
                </li>
                <li class="inputBlock">
                    <input type="button" value="register" onclick="newPanel();" id="register" class="button" />
                </li>
            </ul>
        </nav>
        <div id="middle-body">

            <div id="main-content" class="grid-item">
                <p style="margin: 2vw;">
                    hungry? <br />Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Hic, nostrum nesciunt rem, numquam veritatis fuga at obcaecati sed
                    sunt ut saepe vero nemo enim. Nostrum tempora fugiat aspernatur fuga
                    inventore.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id quia, a ad dolorem at atque. Est vel
                    blanditiis adipisci corrupti dignissimos, ipsam sequi dolorum vitae voluptate sunt vero porro eum
                    dolore beatae.

                    <span id="searchbar">
                        <input id="inputSearchBar" type="text" class="fa" placeholder="search for food or drinks"
                        /><i 
                            class="fas fa-search search-icon"></i>
                    </span>
                </p>
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
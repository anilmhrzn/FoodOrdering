
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register page</title>
    <link rel="stylesheet" href="style-for-login-register.css">
    <!-- for icon -->
    <script src="https://kit.fontawesome.com/14a21296be.js" crossorigin="anonymous"></script>
    <!-- for validation -->
    <!-- <script src="./../jQuery/for-registration-validation.js"></script> -->
<script src="./../jQuery/for-registration-validation.js"></script>

    <link
    href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@500&family=Festive&family=Indie+Flower&family=Kaushan+Script&family=Redressed&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="companyNameCenter">
        <a id="companyname" class="company-name"> Food Paradise </a>
    </div>
    <div class="whole-page">
     
        <form method="POST" id="for-form" action="http://localhost/FoodOrdering/for-login-register/post_for_registration.php" onsubmit="event.preventDefault();validation();" >
            
            
            <h1 class="text-align-center"> Register</h1>
            <p>
                <label for="full-name">
                    Name:
                </label>
                <br>
                <input type="text" name="full-name" id="full-name">
                <i style="display:block;" id="full-name-validation" class="fa fa-solid fa-circle-exclamation margin-top"></i>
            </p>
            <p>
                <label for="phone-number">
                    Phone-number:
                    <br>
                </label>

                <br><input type="number" name="phone-number" id="phone-number">
                <br>
            <p style="display:block;" id="phone-number-validation" class="fa fa-solid fa-circle-exclamation margin-top">
            </p>
            
            </p>
            <p>
                <label for="age">

                    Age:
                    <br>
                </label>
                <br><input type="number" name="age" id="age">
                <br>
            <p style="display:block;" id="age-validation" class="fa fa-solid fa-circle-exclamation margin-top"></p>


            </p>
            <p>
                <label for="address">

                    Address:
                    <br>
                </label>
                <br> <input type="text" name="address" id="address">
                <br>
            <p style="display:block;" id="address-validation" class="fa fa-solid fa-circle-exclamation margin-top"></p>

            </p>
            <p>
                <label for="email">

                    Email:
                    <br>
                </label>

                <br> <input type="email" name="email" id="email">
                <br>
            <p style="display:block;" id="email-validation" class="fa fa-solid fa-circle-exclamation margin-top"></p>

            </p>
            <p>
                <label for="username">

                    Username:
                    <br>
                </label>

                <br> <input type="text" name="username" id="username">
                <br>
            <p style="display:block;" id="username-validation" class="fa fa-solid fa-circle-exclamation margin-top"></p>
            
            </p>
            <p>
                <label for="password">
                    Password:
                    <br>
                </label>
                <br> <input type="text" name="password" id="password">
                <br>
                <p style="display:block;" id="password-validation" class="fa fa-solid fa-circle-exclamation margin-top">
                </p>
            </p>
            <p>
                <label for="re-entered-password">

                    Re-enter Password:
                    <br>
                </label>
                <br><input type="text" name="re-entered-password" id="re-entered-password">
                <br>
            <p style="display:block;" id="re-entered-password-validation"
                class="fa fa-solid fa-circle-exclamation margin-top"></p>

            </p>
            <p class="text-align-center">

                <input type="submit" value="submit">
            </p>
            <p class="text-align-center">
                <a href="http:\\localhost\FoodOrdering\for-login-register\login.php" style="margin:auto">already have a
                    account</a>
            </p>
        </form>
    </div>

</body>

</html>
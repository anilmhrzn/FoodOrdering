
<div class="companyNameCenter">
        <a id="companyname" class="company-name"> Food Paradise </a>
    </div>
    <div class="whole-page">
        <form action="" id="for-form" method="POST">
            <h1 class="text-align-center"> login form</h1>
            <p>
                <label for="email">
                    Username:

                </label>
                <br> <input type="text" name="username-for-login" id="username-for-login" class="login-error">
            </p>
            <p>
                <label for="password">
                    Password:
                </label>
                <br> <input type="password" name="password-for-login" id="password-for-login" class="login-error">
            </p>
            <p id="error-message">
                <?php echo $error_message;?>
            </p >
            <p class="text-align-center">

                <input type="submit" name="login" value="login">
            </p>
            </p>
            <p class="text-align-center">

                <a href="http:\\localhost\FoodOrdering\for-login-register\registration-form.php">Create a account</a>
            </p>
        </form>

    </div>
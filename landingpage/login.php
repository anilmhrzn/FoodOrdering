<?php
session_start();
include 'db_config.php';
$error_message='';
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username-for-login']);
  $password=mysqli_real_escape_string($conn,$_POST['password-for-login']);
  $sql = "SELECT id , username , password FROM food where username='$username' && password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        $_SESSION['USER_ID']=$row['id'];
        $_SESSION['USER_NAME']=$row['username'];
        header("location:main-content.php");
    }
}
else{
$error_message="please enter valid username or password";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style-for-login.css">
    <title>login page</title>
    <!-- for font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@500&family=Festive&family=Indie+Flower&family=Kaushan+Script&family=Redressed&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="for-centering-form">
        <a id="companyname" class="company-name"> Food Paradise </a>

        <form action="" class="form-for-login" method="POST">
            <h1> login form</h1>
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
            </p>
            <input type="submit" name="login" value="login">
            </p>
            <p>

                <a href="http:\\localhost\FoodOrdering\landingpage\registration-form.php">Create a account</a>
            </p>
        </form>

    </div>
</body>

</html>
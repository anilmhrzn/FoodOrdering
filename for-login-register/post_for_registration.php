 <?php
if ($_POST) {
    if(!empty($_REQUEST['full-name']) && !empty($_REQUEST['phone-number']) && !empty($_REQUEST['age']) && !empty($_REQUEST['address']) && !empty($_REQUEST['email']) && !empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty($_REQUEST['re-entered-password'])){
        $fullName=$_REQUEST['full-name'];      
        $number=$_REQUEST['phone-number']; 
        $age=$_REQUEST['age']; 
        $address=$_REQUEST['address'];      
        $email=$_REQUEST['email'];      
        $userName=$_REQUEST['username'];      
        $passWord=$_REQUEST['password'];      
        $reEnteredPassword=$_REQUEST['re-entered-password'];      
        include './../landingpage/db_config.php';
        $sql="INSERT INTO customer (full_name, username,password,phone_number,address, email)
        VALUES ('$fullName', '$userName', '$passWord','$number','$address','$email')";
        if ($conn->query($sql) === TRUE) {
            header("location:login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    else{
        header("location:registration-form.php");
    }
}
?> 
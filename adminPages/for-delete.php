<script>
window.onload = () => {
    document.getElementById('categories-for-navbar').classList.add('active');
}
</script>
<?php
include 'admin-header.php';
include 'admin-navbar.php';
if($_GET){
    echo $_REQUEST['id'];
    include './../landingpage/db_config.php';
    $id=$_REQUEST['id'];
    $sql="DELETE from `food` WHERE `food`.`id` =".$id;
    if (mysqli_query($conn, $sql)) {
        // echo "Record deleted successfully";
        header('Location: http://localhost/FoodOrdering/adminPages/categories.php?e_messsage_for_fileupload=Record deleted successfully');
        
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    mysqli_close($conn);
}
?>
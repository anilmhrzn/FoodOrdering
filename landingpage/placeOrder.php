<?php
session_start();
if ($_POST) {
  $name = $_REQUEST['nameOfFood'];
  $quantity = $_REQUEST['quantity'];
  $totalAmt = $_REQUEST['totalAmt'];
  $costumerId = $_SESSION['USER_ID'];
  $foodId = $_REQUEST['orderedFoodId'];
  
  include 'db_config.php';
  $sql = "Insert into `orders` (`total_price`,`quantity`,`customer_id`,`food_id`,`order_date`,`order_status`,`ordered_time`) VALUES ('$totalAmt','$quantity','$costumerId','$foodId',CURDATE(),0,CURTIME())";
  if ($conn->query($sql) === TRUE) {
include 'header.php';
include 'navbar.php';
?>
  <h1 class="center-text">Your Order Was Placed Sucessfully</h1>
  <p class="center-text"> Details of your order is</p>
<div class="for-center-vertically-horizontally">

  <table class="for-border">
    <tr >
        <th>
            Name of food:
        </th>
        <th>
            Quantity:
        </th>
        <th>
            Total Amount:
          </th>
    </tr>
    <tr>
      <td>
            <?=$name?>
        </td>
        <td>
            <?=$quantity?>
        </td>
        <td>
            <?=$totalAmt?>
        </td>
    </tr>
  </table>
</div>
<p class="center-text" style="margin-top: 50px;">

  <a href="main-content.php" >Go Back To Main Page</a>
</p>
<?php
include 'footer.php';

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
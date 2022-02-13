<?php
    include 'db_config.php';
    $sql = "SELECT * FROM food where category_id=$category_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
<div>

    <div id="for-grid-50-50">
        <div class='imgFoodSection'>
            <img src="<?php echo $row['image_address']?>" alt="sorry image is not availale......" class="imageOfFoods">
        </div>
        <div class="margin-3vh for-dancingScript-font">
            <h1 class=" for"><?php echo $row['name'] ?></h1><span style="margin:1vh;">
                <?php echo $row['description'] ?>
            </span>
            <h4>R.s.<?php echo $row['price'] ?></h4>
            <input type="button" value="order now" class="box button"
                onclick="showQtyBox(<?php echo $row['price']?>,'<?php echo $row['name']?>');calculateAmount(document.getElementById('inputTagOfOrder').value,<?php echo $row['price']?>)">

            <!-- <div style=" margin:1vh;height:20vh;border:1px solid black;"> -->

            <!-- </div> -->
        </div>
    </div>
</div>

<?php
    }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
<?php
    include 'db_config.php';
    $sql = "SELECT * FROM food where category_id=$category_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>

    <div class='imgFoodSection'>
        <img src="<?php echo $row['image_address']?>" alt="sorry image is not availale......" class="imageOfFoods">
    </div>
    <div>
        <h2><?php echo $row['name'] ?></h2><br><?php echo $row['description'] ?><br>
        <b>R.s.<?php echo $row['price'] ?></b> <br>
        <button class="box button">order now</button>
    </div>
    <?php
    }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
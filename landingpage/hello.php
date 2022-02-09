<?php

            include 'db_config.php';
            $sql = "SELECT name FROM food where category_id='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
?>
                <button class="box" style="height:100px; width:100px"><?php $row[0] ?></button>
                
            <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
                ?>    
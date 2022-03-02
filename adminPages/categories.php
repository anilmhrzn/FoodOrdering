<script>
window.onload = () => {
    document.getElementById('categories-for-navbar').classList.add('active');
}
</script>
<?php
include 'admin-header.php';
include 'admin-navbar.php';
?>
<h1 style="text-align:center">Category Table</h1>

<div class='for-table'>
    <table class='table-for-categories'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>functions</th>
        </tr>
        <?php
include './../landingpage/db_config.php';
$sql = "SELECT * FROM category where status=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
        <tr>
            <td>
                <?php
                echo $row['id'];?>
            </td>
            <td>
                <?php
                echo $row['name'];?>
            </td>
            <td>

                <input class="for-admin-buttons" type="button" value="view"
                    onclick="viewImg('<?php echo $row['name']?>');console.log('<?php echo $row['name']?>')">

        </tr>
        <?php
        }}
        else {
            echo "0 results of ";
        }
        $conn->close();
        ?>
    </table>
</div>

    <?php
        $category_id=1;
        ?>
<div id="<?php echo categoryName($category_id);?>">

    <?php
        include 'fetch-categories-for-admin.php';
        ?>
</div>
</div>
<?php
        $category_id=2;
        ?>
<div id="<?php echo categoryName($category_id);?>">

    <?php
        include 'fetch-categories-for-admin.php';
        ?>
</div>
</div>
<?php
        $category_id=3;
        ?>
<div id="<?php echo categoryName($category_id);?>">

    <?php
        include 'fetch-categories-for-admin.php';
        ?>
</div>
</div>
<?php
        $category_id=4;
        ?>
<div id="<?php echo categoryName($category_id);?>">

    <?php
        include 'fetch-categories-for-admin.php';
        ?>
</div>
</div>


<?php include 'admin-footer.php';
?>
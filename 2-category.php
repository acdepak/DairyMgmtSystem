<?php
$username="root";
$password="";
$host="localhost";
$db_name="dairymgmtsystem";


$mysqli=new mysqli($host,$username,$password,$db_name);

if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$sql = "SELECT * FROM category";
$result = $mysqli->query($sql);
$mysqli->close();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category2</title>
    <link rel="stylesheet" href="./style/2-category.css">
</head>
<body>
<div class="menu">
            <?php include 'nav.php';?>
        </div>
    <div class="container" style=" display: flex; justify-content: center; ">
    <div>
        <table class="tbl1">
            <tr>
                <th>SN</th>
                <th>Categories</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Rate</th>
                </tr>

                <?php while($row=$result->fetch_assoc()) {

                ?><tr>
                <td><?php echo $row['S.N.']; ?></td>
                <td><?php echo $row['Categories']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
                <td><?php echo $row['Unit']; ?></td>
                <td><?php echo $row['Rate']; ?></td>
                </tr>
                <?php 
            } 
            ?>
            </table>
        </div>
        <div id="divInsert" style="display: block">
                    <p></p>
                    <form action="2-category.php" method="post">
                        <button type="submit" formaction="insert.php">Insert Category
                        </button>
                    </form>
                    <!-- < ?php include 'insert.php';?> -->
                        Update Delete
                </div>
                </div>
    
</body>
</html>
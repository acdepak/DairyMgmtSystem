<?php
$username="root";
$password="";
$host="localhost";
$db_name="dairymgmtsystem";
//create connection
$mysqli=new mysqli($host,$username,$password,$db_name);
//check connection
if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$sql = "SELECT * FROM category";
$result = $mysqli->query($sql);
$mysqli->close();

$page="2-category.php";
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
    <div class="container">
        <div>
            <table class="tbl" border="1">
                <tr>
                    <th>SN</th>
                    <th>Categories</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Rate</th>
                    <th>Action</th>
                </tr>

                    <?php 
                    $i=0;
                    while($row=$result->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?php echo $row['SN']; ?></td>
                    <td><?php echo $row['Categories']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><?php echo $row['Unit']; ?></td>
                    <td><?php echo $row['Rate']; ?></td>
                    <td><a href="update-process.php?sn=<?php echo $row['SN']; ?>">Update</a></td>
                </tr>
                <?php 
                $i++;
                } 
                ?>
            </table>
        </div>
        <div id="bottom">
            <p></p>
            <form method="post">
                <button type="submit" formaction="insert.php">Insert Category</button>
            </form>
            
                <!-- <form method="post">
                <button type="submit" formaction="update.php">Update Category</button>
                </form> -->
            
            Delete
        </div>
    </div>
    
</body>
</html>
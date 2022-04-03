<?php
include_once 'session.php';
$page="retrive.php";
include_once 'nav.php';

$result = mysqli_query($mysqli,"SELECT * FROM category");
?>

<!DOCTYPE html>
<html>
  <head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="#">
  </head>
  <body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
      <tr>
        <td>SN</td>
        <td>Categories</td>
        <td>Quantity</td>
        <td>Unit</td>
        <td>Rate</td>
        <td>Make Bill</td>
      </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
      <tr>
        <td><?php echo $row['SN']; ?></td>
        <td><?php echo $row['Categories']; ?></td>
        <td><?php echo $row['Quantity']; ?></td>
        <td><?php echo $row['Unit']; ?></td>
        <td><?php echo $row['Rate']; ?></td>
        <td><a href="3-bill.php?Categories=<?php echo $row['Categories']; ?>">Bill</a></td>
      </tr>
            <?php
            $i++;
            }
            ?>
    </table>
    <?php
    }
    else
      {
          echo "No result found";
      }
    ?>
  </body>
</html>
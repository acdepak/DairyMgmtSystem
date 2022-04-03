<?php
include_once 'session.php';
$page="4-invoice.php";
include_once 'nav.php';

$result=mysqli_query($mysqli,"SELECT * FROM invoice");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Invoice</title>
    </head>
    <body>
        <div id="inv1">
            <h2>Invoice</h2>
            <div id="inv2">
                <div id="inv3">
                    <?php 
                    if(mysqli_num_rows($result) > 0) {
                    ?>
                    <table id="invoicetable">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Price</th>
                            <th>Username</th>
                        </tr>
                        <?php
                        $i=0;
                        while($row= mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['SN']; ?></td>
                            <td><?php echo $row['Date']; ?></td>
                            <td><?php echo $row['Customer']; ?></td>
                            <td><?php echo $row['Product']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Rate']; ?></td>
                            <td><?php echo $row['Price']; ?></td>
                            <td><?php echo $row['Username']; ?></td>
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
                                echo"No result found";
                            }
                    ?>
                 </div>
            </div>
        </div>
    </body>
</html>
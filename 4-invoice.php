<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:0-login.php");
    }

    $page="4-invoice.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>invoices</title>
    </head>
    <body>
        <div id="inv1">
            <div class="menu">
                <?php include 'nav.php';?>
            </div>
            <h2>Invoice</h2>
            <div id="inv2">
                <div id="inv3">
                    <table id="invoicetable">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Customer name</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Price</th>
                            
                        </tr>
                        <!-- https://www.c-sharpcorner.com/UploadFile/051e29/dropdown-list-in-php/ -->
                        <tr>
                            <td>pull #</td>
                            <td>pull date</td>
                            <td>pull name</td>
                            <td>pull prd</td>
                            <td>pull qty</td>
                            <td>pull rate</td>
                            <td>Pull Price</td>
                        </tr>
                    </table>
                 </div>
            </div>
        </div>
    </body>
</html>
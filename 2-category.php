<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:2-category.php");
    }
?>

<html>
    <head>
        <title>Categories</title>
    </head>
    <body>
        <div id="cat1">
            <div class="menu">
                <?php include 'nav.php';?>
            </div>
            <h3>Manage Category</h3>
            <div id="cat2">
                <div id="cat3">
                    <table id="table1">
                        <tr>
                            <th>#</th>
                            <th>Categories</th>
                            <th>Quantity</th>
                            <th>Unit</th>
                            <th>Rate</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Milk</td>
                            <td>5</td>
                            <td>l</td>
                            <td>50</td>
                            <td>Edit Delete</td>
                        </tr>
                    </table>

                    <div id="cat4">
                        Insert Update Delete
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
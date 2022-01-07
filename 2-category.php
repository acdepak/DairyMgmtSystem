<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:1-login.php");
    }


    $tbl="<table border=1>
            <tr>
                <td>S.N.</td>
                <td>Categories</td>
                <td>Quantity</td>
                <td>Unit</td>
                <td>Rate</td>
            </tr>";

    $conn=mysqli_connect("localhost","root","","dairymgmtsystem");
    if(!$conn)
        {
            die("Error occured in connecting to database");
            return;
        }
    $query="select * from category";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['S.N.'];
            $category=$row['Categories'];
            $quantity=$row['Quantity'];
            $unit=$row['Rate'];
            $rate=$row['Unit'];
            $tbl=$tbl."<tr><td>$id</td>
                            <td>$category</td>
                            <td>$quantity</td
                            <td>$unit</td>
                            <td>$rate</td>
                        </tr>";
        }
        $tbl=$tbl."</table>";
    }

?>

<html>
    <head>
        <title>Categories</title>
        <link rel="stylesheet" href="./style/2-category.css" />
    </head>
    <body>
        <div class="menu">
            <?php include 'nav.php';?>
        </div>
        <div id="cat1">
            <h3>Manage Category</h3>
            <div id="cat2">
                <div id="cat3">
                    <?php echo $tbl;?>
                </div>
                <div id="divInsert">
                    <p></p>
                    <form action="2-category.php" method="post">
                        <button type="submit" formaction="insert.php">Insert Category
                        </button>
                    </form>
                    <!-- < ?php include 'insert.php';?> -->
                        Update Delete
                </div>
            </div>
        </div>
    </body>
</html>
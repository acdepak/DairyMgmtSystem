<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:0-login.php");
    }
    $page="3-bill.php";

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
            
            $product=$row['Categories'];
            $unit=$row['Unit'];
            $rate=$row['Rate'];
        }
    }
    $price="  !!! how to price";

    $sn="";
    $date=date("Y-m-d");
    $name="";
    $quantity="";
    $uname="";
    if(isset($_POST["btninsert"]))
    {
        $sn="";
        $date=$_POST[""];
        $name=$_POST[""];
        $product=$_POST[""];
        $quantity=$_POST[""];
        $rate=$_POST[""];
        $price=$_POST[""];
        $uname=$_POST[""];

        $conn=mysqli_connect("localhost","root","","dairymgmtsystem");

        if(!$conn)
            {
                die("Error occured in connection to database");
                return;
            }
            $query="INSERT INTO `invoice` (`SN`, `Date`, `Customer Name`, 
            `Product`, `Quantiry`, `Rate`, `Price`, `Username`) VALUES (NULL, '$date', 
            '$name', '$product', '$quantity', '$rate', '$price', '$uname');";
        if(mysqli_query($conn,$query))
        {
            echo("Data Saved");
        }
        else
        {
            echo("Data not saved!!");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head><title>BillPage</title></head>
    <link rel="stylesheet" href="./style/bill.css">
    <body>
        <div id="div5">
            <div class="menu">
                <?php include 'nav.php';?>
            </div>
            <div id="div6">
                <h2>Dairy Management System</h2>
            </div>
            <div id="div7">
                <div>
                    <h3>Billing</h3>
                </div>
                    <div id="div8">
                        <form class='inputfield'>
                            <label>Date :</label><input style="border:hidden;" disabled name="date" value="<?php echo $date; ?>"><br>
                            <label>Customer name: </label><input syle=""type="text" name="name" value="<?php echo $name; ?>" placeholder="Name..."><br>
                            <label>Product: </label><input disabled name="product" value="<?php echo $product; ?>"><br>
                            <label>Quantity: </label><input type="number" name="qty" value="<?php echo $quantity; ?>"><br>
                            <label>Unit: </label><input style="border:none;"disabled name="unit" value="<?php echo $unit; ?>"><br>
                            <!-- Unit of quantity, rate, Date and Price should be automated  -->
                            <label>Rate: </label><input disabled name="rate" value="<?php echo $rate; ?>"><br>
                            <label>Price: </label><input disabled name="price" value="<?php echo ($price); ?>"><br>
                            <label>User: </label><input type="text" name="user" value="<?php echo $uname; ?>" placeholder="Username...">
                        </form>
                    </div>
            </div>
    </body>
</html>
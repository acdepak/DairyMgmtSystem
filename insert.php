<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:0-login.php");
    }
    $sn="";
    $category="";
    $quantity="";
    $unit="";
    $rate="";
    $action="";
    if(isset($_POST["btninsert"]))
    {
        $id=[""];
        $category=$_POST["tcata"];
        $quantity=$_POST["tquan"];
        $unit=$_POST["tunit"];
        $rate=$_POST["trate"];

        $conn=mysqli_connect("localhost","root","","dairymgmtsystem");
        
        if(!$conn)
            {
                die("Error occured in connecting to database");
                return;
            }
                $query="INSERT INTO `category` (`SN`, `Categories`, `Quantity`, `Unit`, `Rate`, `Action`) 
                VALUES (NULL, '$category', '$quantity', '$unit', '$rate', '$action');"; 
                // echo $query;
            if(mysqli_query($conn,$query))
            {
                echo("Data Saved");
            }
            else
            {
                echo("<b>!!Data not saved!!</b>");
            }
    }
?>

<link rel="stylesheet" href="./style/insert.css">

<div class="menu">
                <?php include 'nav.php';?>
            </div>
<div id="insert">
    <form action="insert.php" method="post">
        <label>Category: </label><input type="text" name="tcata" value="<?php echo $category; ?>"><br>
        <label>Quantity: </label><input type="text" name="tquan" value="<?php echo $quantity; ?>"><br>

        <label>Unit: </label>
        <input type="text" name="tunit" value="<?php echo $unit;?>"><br>

        <label>Rate: </label><input type="text" name="trate" value="<?php echo $rate;?>"><br>
        <input class="btn" type="submit" name="btninsert" value="Insert"><br>
    </form>
</div>

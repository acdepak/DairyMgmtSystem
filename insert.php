<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:1-login.php");
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
        $action=$_POST["tact"];

        $conn=mysqli_connect("localhost","root","","dairymgmtsystem");
        
        if(!$conn)
            {
                die("Error occured in connecting to database");
                return;
            }
                $query="INSERT INTO `category` (`S.N.`, `Categories`, `Quantity`, `Unit`, `Rate`, `Action`) 
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

<script>
    label{
        padding: 8px;
    }
</script>

<div class="menu">
                <?php include 'nav.php';?>
            </div>
<div id="insert">
    <form action="insert.php" method="post">
        <label>Category: <input type="text" name="tcata" value="<?php echo $category; ?>"></label><br>
        <label>Quantity: <input type="text" name="tquan" value="<?php echo $quantity; ?>"></label><br>
        <label>Unit: <input type="text" name="tunit" value="<?php echo $unit;?>"></label><br>
        <label>Rate: <input type="text" name="trate" value="<?php echo $rate;?>"></label><br>
        <label>Action: <input type="text" name="tact" value="<?php echo $action;?>"></label><br>
        <input type="submit" name="btninsert" value="Insert"><br>
</div>
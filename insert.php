<?php
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
<div class="menu">
                <?php include 'nav.php';?>
            </div>
<div id="insert">
    <form action="insert.php" method="post">
        S.N.<br>
        Category: <input type="text" name="tcata" value="<?php echo $category; ?>"><br>
        Quantity: <input type="text" name="tquan" value="<?php echo $quantity; ?>"><br>
        Unit: <input type="text" name="tunit" value="<?php echo $unit;?>"><br>
        Rate: <input type="text" name="trate" value="<?php echo $rate;?>"><br>
        Action: <input type="text" name="tact" value="<?php echo $action;?>"><br>
        <input type="submit" name="btninsert" value="Insert"><br>
</div>
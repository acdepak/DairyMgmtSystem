<?php
    include_once 'session.php'; // Includes the session and connection
    include_once 'nav.php'; // renders the Navigation menu 

    $sn="";
    $category="";
    $quantity="";
    $unit="";
    $rate="";
    if(isset($_POST["btninsert"]))
    {
        $id=[""];
        $category=$_POST["tcata"];
        $quantity=$_POST["tquan"];
        $unit=$_POST["tunit"];
        $rate=$_POST["trate"];

// sql query to insert a new category into category table
        $query="INSERT INTO `category` (`SN`, `Categories`, `Quantity`, `Unit`, `Rate`) 
        VALUES (NULL, '$category', '$quantity', '$unit', '$rate');"; 
        
        if(mysqli_query($mysqli,$query))
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

<div id="insert">
    <form action="insert.php" method="post">
        <label>Category: </label><input type="text" name="tcata" value="<?php echo $category; ?>"><br>
        <label>Quantity: </label><input type="text" name="tquan" value="<?php echo $quantity; ?>"><br>
        <label>Unit: </label><input type="text" name="tunit" list="tunit" value="<?php echo $unit;?>"><br>
        <label>Rate: </label><input type="text" name="trate" value="<?php echo $rate;?>"><br>
        <input class="btn" type="submit" name="btninsert" value="Insert"><br>
        <datalist id="tunit">
            <option value="KG">
            <option value="Liter">
            <option value="Piece">
            <option value="Dozen">
            <option value="Pack">
        </datalist>
    </form>
</div>

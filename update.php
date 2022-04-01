<?php 
include_once 'session.php';
include_once 'nav.php';

$Unit=""; $Categories=""; $Quantity=""; $Rate="";

if(count($_POST)>0) {
    mysqli_query($mysqli,"UPDATE category set SN='" . $_POST['SN'] . "', Categories='" . $_POST['Categories'] . "',
        Quantity='" . $_POST['Quantity'] . "', Unit='" . $_POST['Unit'] . "' ,
        Rate='" . $_POST['Rate'] . "' WHERE SN='" . $_POST['SN'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($mysqli,"SELECT * FROM category WHERE SN='" . $_GET['SN'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Update</title>
    </head>
    <link rel="stylesheet" href="./style/bill.css">
    <body>
        <p id="upd">Update Categories</p>
        <form name="frmUser" method="post" action="" class="inputfield">
            <div><?php if(isset($message)) { echo $message; } ?>
            </div>

            <label>S.N.: </label>
            <input type="hidden" name="SN" class="txtField" value="<?php echo $row['SN']; ?>">
            <input type="text" name="SN" value="<?php echo $row['SN']; ?>">
            <br>
            <label>Category: </label>
            <input type="text" name="Categories" class="txtField" value="<?php echo $row['Categories']; ?>">
            <br>
            <label>Quantity: </label>
            <input type="text" name="Quantity" class="txtField" value="<?php echo $row['Quantity']; ?>">
            <br>
            <label>Unit: </label>
            <input type="text" name="Unit" class="txtField" list="tunit" value="<?php echo $row['Unit'];?>">
            <br>
            <datalist id="tunit">
                <option value="KG">
                <option value="Liter">
                <option value="Piece">
                <option value="Dozen">
                <option value="Pack">
            </datalist>
            <label>Rate: </label>
            <input type="text" name="Rate" class="txtField" value="<?php echo $row['Rate'];?>">
            <br>
            <input class="btn" type="submit" name="submit" value="Update"><br>
             </form>
    </body>
</html>


      
        
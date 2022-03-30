<?php 
$conn=mysqli_connect("localhost","root","","dairymgmtsystem");
if(!$conn)
{
    die("Error occured in connecting to database");
    return;
}
include_once 'nav.php';

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE category set SN='" . $_POST['SN'] . "', category='" . $_POST['category'] . "',
        quantity='" . $_POST['quantity'] . "', unit='" . $_POST['unit'] . "' ,
        rate='" . $_POST['rate'] . "' WHERE SN='" . $_POST['SN'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM category WHERE SN='" . $_GET['SN'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <form name="frmUser" method="post" action="">
            <div><?php if(isset($message)) { echo $message; } ?>
            </div>
            <div style="padding-bottom:5px;">
                <a href="2-category.php">Category List</a>
            </div>

            <label>S.N.: </label>
            <input type="hidden" name="SN" class="txtField" value="<?php echo $row['SN']; ?>">
            <input type="text" name="SN" value="<?php echo $row['SN']; ?>">
            <br>
            <label>Category: </label>
            <input type="text" name="category" class="txtField" value="<?php echo $row['category']; ?>"><br>

            <label>Quantity: </label>
            <input type="text" name="quantity" class="txtField" value="<?php echo $row['quantity']; ?>"><br>

            <label>Unit: </label>
            <input type="text" name="unit" class="txtField" value="<?php echo $row['unit'];?>"><br>

            <label>Rate: </label>
            <input type="text" name="rate" class="txtField" value="<?php echo $row['rate'];?>"><br>
            <input class="btn" type="submit" name="submit" value="Update"><br>
             </form>
    </body>
</html>
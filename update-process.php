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
                <a href="update.php">Category List</a>
            </div>
            <label>S.N.: </label>
            <input type="hidden" name="SN" value="<?php echo $row['SN']; ?>">
            <input type="text" name="SN" value="<?php echo $row['SN']; ?>"><br>
            <label>Category: </label><input type="text" name="tcata" value="<?php echo $row['category']; ?>" class="txtField"><br>
            <label>Quantity: </label><input type="text" name="tquan" value="<?php echo $row['quantity']; ?>" class="txtField"><br>
            <label>Unit: </label><input type="text" name="tunit" value="<?php echo $row['unit'];?>" class="txtField"><br>
            <label>Rate: </label><input type="text" name="trate" value="<?php echo $row['rate'];?>" class="txtField"><br>
            <!-- <label>Action: </label><input type="text" name="tact" value="<#?php echo $action;?>"><br> -->
            <input class="btn" type="submit" name="btnupdate" value="Update"><br>
            <!-- Username: <br>
            <input type="hidden" name="userid" class="txtField" value="<#?php echo $row['userid']; ?>">
            <input type="text" name="userid"  value="<#?php echo $row['userid']; ?>"><br>
            First Name: <br>
            <input type="text" name="first_name" class="txtField" value="<#?php echo $row['first_name']; ?>"><br>
            Last Name :<br>
            <input type="text" name="last_name" class="txtField" value="<#?php echo $row['last_name']; ?>"><br>
            City:<br>
            <input type="text" name="city_name" class="txtField" value="<#?php echo $row['city_name']; ?>"><br>
            Email:<br>
            <input type="text" name="email" class="txtField" value="<#?php echo $row['email']; ?>"><br>
            <input type="submit" name="submit" value="Submit" class="buttom"> -->
        </form>
    </body>
</html>
<!-- # https://www.studentstutorial.com/php/php-mysql-data-update.php 
# combine update.php in 2-category.php && use update-process.php properly  -->
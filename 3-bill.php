<?php
    include_once 'session.php';
    include_once 'nav.php';
    include_once 'bill_up.php';

//declaring variables
    $price="";
    $date=date("Y-m-d");
    $c_name="";    $quantity="";    $u_name="Deepak";
    $Categories="";
    $Unit="";       $Rate="";

// storing the values in the input field to render
if(isset($POST['btninsert'])) 
{
    $c_name=$_POST['c_name'];    $quantity=$_POST['qty'];
    $Categories=$_POST['Categories'];    $Unit=$_POST['Unit'];
    $Rate=$_POST['Rate'];    $u_name=$_POST['u_name'];

    // $mysqli=mysqli_connect("localhost","root","","dairymgmtsystem");
    // if(!$mysqli){
    //     echo ("Error connecting to database");
    // }
    // else{
        $sql = "INSERT INTO invoice (`SN`, `Date`, `Customer`, `Product`, `Quantity`, `Rate`, `Price`, `Username`) VALUES (NULL, '$date', '$c_name', '$Categories', '$quantity', '$Unit', '$Rate', '$price', '$u_name')"; 
        
        if(mysqli_query($mysqli,$sql))
        { 
            echo("Data Saved");}
        else
        {
            echo("!!! DATA NOT Saved !!!");
        }
   // }
} 
?>

<!DOCTYPE html>
<html>
    <head><title>BillPage</title>
    <script src="jquery-3.6.0.min.js"></script>
</head>
    <link rel="stylesheet" href="./style/bill.css">
<body>
    <div id="div6">
        <h2>Dairy Management System</h2>
    </div>
    <div id="div7">
        <div>
            <h3>Billing</h3>
        </div>
            <div id="div8">
                <form action="3-bill.php" class='inputfield' method="post">
                    <label>Date :</label><input style="border:hidden;" type="text" name="date" value="<?php echo $date; ?>"><br>
                    <label>Customer name: </label>
                    <input syle=""type="text" name="c_name" value="<?php echo $c_name; ?>" placeholder="Name..."><br>
                    
                    <label>Product: </label>
                    <!-- <input type="hidden" name="Categories" class="txtField""value="<?php echo $row['Categories']; ?>"> -->
                    <input type="text" name="Categories" id="Categories" style="border:hidden;" value="<?php echo $row['Categories']; ?>">
                                                        
                    <br>
                    <label>Unit: </label>
                    <input type="text" name="Unit" id="Unit" style="border:hidden;"value="<?php echo $row['Unit']; ?>">
                    
                    <br>
                    <label>Rate: </label>
                    <input type="text" name="Rate" id="Rate" style="border:hidden;"value="<?php echo $row['Rate']; ?>">
                    
                    <br>
                    <label>Quantity: </label>
                    <input type="text" name="qty" value="<?php echo $quantity; ?>"
                    id="qty" onkeyup="myFunction()"><br>
                    <label>Price: </label>
                    <input type="text" name="price" id="price" style="border:hidden;"value="<?php echo ($price); ?>"><br>
                    <label>Username: </label>
                    <input syle=""type="text" name="u_name" value="<?php echo $u_name; ?>"><br>
                    <input type="submit" name="btninsert" value="Save"><br>
                </form>
            </div>
        </div>
    <script>
// onkeyup updates on every keypressed
        function myFunction(){
            var rate = document.getElementById("Rate").value;
            var qty = document.getElementById("qty").value;
            document.getElementById("price").value= (Number(rate)*Number(qty));
        }
    </script>    
</body>
</html>
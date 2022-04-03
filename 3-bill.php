<?php
    include_once 'session.php';
    include_once 'nav.php';

//declaring variables
    $price="";
    $date=date("Y-m-d");
    $c_name="";    $quantity="";    $u_name="Deepak";
    $Categories="";
    $Unit="";       $Rate="";

// storing the values in the input field to render
// if(isset($_GET['button'])) {
//     $c_name=$_GET['c_name'];    $quantity=$_GET['qty'];
//     $Categories=$_GET['Categories'];    $Unit=$_GET['Unit'];
//     $Rate=$_GET['Rate'];    $u_name=$_GET['u_name'];
// }

// fetching from category table in database
$result = mysqli_query($mysqli,"SELECT * FROM category
WHERE Categories='".$_GET['Categories']."'");
$row = mysqli_fetch_array($result);
  
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
                <form class='inputfield' action="bill_up.php" method="get">
                    <label>Date :</label><input style="border:hidden;" disabled name="date" value="<?php echo $date; ?>"><br>
                    <label>Customer name: </label>
                    <input syle=""type="text" name="c_name" value="<?php echo $c_name; ?>" placeholder="Name..."><br>
                    
                    <label>Product: </label>
                    <input disabled name="Categories" id="Categories" value="<?php echo $row['Categories']; ?>">
                                                        
                    <br>
                    <label>Unit: </label>
                    <input disabled name="Unit" id="Unit" value="<?php echo $row['Unit']; ?>">
                    
                    <br>
                    <label>Rate: </label>
                    <input disabled name="Rate" id="Rate" value="<?php echo $row['Rate']; ?>">
                    
                    <br>
                    <label>Quantity: </label>
                    <input type="text" name="qty" value="<?php echo $quantity; ?>"
                    id="qty" onkeyup="myFunction()"><br>
                    <label>Price: </label>
                    <input disabled name="price" id="price" value="<?php echo ($price); ?>"><br>
                    <label>Username: </label>
                    <input syle=""type="text" name="u_name" value="<?php echo $u_name; ?>"><br>
                    <input type="submit" name="button" value="Submit"><br>
                </form>
            </div>
        </div>
    <script>
// onkeyup updates on every keypressed
        function myFunction(){
            var rate = document.getElementById("Rate").value;
            var qty = document.getElementById("qty").value;
            document.getElementById("price").value= "Rs." + (Number(rate)*Number(qty));
        }
    </script>    
</body>
</html>
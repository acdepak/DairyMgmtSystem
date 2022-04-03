<?php
    include_once 'session.php';
    $page="3-bill.php";
    include_once 'nav.php';

    $price="";
    $date=date("Y-m-d");
    $c_name="";    $quantity="";    $uname="";
    $Categories="";
    $Unit="";       $Rate="";
    
if(isset($_GET['button'])) {
    $c_name=$_GET['c_name'];    $quantity=$_GET['qty'];
    $Categories=$_GET['Categories'];    $Unit=$_GET['Unit'];
    $Rate=$_GET['Rate'];
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
                        <form class='inputfield' action="3-bill.php" method="get">
                            <label>Date :</label><input style="border:hidden;" disabled name="date" value="<?php echo $date; ?>"><br>
                            <label>Customer name: </label>
                            <input syle=""type="text" name="c_name" value="<?php echo $c_name; ?>" placeholder="Name..."><br>
                            
                            <label>Product: </label>
                            <input type='text' name="Categories" id="Categories" value="<?php echo $Categories; ?>">
                                                                
                            <br>
                            <label>Unit: </label>
                            <input type="text" name="Unit" id="Unit" value="<?php echo $Unit; ?>">
                            
                            <br>
                            <label>Rate: </label>
                            <input type="text" name="Rate" id="Rate" value="<?php echo $Rate; ?>">
                            
                            <br>
                            <label>Quantity: </label>
                            <input type="text" name="qty" value="<?php echo $quantity; ?>"
                            id="qty" onkeyup="myFunction()"><br>
                            <label>Price: </label>
                            <input type="text" name="price" id="price" value="<?php echo ($price); ?>"><br>
                            <input type="submit" name="button" value="Submit"><br>
                        </form>
                    </div>
            </div>
        <script>
            function myFunction(){
                var rate = document.getElementById("Rate").value;
                var qty = document.getElementById("qty").value;
                document.getElementById("price").value= "Rs." + (Number(rate)*Number(qty));
            }
        </script>    
    </body>
</html>
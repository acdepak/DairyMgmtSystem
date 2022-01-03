<?php
session_start();
if(isset($_SESSION["islogin"]))
    {

    }
else
    {
        header("location:3-bill.php");
    }
?>

<html>
    <head><title>BillPage</title></head>
    <body>
        <div id="div5">
            <div class="menu">
                <?php include 'nav.php';?>
            </div>
            <div id="div6">
                <h2>Dairy Management System</h2>
            </div>
            <div id="div7">
                <div>
                    <h3>Billing</h3>
                <div id="div8">
                    <form>
                        Date & Time: <?php echo date("Y-m-d h:i:s"); ?><br>
                        Customer name: <input type="text" name="cName" placeholder="Name"><br>
                        Product: <input type="text" name="product" placeholder="Milk, Ghee..."><br>
                        Quantity: <input type="number" name="qty" > Unit<br>
                        <!-- Unit of quantity, rate, Date and Price should be automated  -->
                        Rate:    <br>
                        Price:   <br>
                        User: <input type="text" name="user" placeholder="Username">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
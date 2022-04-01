<?php
    include_once 'session.php';
    $page="3-bill.php";
    include_once 'nav.php';

    // $sql="select * from category";

    $Categories = $_REQUEST['Categories'];
    
    if($Categories !== ""){
        $query = mysqli_query($mysqli,"SELECT Unit, Rate FROM category WHERE Categories ='" . $_REQUEST['Categories'] . "'");
        
        $row = mysqli_fetch_array($query);
            $Unit = $row["Unit"];
            $Rate = $row["Rate"];        
    }

    $result = array("$Unit", "$Rate");
    $myJSON = json_encode($result);
    echo $myJSON;

    $price="  !!! JS to price";
    $date=date("Y-m-d");
    $name="";
    $quantity="";
    $uname=""; $unit=""; $rate=""; 
    $Categories="";
    // $result0= mysqli_query($mysqli,$sql); 
        // while($row= mysqli_fetch_array($result0))
        //     {
        //         $product=$product."<option>$row[1]</option>";
        //         $unit=$unit."<option>$row[3]</option>";
        //         $rate=$rate."<option>$row[4]</option>";
        //     }
            
        // $result1= mysqli_query($mysqli,$sql); 
        // while($row= mysqli_fetch_array($result1))
        //     {
        //         $unit=$unit."<option>$row[3]</option>";
        //     }

        // $result2= mysqli_query($mysqli,$sql); 
        // while($row= mysqli_fetch_array($result2))
        //     {
        //         $rate=$rate."<option>$row[4]</option>";
        //     }
    
    
?>

<!DOCTYPE html>
<html>
    <head><title>BillPage</title>
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
                        <form class='inputfield'>
                            <label>Date :</label><input style="border:hidden;" disabled name="date" value="<?php echo $date; ?>"><br>
                            <label>Customer name: </label><input syle=""type="text" name="name" value="<?php echo $name; ?>" placeholder="Name..."><br>
                            
                            <label>Product: </label>
                            <input type='text' name="Categories" id="Categories" placeholder='Enter Product' 
                                onkeyup="GetDetail(this.value)" value="">
                            <!-- <select>< ?php echo $Categories; ?></select> -->
                            <br>

                            <label>Quantity: </label><input type="number" name="qty" value="<?php echo $quantity; ?>"><br>

                            <label>Unit: </label>
                            <input type="text" name="Unit" id="Unit" value="">
                            <!-- <select>< ?php echo $unit; ?></select> -->
                            <br>
                            
                            <label>Rate: </label>
                            <input type="text" name="Rate" id="Rate" value="">
                            <!-- <select>< ?php echo $rate; ?></select> -->
                            <br>
                            <label>Price: </label><input disabled name="price" value="<?php echo ($price); ?>"><br>
                            <label>User: </label><input type="text" name="user" value="<?php echo $uname; ?>" placeholder="Username...">
                        </form>
                    </div>
            </div>
            <script>
                function GetDetail(str){
                    if(str.length==0){
                        document.getElementById("Unit").value="";
                        document.getElementById("Rate").value="";
                        return;
                    }
                    else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                var myObj = JSON.parse(this.responseText);
                                document.getElementById("Unit").value = myObj[0];
                                document.getElementById("Rate").value = myObj[1];

                            }
                        };
                        xmlhttp.open("GET","retrive.php?Categories=" + str, true);
                        xmlhttp.send();
                    }
                }
            </script>
    </body>
</html>
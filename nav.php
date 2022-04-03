<!DOCTYPE html>
<html>
    <head><title>Dairy System</title>
    </head>
        <link rel="stylesheet" href="./style/nav.css">
    <body>
        <div class="a">
          <div class="navbar">
            <ul class="topnav">
              <div class="rnav">
                  <li class="<?php if($page=="index.php"){ ?> active <?php } ?> "><a href="index.php" >Dashboard</a></li>
                  <li class="<?php if($page=="2-category.php"){ ?> active <?php } ?> "><a href="2-category.php">Category</a></li>
                  <li class="<?php if($page=="4-invoice.php"){ ?> active <?php } ?> "><a href="4-invoice.php">Invoice</a></li>
                  <li class="<?php if($page=="retrive.php"){ ?> active <?php } ?> "><a href="retrive.php">Bill</a></li> 
                  <!--  Current page detection and changing color in it's name -->
              </div>
              <div class="lnav">
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                </div>
            </ul>
          </div>
        </div>
    </body>
        <script>
          
        </script>
</html>
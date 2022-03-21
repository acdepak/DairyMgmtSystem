<!-- <html>
    <head>
        <title>navbar</title> -->
        <style>
            body {
                margin: 0;
            }
            /* div.navbar {
                background-color: blue;
            } */
            ul.topnav {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: rgb(125, 44, 149);
            }
            ul.topnav div.lnav li {float: right;}
            ul.topnav div.rnav li {float: left;}
            ul.topnav li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none; /* removes all decoreations*/
            }
            /* ul.topnav li a:hover:not(.active) {background-color: #111;}

            ul.topnav li a.active {background-color: #04AA6D;} */
        </style>
    <!-- <head>
    <body> -->

            <div class="a">
                <div class="navbar">
                    <ul class="topnav">
                    <div class="rnav">
                            <li><a href="<?php echo '1-dashboard.php';?>">Dashboard</a></li>
                            <li><a href="<?php echo '2-category.php';?>">Category</a></li>
                            <li><a href="<?php echo '4-invoice.php';?>">Invoice</a></li>
                            <li><a href="<?php echo '3-bill.php';?>">Bill</a></li> 
                            <!--  Current page detection and changing color in it's name -->
                        </div>
                        <div class="lnav">
                            <li><a href="#profile">Profile</a></li>
                            <li><a href="#search">Search</a></li>
                        </div>
                        
                    </ul>
            </div>
        </div>
       <!-- </body>
</html> -->
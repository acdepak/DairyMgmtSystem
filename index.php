<?php
session_start();
if  (isset($_SESSION['islogin'])){
}
else header('Location:0-login.php');

$page="index.php";
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="./style/dashboard.css" />
    </head>
    <body>
        <div class="menu">
            <?php include 'nav.php';?>
        </div>
    </body>
</html>
<?php
session_start();
if  (isset($_SESSION['islogin'])){
}
else header('Location:0-login.php');

$page="index.php";
include_once 'nav.php';
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="./style/dashboard.css" />
    </head>
    <body>
    <center style=" padding-top:20%;  font-family: 'Helvetica Neue',Helvetica; font-weight: bold; font-size: 2em">
        Dashboard
    </center>
    </body>
</html>
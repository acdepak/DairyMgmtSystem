<?php
session_start();
if  (isset($_SESSION['islogin'])){
}
else header('Location:1-login.php');
?>


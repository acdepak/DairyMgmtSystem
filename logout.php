<?php
session_start();
 if(isset($_SESSION['islogin'])){
      session_destroy();
      header("location:1-login.php");
 }
?>
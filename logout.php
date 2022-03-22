<?php
session_start();
 if(isset($_SESSION['islogin'])){
      session_destroy();
      header("location:0-login.php");
 }
    else{
        echo " <center>
         <h3 style= 'padding-top:25px; font-family:Tahoma;'>
          You are not logged in. Please click <a href='./0-login.php' > here </a> to continue.
          </h3>
        </center>";
       
    }
?>
<?php
session_start();
if(isset($_POST["loginbtn"]))
{
    if($_POST["username"]=="admin" && $_POST["password1"]=="password")
    {
        $_SESSION["islogin"]=true;
        header("location:index.php");
    }
    else
    {
        echo("Please enter valid username and password.");
    }
}

$username="root";
$password="";
$host="localhost";
$db_name="dairymgmtsystem";

//create connection
$mysqli=new mysqli($host,$username,$password,$db_name);

//check connection
if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>

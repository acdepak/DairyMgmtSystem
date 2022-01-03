<?php
session_start();
if(isset($_POST["loginbtn"]))
{
    if($_POST["username"]=="admin" && $_POST["password1"]=="password")
    {
        $_SESSION["islogin"]=true;
        header("location:3-bill.php");
    }
    else
    {
        echo("Please enter valid username and password.");
    }
}
?>

<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="./style/1-login.css" />
    </head>
    <body>
        <div id="div1">
            
            <div id="div2">
                <h2>Dairy Management System</h2>
            </div>
            <div id="div3">
                    <h3>Login</h3>
                <div id="div4">
                    <form action="1-login.php" method="post">
                        <p><input type="text" name="username" placeholder="Username"></p>
                        <p><input type="password" name="password1" placeholder="Password"></p>
                        <input type="submit" name="loginbtn" value="Login">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
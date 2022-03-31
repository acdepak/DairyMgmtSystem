<?php
include_once 'session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="./style/login.css" />
    </head>
    <body>
        <div id="div1">
            
            <div id="div2">
                <h2>Dairy Management System</h2>
            </div>
            <div id="div3">
                    <h3>Login</h3>
                <div id="div4">
                    <form action="0-login.php" method="post">
                        <p><input type="text" name="username" placeholder="Username"></p>
                        <p><input type="password" name="password1" placeholder="Password"></p>
                        <input id="button" type="submit" name="loginbtn" value="Login">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
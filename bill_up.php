<?php
//only php for inserting in invoice table
include_once 'session.php';
include_once 'nav.php';

$price="";
$date=date("Y-m-d");
$c_name="";    $quantity="";    $u_name="Deepak";
$Categories="";
$Unit="";       $Rate="";

if(count($_GET)>0) {
// inserting in invoice
$query = "INSERT INTO `invoice` (`SN`, `Date`, `Customer`, `Product`, `Quantity`, `Rate`, `Price`, `Username`) 
VALUES (NULL, '$date', '$c_name', '$Categories', '$quantity', '$Unit', '$Rate', '$price', '$u_name');"; 
    if(mysqli_query($mysqli,$query))
    { 
        echo("Data Saved");}
    else
    {
        echo("!!! DATA NOT Saved !!!");
    }
}


?>
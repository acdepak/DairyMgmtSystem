<?php
//only php for inserting in invoice table
include_once 'session.php';

// fetching from category table in database
$result = mysqli_query($mysqli,"SELECT * FROM category WHERE Categories='".$_GET['Categories']."'");
$row = mysqli_fetch_array($result);


?>
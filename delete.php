<?php
include_once 'session.php';
include_once 'nav.php';

$sql = "DELETE FROM category WHERE SN='" . $_GET["SN"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "autoshop";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $db)  or die("Connection failed". $conn -> error);

?>


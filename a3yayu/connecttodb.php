<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";
$dbname = "lreid2assign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname); 
if (mysqli_connect_errno()) {
	die("Database connection failed:".
	mysqli_connection_error()."(".mysqli_connect_errno().")");
}
?>

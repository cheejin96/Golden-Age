<?php
$host = "localhost";
$db_name = "goldenagedb";
$username = "root";
$password = "";

$con = mysqli_connect($host, $username, $password, $db_name);
if ($con === false)
{
	die("ERROR: Could not connect." .mysqli_connect_error());
	return mysqli_connect_error(); 
}
?>

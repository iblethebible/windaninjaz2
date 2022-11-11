<?php
$servername = "database-window-routeec2instance.c4conlohdwb8.eu-west-2.rds.amazonaws.com";
$username = "admin";
$password = "Bighead4548";
$dbname = "windaninjazdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

?>

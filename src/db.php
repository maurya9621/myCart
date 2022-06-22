<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname= "allphptricks";

$conn = new mysqli($servername, $username, $password, $dbname);


	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>
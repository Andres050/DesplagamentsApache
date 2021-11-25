<?php
	$servername = "localhost";
	$user = "andres";
	$password = "andres12345A_";
	$database = "andres_database";

	$conn = new mysqli($servername, $user, $password, $database);

	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}
?>

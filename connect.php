<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "nindy_ticketing";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
		echo "successfully connected";
	}
?>
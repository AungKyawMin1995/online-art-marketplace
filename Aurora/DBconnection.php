<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "akm";

	// Create connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?> 
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbt1305";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check the connection
	if(!$conn){
		//die("Connection failed: " . mysqli_connect_error());
	}
	else{
		//echo"Connection successful!";
	}
	?>
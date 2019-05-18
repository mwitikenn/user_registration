<?php
	include ("connect.php");
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$query = "INSERT INTO user (first_name, last_name, username, user_password)".
	"VALUES ('".$first_name ."','" .$last_name . "','" . $username."','" . $password. "')";
	
	$result= mysqli_query($conn,$query) or die("Error occured: " .mysqli_error($conn));
	
	if($result){
		echo "New record added <br> ";
		echo "<a href='lab6.html'>New registration</a>";
	}
	else{
		echo "Error occured: " +mysqli_error($conn);
	}
	
?>
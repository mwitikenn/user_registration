<?php
	include ("connect.php");
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
		$query="select * from user where username='". $username ."' and user_password = '" . $password ."'";
		
		$result = mysqli_query($conn, $query) or die("Error:" .mysqli_error($conn));
		
		if(mysqli_num_rows($result) > 0){
			
			session_start();
			$_SESSION["username"] = $username;
			header("location:view.php");
		}else{
			header("location:login.php");
		}
		
		mysqli_close($conn);
?>
			

<?php
	include ("connect.php");

 $id = $_GET['id'];
 
 $query="SELECT * FROM user WHERE id='".$id."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_assoc($result);
 $first_name= $row['first_name'];
 $last_name= $row['last_name'];
 $username= $row['username'];
?>

<html>
		<head>
			<title>Lab 6</title>
            <script type="text/javascript" src="validate.js"></script>
		</head>

	<body>
    	<form name="myForm" action="register.php" onSubmit="return validateForm()" method="POST">
        	First Name: <input type="text" name="first_name" value="<?php echo $first_name; ?>" /><br ><br>
            Last Name: <input type="text" name="last_name" value="<?php echo $last_name; ?>" /><br ><br>
            Username : <input type="text" name="username" value="<?php echo $username; ?>" /><br ><br>
            Password : <input type="password" name="password" /><br ><br>
            <input type="submit" value="Update" name="" onClick="<a href='update.php'" >
            </form>
            <br> <br>
           
	</body>
   
</html>
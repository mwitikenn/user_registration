<?php

	session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
?>
	<a href="logout.php"> title="Logout"</a>
<?php
	include ("connect.php");
	
	$query = "SELECT * FROM user";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0){
		
?>
	<table width="40%">
    <tr>
    	<td>First name</td>
        <td>Last name</td>
        <td>Username</td>
        <td>Edit</td>
        <td>Delete</td>
     </tr>
<?php
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
			echo "<td>" . $row["first_name"] . "</td>";
			echo "<td>" . $row["last_name"] . "</td>";
			echo "<td>" . $row["username"] . "</td>";
			echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
			echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>";
	}
	echo "</table>";
	}
	else{
		echo "No records were found!";
	}
?>
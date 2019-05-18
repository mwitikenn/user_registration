<script type="text/javascript" src="confirm.js"></script> 
<?php
	include ("connect.php");
	
	$id = $_GET['id'];
	 if (isset($id) && is_numeric($id))
 {

 
 $query="DELETE * FROM user WHERE id='".$id."'";

 $result = mysqli_query($conn, $query)or die(mysqli_error($conn)); 
 	if($result==true){
		ConfirmDelete();
	
	}
 
 header("Location: view.php");
 }
 
 
 else
 {
 header("Location: view.php");
 }
	
	
	
mysqli_close($conn);
?>
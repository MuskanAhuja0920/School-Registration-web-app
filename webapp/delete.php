<?php  
	$connect = mysqli_connect("localhost", "root", "", "userverification",3307);
	$sql = "DELETE FROM student WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>
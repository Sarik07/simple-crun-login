<?php
	
	include 'connect.php';
	
	
	$sql= "select * from tb_users";
	
	$result=mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	
	//$row= mysqli_fetch_array($result);
	
	$row= mysqli_fetch_assoc($result);
	

	echo $row["username"];

	
	
	
?>
<?php
	$dbname="second";
	$hostname="localhost";
	$db_password="";
	$db_username="root";
	

	$conn=mysqli_connect($hostname, $db_username, $db_password,$dbname);
	
	if(!$conn)
		{
		die('Connection Fail: '.mysqli_connect_errno());
			
		}
	
?>
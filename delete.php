<?php 
	include 'connect.php';
	
	if(isset($_POST['button_input'])){
				
					
				 $sql = "DELETE FROM user WHERE &id=$'id'";
				$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
				}
		
	
?>

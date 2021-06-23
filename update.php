<?php 
	include 'connect.php';
	
	if(isset($_POST['button_input'])){
		
		
		}
	
?>

<h2> Add User </h2>

<form action="" method="post">
	<table>
    	<tr>
        	<td>Username</td>
            <td><input name="add_username"></td>
        </tr>
        <tr>
        	<td>Address</td>
            <td><input name="add_address"></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input name="add_email"></td>
        </tr>
        <tr>
        	<td>Mobile</td>
            <td><input name="add_mobile"></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="submit" name="button_input"></td>
        </tr>
    </table>
<form>
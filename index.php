<?php
include 'connect.php';

?>
<html>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
h1{font-size:36px;
	color:#CC0099;
}

</style>
<body>
<h1>dsgfsgdsgadsagdasgdh</h1>
<div id="link">
	<a href="add.php"> ADD </a> 
</div>
<div id="data">
<h2> Users List </h2>
<table id="tata" width="832" border="1" align="center" cellpadding="5">
  <tr>
    <td width="50">ID </td>
    <td width="137">Name</td>
    <td width="252">Address</td>
    <td width="165">Email</td>
    <td width="154">Mobile Number</td>
    <td width="154">Action</td>
  </tr>
  <?php
  	//==$sql = "select user_id,username, address, created_at, modified_at from tb_users";
	$sql = "select * from user";
	
	$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	//$a=mysqli_fetch_array($result);
	//echo $result["username"];
	if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))	
			{
  //echo $row["username"];
  
  ?>
  
  <tr>
 	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['mobile'] ?></td>
    <td>
    	<a href="update.php" <?php $user_id=$row['id'] ?>>>> Update</a>
        <a href="delete.php" <?php $user_id=$row['id'] ?>>>> Delete</a>
    </td>
    
  </tr>
<?php
		//echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row['address']."</td><td>".$row["email"]."</td><td>".$row['mobile']."</td></tr>";	
			
			}
		}

?>
</table>
</div>


</body>
</html>
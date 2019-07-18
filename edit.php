<?php
include "where.php";
if(isset($_POST['btn_submit'])){
	$sql = "UPDATE form SET first_name='".$_POST['varchar_first_name']."',
							last_name='".$_POST['varchar_last_name']."',
							email='".$_POST['varchar_email']."',
							mobile_no='".$_POST['varchar_mobile_no']."'
							Where  id='".$_POST['int_id']."'
							";
							
							if(mysqli_query($conn, $sql)){
								header('Location:index.php');
							}else{
								echo "Error".mysqli_error($conn);
							}
    						 }
    						 $id = '';
    						 $first_name = '';
    						 $last_name = '';
     						 $email = '';
     						 $mobile_no = '';if(isset($_GET['id'])){
     	$sql = "select id, first_name, last_name, email, mobile_no from form 
     			where id=".$_GET['id'];
     			 $result = mysqli_query($conn,$sql);
     			 if(mysqli_num_rows($result) > 0){
     			 	$row = mysqli_fetch_assoc($result);
     			 	$id = $row['id'];
     			 	$first_name = $row['first_name'];
     			 	$last_name = $row['last_name'];
     			 	$email = $row['email'];
     			 	$mobile_no = $row['mobile_no'];

     			 }
     }
?>
<h2>Add Data</h2>
<form action="" method="post">
	<table>
		<tr>
			<td>id</td>
			<td><input name="int_id" value="<?=$id?>"></td>
		</tr>
		<tr>
			<td>first_name</td>
			<td><input name="varchar_first_name" value="<?=$first_name?>"></td>
		</tr>
		<tr>
			<td>last_name</td>
			<td><input name="varchar_last_name" value="<?=$last_name?>"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input name="varchar_email" value="<?=$email?>"></td>
		</tr>
		<tr>
			<td>mobile_no</td>
			<td><input name="varchar_mobile_no" value="<?=$mobile_no?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="int_id" value="<?=$id?>"></td>
			<td><input type="submit" name="btn_submit"s></td>
		</tr>
	</table>
	
</form>
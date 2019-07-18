<?php
include "where.php";


if(isset($_POST["btn_submit"])){
     
$sql = "INSERT INTO form (id,first_name,last_name,email,mobile_no)
VALUES ('".$_POST['int_id']."','".$_POST['varchar_first_name']."','".$_POST['varchar_last_name']."','".$_POST['varchar_email']."','".$_POST['varchar_mobile_no']."')";
if(mysqli_query($conn,$sql)){
	header('Location:index.php');
}else{
	echo "error".mysqli_error($conn);
}


}
?>
<h2>Add Data</h2>
<form action="" method="post">
	<table>
		<tr>
			<td>id</td>
			<td><input name="int_id"></td>
		</tr>
		<tr>
			<td>first_name</td>
			<td><input name="varchar_first_name"></td>
		</tr>
		<tr>
			<td>last_name</td>
			<td><input name="varchar_last_name"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input name="varchar_email"></td>
		</tr>
		<tr>
			<td>mobile_no</td>
			<td><input name="varchar_mobile_no"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn_submit"></td>
		</tr>
	</table>
	
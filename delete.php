<?php
include "where.php";

if(isset($_GET['id'])){
	$sql = "DELETE from form where id='".$_GET['id']."'";
	if(mysqli_query($conn, $sql)){
		header('Location:index.php');
	}else{
		echo "Error".mysqli_error($conn);
	}
}
?>
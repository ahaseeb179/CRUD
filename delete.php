<?php

	include 'conn.php';

	$id = $_GET['id'];

	$q = "DELETE FROM crud WHERE id = $id";
	mysqli_query($con,$q);
	header('location:data.php');
?>
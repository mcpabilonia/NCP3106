<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'brgy_db') or die(mysqli_error($mysqli));

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM brgyy_db WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";
	
	header("location: Barangay Info.php");
}
?>
<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'admin_brgy') or die(mysqli_error($mysqli));

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM admin_db WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";
	
	header("location: Barangay Acc.php");
}
?>
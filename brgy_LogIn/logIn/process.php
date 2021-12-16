<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'brgy_db') or die(mysqli_error($mysqli));

$id = 0;
$family_name = '';
$first_name = '';
$middle_name = '';
$alias = '';
$face_marks = '';
$birth_date = '';
$birth_place = '';
$sex = '';
$civil_status = '';
$nationality = '';
$religion = '';
$occupation = '';
$sector = '';
$spouse_name = '';
$spouse_occupation = '';
$voter_status = '';
$voter_active = '';
$city_address = '';
$prov_address = '';
$purok = '';
$home_numone = '';
$home_numtwo = '';
$mob_numone = '';
$mob_numtwo = '';
$email = '';
$resident_type = '';
$resident_status = '';


if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM brgyy_db WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";
	
	header("location: Barangay Info.php");
}

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$result = $mysqli->query("SELECT * FROM brgyy_db WHERE id=$id") or die($mysqli->error());
	if(is_countable($result) >= 0){
		$row = $result->fetch_array();
		$family_name = $row['family_name'];
		$first_name = $row['first_name'];
		$middle_name = $row['middle_name'];
		$alias = $row['alias'];
		$face_marks = $row['face_marks'];
		$birth_date = $row['birth_date'];
		$birth_place = $row['birth_place'];
		$sex = $row['sex'];
		$civil_status = $row['civil_status'];
		$nationality = $row['nationality'];
		$religion = $row['religion'];
		$occupation = $row['occupation'];
		$sector = $row['sector'];
		$spouse_name = $row['spouse_name'];
		$spouse_occupation = $row['spouse_occupation'];
		$voter_status = $row['voter_status'];
		$voter_active = $row['voter_active'];
		$city_address = $row['city_address'];
		$prov_address = $row['prov_address'];
		$purok = $row['purok'];
		$home_numone = $row['home_numone'];
		$home_numtwo = $row['home_numtwo'];
		$mob_numone = $row['mob_numone'];
		$mob_numtwo = $row['mob_numtwo'];
		$email = $row['email'];
		$resident_type = $row['resident_type'];
		$resident_status = $row['resident_status'];
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$civil_status = $_POST['civil_status'];
	$religion = $_POST['religion'];
	$occupation = $_POST['occupation'];
	$sector = $_POST['sector'];
	$spouse_name = $_POST['spouse_name'];
	$spouse_occupation = $_POST['spouse_occupation'];
	$voter_status = $_POST['voter_status'];
	$voter_active = $_POST['voter_active'];
	$city_address = $_POST['city_address'];
	$prov_address = $_POST['prov_address'];
	$purok = $_POST['purok'];
	$home_numone = $_POST['home_numone'];
	$home_numtwo = $_POST['home_numtwo'];
	$mob_numone = $_POST['mob_numone'];
	$mob_numtwo = $_POST['mob_numtwo'];
	$resident_type = $_POST['resident_type'];
	$resident_status = $_POST['resident_status'];
	
	
	$mysqli->query("UPDATE brgyy_db SET civil_status='$civil_status', religion='$religion', occupation='$occupation', sector='$sector', spouse_name='$spouse_name', spouse_occupation='$spouse_occupation', voter_status='$voter_status', voter_active='$voter_active', city_address='$city_address', prov_address='$prov_address', purok='$purok', home_numone='$home_numone', home_numtwo='$home_numtwo',mob_numone='$mob_numone', mob_numtwo='$mob_numtwo', resident_type='$resident_type', resident_status='$resident_status'   WHERE id=$id") or die(mysqli->error);
	
	$_SESSION['message'] = "Record has been updated";
	$_SESSION['msg_type'] = "warning";
	
	header('location: Barangay Info.php');
}

?>
<?php
require_once "config.php";

//Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$sql = "INSERT INTO admin_db 
(admin_first_name,admin_last_name,admin_middle_name,admin_birth_date,admin_gender,admin_email,admin_pass) 
VALUES (?,?,?,?,?,?,?)";

	if ($stmt = $mysqli->prepare($sql)) {
		//Bind variables to the prepared statement as parameters
		$stmt->bind_param("sssssss", $param_admin_first_name, $param_admin_last_name, $param_admin_middle_name, $param_admin_birth_date, $param_admin_gender, $param_admin_email, $param_admin_pass);

		//Set parameters
		$param_admin_first_name = trim($_POST["admin_first_name"]);
		$param_admin_last_name = trim($_POST["admin_last_name"]);
		$param_admin_middle_name = trim($_POST["admin_middle_name"]);
		$param_admin_birth_date = trim($_POST["admin_birth_date"]);
		$param_admin_gender = trim($_POST["admin_gender"]);
		$param_admin_email = trim($_POST["admin_last_name"] . trim($_POST["admin_first_name"]));
		$param_admin_pass = password_hash(trim($_POST["admin_last_name"]) . date("mdY", strtotime(trim($_POST["admin_birth_date"]))), PASSWORD_DEFAULT);


		// Attempt to execute the prepared statement
		if ($stmt->execute()) {
			// // Records created successfully. Redirect to landing page
			header("location: Login.php");
			exit();
		} else {
			echo "Oops! Something went wrong. Please try again later.";
		}  //Close statement
		$stmt->close();
	}
	// Close connection
	$mysqli->close();
}
?>
<html>
<html lang="en">

<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return checkValidates()" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter first name">
						<input class="input100" type="text" pattern="[A-Za-z]+" name="admin_first_name" placeholder="First Name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter last name">
						<input class="input100" type="text" pattern="[A-Za-z]+" name="admin_last_name" placeholder="Last Name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter middle name">
						<input class="input100" type="text" pattern="[A-Za-z]+" name="admin_middle_name" placeholder="Middle Name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter birthday">
						<input class="input100" type="date" min="1960-01-01" max="2021-01-01" name="admin_birth_date" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter gender">
						<select required style="border-style:hidden;" class="input100" name="admin_gender">
							<option value="" disabled="disabled" selected="selected">Gender</option>
							<option value="Male" style="color: black;">Male</option>
							<option value="Female" style="color: black;">Female</option>
						</select>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signup">
							Submit
						</button>
					</div>
					<div style="text-align: center; margin-top: 20px;">
						<a class="txt1" href="Login.php">
							Back	
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>
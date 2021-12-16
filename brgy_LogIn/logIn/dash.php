<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
	<link rel="stylesheet" href="styled.css" />
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<title>Barangay Dashboard</title>
</head>

<body>
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="lab la-accusoft"></span><span> Barangay Balumpare</span></h2>
			<h2><span>Manila City, Philippines</span></h2>
		</div>

		<script>
			function logout() {
				location.href = "logout.php";
			}
		</script>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="dash.php" class="active"><span class="las la-home"></span>
						<span>Dashboard</span></a>
				</li>
				<li>
					<a href="Barangay Info.php"><span class="las la-users"></span>
						<span>Resident Information</span></a>
				</li>
				<li>
					<a href="Barangay Cert.php"><span class="las la-certificate"></span>
						<span>Certificate Insurance</span></a>
				</li>
				<li>
					<a href="Barangay Config.php"><span class="las la-cog"></span>
						<span>Barangay Config</span></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h2>
			<div class="user-wrapper">
				<div>
					<h4>ALEX</h4>
					<small>Admin</small>
					<button type="button" class="button" onclick="logout()">LOG OUT <span class="las la-sign-out-alt"></span></button>
				</div>
			</div>
		</header>
		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<?php
						error_reporting(0);

						$conn = mysqli_connect("localhost", "root", "", "brgy_db") or die(mysqli_error());

						$query = "SELECT COUNT(*) AS count FROM brgyy_db";

						$query_result = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_assoc($query_result)) {
							$output = $row['count'];
						}

						$sql = "SELECT * FROM brgyy_db";

						$result = mysqli_query($conn, $sql);

						?>
						<h1><?php echo $output; ?></h1>
						<span>Total Registered Population</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<?php
						error_reporting(0);

						$conn = mysqli_connect("localhost", "root", "", "brgy_db") or die(mysqli_error());

						$query = "SELECT COUNT(*) AS count FROM brgyy_db WHERE sex = 'Male'";

						$query_result = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_assoc($query_result)) {
							$output = $row['count'];
						}


						$sql = "SELECT * FROM brgyy_db";

						$result = mysqli_query($conn, $sql);

						?>
						<h1><?php echo $output; ?></h1>
						<span>Male</span></span>
					</div>
					<div>
						<span class="las la-male"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<?php
						error_reporting(0);

						$conn = mysqli_connect("localhost", "root", "", "brgy_db") or die(mysqli_error());

						$query = "SELECT COUNT(*) AS count FROM brgyy_db WHERE sex = 'Female'";

						$query_result = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_assoc($query_result)) {
							$output = $row['count'];
						}


						$sql = "SELECT * FROM brgyy_db";

						$result = mysqli_query($conn, $sql);

						?>
						<h1><?php echo $output; ?></h1>
						<span>Female</span>
					</div>
					<div>
						<span class="las la-female"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<?php
						error_reporting(0);

						$conn = mysqli_connect("localhost", "root", "", "brgy_db") or die(mysqli_error());

						$query = "SELECT COUNT(*) AS count FROM brgyy_db WHERE voter_status = 'Yes'";

						$query_result = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_assoc($query_result)) {
							$output = $row['count'];
						}


						$sql = "SELECT * FROM brgyy_db";

						$result = mysqli_query($conn, $sql);

						?>
						<h1><?php echo $output; ?></h1>
						<span>REGISTERED VOTERS</span>
					</div>
					<div>
						<span class="las la-vote-yea"></span>
					</div>
				</div>
			</div>

			<div class="recent-grid">
				<div class="projects">
					<div class="card">
						<div class="card-header">
							<h3>Puroks/Areas</h3>

							<a href="Add Purok.php"><button> <span class="las la-plus"></span> Add Purok</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
									<thead>
										<tr>
											<td>Action</td>
											<td>Area Name</td>
											<td>Area Count</td>
											<td>Status</td>
										</tr>
									</thead>
								</table>
								<tbody>
									<tr>
										<td>
											<a href="View Purok.php"><button type="button" class="btn btn-primary"><i class="lar la-eye"></i></button></a>
											<a href="Update Purok.php"><button type="button" class="btn btn-danger"><i class="las la-user-edit"></i></button></a>
											<button type="button" class="btn btn-delete"><i class="las la-trash"></i></button>
										</td>
									</tr>
								</tbody>
							</div>
						</div>
					</div>
				</div>
				<div class="customers">
					<div class="card">
						<div class="card-header">
							<h3>Barangay Officials </h3>

							<a href="Add Official.html"><button> <span class="las la-plus"></span> New Barangay Official</button>
						</div>

						<div class="card-body">
							<div class="customer">
								<div class="info">
									<img src="kpop.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>KC Pabilonia</h4>
										<small>Mayor</small>
									</div>
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div class="info">
									<img src="kpop.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Albert Vicente</h4>
										<small>Vice Mayor</small>
									</div>
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div class="info">
									<img src="kpop.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Alexander E. Palacio</h4>
										<small>Brgy. Captain</small>
									</div>
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div class="info">
									<img src="kpop.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Alexander E. Palacio</h4>
										<small>Secretary</small>
									</div>
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div class="info">
									<img src="kpop.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Alexander E. Palacio</h4>
										<small>Head Kagawad</small>
									</div>
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>

</html>
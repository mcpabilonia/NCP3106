<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
	<link rel="stylesheet" href="stylei.css" />
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<title>Barangay Info</title>
</head>

<body>
	<?php require_once 'process.php'; ?>
	<?php
	if (isset($_SESSION['message'])) : ?>
		<div class="alert alert-<?= $_SESSION['msg_type'] ?>">

			<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
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
					<a href="dash.php"><span class="las la-home"></span>
						<span>Dashboard</span></a>
				</li>
				<li>
					<a href="Barangay Info.php" class="active"><span class="las la-users"></span>
						<span>Resident Information</span></a>
				</li>
				<li>
					<a href="Barangay Schedules.php"><span class="las la-calendar"></span>
						<span>Settlement Schedules</span></a>
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
				Resident Information
			</h2>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
			</div>
			<div class="user-wrapper">
				<img src="kpop.jpg" width="40px" height="40px" alt="">
				<div class="user-wrapper">
					<img src="kpop.jpg" width="40px" height="40px" alt="">
					<div>
						<h4>Albert - Jonniel T. Vicente</h4>
						<small>Member</small>
						<button type="button" class="button" onclick="logout()" style=" background-color: #800020; border-radius: 10px; color: #fff;font-size: .8rem; padding: .3rem 1rem; border: 1px solid #800020;">LOG OUT <span class="las la-sign-out-alt"></span></button>
					</div>
				</div>
			</div>
		</header>
		<main>

			<div class="recent-grid">
				<div class="projects">
					<div class="card">
						<div class="card-header">
							<h3>Residents</h3>

							<a href="regform.php"><button><span class="las la-plus"></span> New Resident</button></a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
									<thead>
										<tr>
											<td>ResidentID</td>
											<td>Family Name</td>
											<td>First Name</td>
											<td>Middle Name</td>
											<td>Gender</td>
											<td>Birthdate</td>
											<td>Action</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="view Resident.php"><button type="button" class="btn btn-primary"><i class="lar la-eye"></i></button></a>
												<a href="update Resident.php"><button type="button" class="btn btn-danger"><i class="las la-user-edit"></i></button></a>
												<button type="button" class="btn btn-delete"><i class="las la-trash"></i></button>
											</td>
										</tr>
									</tbody>
									<?php
									$conn = mysqli_connect("localhost", "root", "", "brgy_db");
									$sql = "SELECT * FROM brgyy_db";
									$result = $conn->query($sql);
									?>
									<tbody>
										<?php
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) { ?>
												<tr>
													<td> <?php echo $row["resident_id"] ?></td>
													<td> <?php echo $row["family_name"] ?></td>
													<td> <?php echo $row["first_name"] ?></td>
													<td> <?php echo $row["middle_name"] ?></td>
													<td> <?php echo $row["sex"] ?></td>
													<td> <?php echo $row["birth_date"] ?></td>
													<td><a href="processinfo.php?delete=<?php echo $row['id']; ?>">DELETE</a>
													<td>
												</tr>

										<?php
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>

</html>
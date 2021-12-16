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
					<a href="Barangay Info.php"><span class="las la-users"></span>
						<span>Resident Information</span></a>
				</li>
				<li>
					<a href="Barangay Cert.php" class="active"><span class="las la-certificate"></span>
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
			<form action="searchcert.php" method="GET">
				<div class="search-wrapper">
					<span class="las la-search"></span>
						<input type="text" required placeholder="Search here" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"/>
						<input type="submit" />
						<!--<button type="submit" class="button" style=" background-color: #800020; border-radius: 10px; color: #fff;font-size: .8rem; padding: .3rem 1rem; border: 1px solid #800020;">SEARCH</button>-->
				</div>
			</form>
			<div class="user-wrapper">
				<div class="user-wrapper">					
					<div>
					<h4>ALEX</h4>
					<small>Admin</small>
					<button type="button" class="button" onclick="logout()">LOG OUT <span class="las la-sign-out-alt"></span></button>
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
							<a href="geninfo.php"><button><span class="las la-plus"></span>Generate report</button></a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
									<thead>
										<tr>
											<td>Action</td>
											<td>ResidentID</td>
											<td>Family Name</td>
											<td>First Name</td>
											<td>Middle Name</td>
											<td>Gender</td>
											<td>Birthdate</td>
											
										</tr>
									</thead>	
									<tbody>		
										<?php
									$conn = mysqli_connect("localhost", "root", "", "brgy_db");
									$sql = "SELECT * FROM brgyy_db ORDER BY id ASC";
									$result = $conn->query($sql);
									?>
									<tbody>
										<?php
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) { ?>
												<tr>
													<td>
														<a href="residency.php?edit=<?php echo $row['id']?>"><button type="button" class="btn btn-danger"><i class="las la-user-edit"></i></button></a>
														<a href="process.php?delete=<?php echo $row['id']; ?>"><button type="button" class="btn btn-delete"><i class="las la-trash"></i></button></a>
													</td>
													<td> <?php echo $row["resident_id"] ?></td>
													<td> <?php echo $row["family_name"] ?></td>
													<td> <?php echo $row["first_name"] ?></td>
													<td> <?php echo $row["middle_name"] ?></td>
													<td> <?php echo $row["sex"] ?></td>
													<td> <?php echo $row["birth_date"] ?></td>
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
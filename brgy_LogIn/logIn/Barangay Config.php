<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="stylebc.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Barangay Config</title>
</head>

<body>
	<?php require_once 'process.php';?>
	<?php
		if(isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		
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
                    <a href="Barangay Cert.php"><span class="las la-certificate"></span>
                        <span>Certificate Insurance</span></a>
                </li>
                <li>
                    <a href="Barangay Config.php" class="active"><span class="las la-cog"></span>
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
                Configuration
            </h2>

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
                            <h3>Admin</h3>
                            <a href="newAcc.php"><button><span class="las la-plus"></span>New Admin</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
											<td>Action </td>
                                            <td>First Name </td>
                                            <td>Middle Name</td>
                                            <td>Last Name</td>
                                            <td>Birthdate</td>
                                            <td>Username</td>
											<td>Gender</td>
                                        </tr>
                                    </thead>
                                    <?php
										$conn = mysqli_connect("localhost", "root", "", "admin_brgy");
										$sql = "SELECT * FROM admin_db";
										$result = $conn->query($sql);
									?>
                                    <tbody>
										<?php
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()){?>
												<tr>
												<td>
													<a href="processinfo.php?delete=<?php echo $row['id']; ?>"><button type="button" class="btn btn-delete"><i class="las la-trash"></i></button></a>
												</td>
												<td> <?php echo $row["admin_first_name"]?></td>	
												<td> <?php echo $row["admin_middle_name"]?></td>	
												<td> <?php echo $row["admin_last_name"]?></td>	
												<td> <?php echo $row["admin_birth_date"]?></td>	
												<td> <?php echo $row["admin_email"]?></td>	
												<td> <?php echo $row["admin_gender"]?></td>	
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
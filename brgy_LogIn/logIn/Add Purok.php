<?php
require_once "configone.php";

//Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO brgyy_db 
(resident_id,family_name,first_name,middle_name,alias,face_marks,birth_date,birth_place,sex,civil_status,nationality,religion,occupation,sector,spouse_name,spouse_occupation,voter_status,voter_active,city_address,prov_address,purok,home_numone,home_numtwo,mob_numone,mob_numtwo,email,resident_type,resident_status,date_time,transaction_id) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    if ($stmt = $mysqli->prepare($sql)) {
        //Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssssssssssssssssssssssssssssss", $param_resident_id, $param_family_name, $param_first_name, $param_middle_name, $param_alias, $param_face_marks, $param_birth_date, $param_birth_place, $param_sex, $param_civil_status, $param_nationality, $param_religion, $param_occupation, $param_sector, $param_spouse_name, $param_spouse_occupation, $param_voter_status, $param_voter_active, $param_city_address, $param_prov_address, $param_purok, $param_home_numone, $param_home_numtwo, $param_mob_numone, $param_mob_numtwo, $param_email, $param_resident_type, $param_resident_status, $param_date_time, $param_transaction_id);

        date_default_timezone_set("Asia/Manila");
        //Set parameters
        $param_resident_id = date("Y") . trim(rand(10, 100) . date("his"));
        $param_family_name = trim($_POST["family_name"]);
        $param_first_name = trim($_POST["first_name"]);
        $param_middle_name = trim($_POST["middle_name"]);
        $param_alias = trim($_POST["alias"]);
        $param_face_marks = trim($_POST["face_marks"]);
        $param_birth_date = date("Y-m-d", strtotime(trim($_POST["birth_date"])));
        $param_birth_place = trim($_POST["birth_place"]);
        $param_sex = trim($_POST["sex"]);
        $param_civil_status = trim($_POST["civil_status"]);
        $param_nationality = trim($_POST["nationality"]);
        $param_religion = trim($_POST["religion"]);
        $param_occupation = trim($_POST["occupation"]);
        $param_sector = trim($_POST["sector"]);
        $param_spouse_name = trim($_POST["spouse_name"]);
        $param_spouse_occupation = trim($_POST["spouse_occupation"]);
        $param_voter_status = trim($_POST["voter_status"]);
        $param_voter_active = trim($_POST["voter_active"]);
        $param_city_address = trim($_POST["city_address"]);
        $param_prov_address = trim($_POST["prov_address"]);
        $param_purok = trim($_POST["purok"]);
        $param_home_numone = trim($_POST["home_numone"]);
        $param_home_numtwo = trim($_POST["home_numtwo"]);
        $param_mob_numone = trim($_POST["mob_numone"]);
        $param_mob_numtwo = trim($_POST["mob_numtwo"]);
        $param_email = trim($_POST["email"]);
        $param_resident_type = trim($_POST["resident_type"]);
        $param_resident_status = trim($_POST["resident_status"]);
        $param_date_time = date("Ymd") . date(" h:i:sa");
        $param_transaction_id = date("Ymd") . date("his");

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // // Records created successfully. Redirect to landing page
            header("location: dash.php");
            exit();
        } else {
            echo "Oops! Something went xwrong. Please try again later.";
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
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Barangay System</title>

    <!-- Icons font CSS-->
    <link href="vendor2/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor2/font-awesome-4.7/css2/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor2/select3/select3.min.css" rel="stylesheet" media="all">
    <link href="vendo2/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css2/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">New Purok Registration</h2>
                </div>
                <div class="card-body">
                    <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return checkValidates()" method="post">
                        <h2 class="title" style="color: black; padding-bottom: 20px;">PUROK INFORMATION</h2>
                        <!-- NAME -->
                        <div class="form-row ">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5 " pattern="[A-Za-z]+" placeholder="Area Name" type="text" name="family_name">

                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5 " pattern="[0-9]+" placeholder="Area Count" type="text" name="first_name">

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Status" type="text" name="middle_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--red" style="width: 571px;" type="submit" name="signup">Register</button>
                            <button class="btn btn--radius-2 btn--red" style="width: 571px;">
                                <a style="color: white; text-decoration:none;" href="dash.php">Back</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor2/select3/select3.min.js"></script>
    <script src="vendor2/datepicker/moment.min.js"></script>
    <script src="vendor2/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
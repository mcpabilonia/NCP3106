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
          <h2 class="title">Barangay Registration Form</h2>
        </div>
        <div class="card-body">
          <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return checkValidates()" method="post">
            <h2 class="title" style="color: black; padding-bottom: 20px;">BASIC INFORMATION</h2>
            <!-- NAME -->
            <div class="form-row ">
              <div class="name">Name</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-4">
                    <div class="input-group-desc">
                      <input required class="input--style-5 " pattern="[A-Za-z]+" placeholder="Last Name" type="text" name="family_name">

                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group-desc">
                      <input required class="input--style-5 " pattern="[A-Za-z]+" placeholder="First Name" type="text" name="first_name">

                    </div>
                  </div>
                  <div class="col-4">
                    <div class="input-group-desc">
                      <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Middle Name" type="text" name="middle_name">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ALIAS-->
            <div class="form-row">
              <div class="name">Alias</div>
              <div class="value">
                <div class="input-group">
                  <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Alias" type="text" name="alias">
                </div>
              </div>
            </div>
            <!-- FACE MARKS-->
            <div class="form-row">
              <div class="name">Face Marks</div>
              <div class="value">
                <div class="input-group">
                  <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Face Marks" type="text" name="face_marks">
                </div>
              </div>
            </div>
            <!-- BIRTHDAY || BIRTHPLACE -->
            <div class="form-row">
              <div class="name">Birthday</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group">
                      <input required class="input--style-5" min="1960-01-01" max="2021-01-01" style="height: 35px; width: 170px;" placeholder="Birthday" type="date" name="birth_date">
                    </div>
                  </div>


                  <div class="name" style="margin-top: 5px; margin-right: 0px;">Birthplace</div>
                  <div class="col-1">
                    <div class="input-group">
                      <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Birthplace" type="text" name="birth_place">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- GENDER || CIVIL STATUS-->
            <div class="form-row">
              <div class="name">Gender</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group">
                      <div class="rs-select2 js-select-simple select--no-search" style="width: 170px;">
                        <select required name="sex">
                          <option value="" disabled selected>Gender</option>
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>

                  <div class="name" style="margin-top: 5px; text-align: center; padding-left: 20px; margin-right: 0px;">Status</div>
                  <div class="col-1">
                    <div class="input-group">
                      <div class="rs-select2 js-select-simple select--no-search">
                        <select required name="civil_status">
                          <option value="" disabled selected>Civil Status</option>
                          <option>Single</option>
                          <option>Married</option>
                          <option>Separated</option>
                          <option>Widowed</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- NATIONALITY-->
            <div class="form-row">
              <div class="name">Nationality</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Nationality" type="text" name="nationality">
                </div>
              </div>
            </div>
            <!-- RELIGION-->
            <div class="form-row">
              <div class="name">Religion</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Religion" type="text" name="religion">
                </div>
              </div>
            </div>
            <!-- OCCUPATION || SECTOR-->
            <div class="form-row">
              <div class="name">Occupation</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group" style="padding-left: 15px;">
                      <input required class="input--style-5" pattern="[A-Za-z]+" style="height: 35px; width: 170px;" placeholder="Occupation" type="text" name="occupation">
                    </div>
                  </div>


                  <div class="name" style="margin-top: 5px; padding-left: 20px; margin-right: 0px;">Sector</div>
                  <div class="col-1">
                    <div class="input-group">
                      <div class="rs-select2 js-select-simple select--no-search">
                        <select required name="sector">
                          <option value="" disabled selected>Sector</option>
                          <option>Private</option>
                          <option>Public</option>
                          <option>Government</option>
                          <option>Unemployed</option>
                          <option>Out of School Youth (OSY)</option>
                          <option>Out of School Children (OSC)</option>
                          <option>Person with Disability (PWD)</option>
                          <option>Senior Citizen (SC)</option>
                          <option>Overseas Filipino Workers (OFW)</option>
                          <option>Solo Parent</option>
                          <option>Indigenous People</option>
                          <option>Others</option>

                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- SPOUSE'S NAME-->
            <div class="form-row">
              <div class="name">Spouse's Name</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Spouse's Name" type="text" name="spouse_name">
                </div>
              </div>
            </div>

            <!-- SPOUSE'S OCCUPATION-->
            <div class="form-row">
              <div class="name">Spouse's Occupation</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[A-Za-z]+" placeholder="Spouse's Occupation" type="text" name="spouse_occupation">
                </div>
              </div>
            </div>
            <!-- VOTER STATUS-->
            <div class="form-row">
              <div class="name">Voter Status</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group">
                      <div class="rs-select2 js-select-simple select--no-search">
                        <select required name="voter_status">
                          <option value="" disabled selected>Status</option>
                          <option>Yes</option>
                          <option>No</option>

                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group">
                      <div class="rs-select2 js-select-simple select--no-search">
                        <select required name="voter_active">
                          <option value="" disabled selected>If Yes</option>
                          <option>Active</option>
                          <option>Inactive</option>

                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h2 class="title" style="color: black; padding-top: 40px; padding-bottom: 20px;">CONTACT INFORMATION</h2>
            <!-- CITY ADDRESS-->
            <div class="form-row">
              <div class="name">City Address</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[a-zA-Z0-9-]" placeholder="City Address" type="text" name="city_address">
                </div>
              </div>
            </div>
            <!-- PROVINCIAL ADDRESS-->
            <div class="form-row">
              <div class="name">Provincial Address</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[a-zA-Z0-9-]" placeholder="Provincial Address" type="text" name="prov_address">
                </div>
              </div>
            </div>
            <!-- PUROK-->
            <div class="form-row">
              <div class="name">Purok</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" pattern="[a-zA-Z0-9-]" placeholder="Purok" type="text" name="purok">
                </div>
              </div>
            </div>
            <!-- HOME NUMBER 1 || HOME NUMBER 2-->
            <div class="form-row">
              <div class="name">Home Number</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group" style="padding-left: 15px;">
                      <input required class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Home Number 1" type="numbers" name="home_numone">
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group">
                      <input required class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Home Number 2 (optional)" type="numbers" name="home_numtwo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- MOBILE NUMBER 1 || MOBILE NUMBER 2-->
            <div class="form-row">
              <div class="name">Mobile Number</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group" style="padding-left: 15px;">
                      <input required class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Mobile Number 1" type="numbers" name="mob_numone">
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group">
                      <input required class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Mobile Number 2 (optional)" type="numbers" name="mob_numtwo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- EMAIL-->
            <div class="form-row">
              <div class="name">E-mail</div>
              <div class="value">
                <div class="input-group" style="padding-left: 15px;">
                  <input required class="input--style-5" placeholder="E-mail" type="text" name="email">
                </div>
              </div>
            </div>

            <h2 class="title" style="color: black; padding-top: 40px; padding-bottom: 20px;">REGISTRATION DETAILS</h2>
            <!-- RESIDENT TYPE-->
            <div class="form-row">
              <div class="name">Resident Type</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group" style="width: 495px; padding-left: 15px;">
                      <div class="rs-select2 js-select-simple select--no-search">
                        <select required name="resident_type">
                          <option value="" disabled selected>Resident Type</option>
                          <option>Rentee</option>
                          <option>Native</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- RESIDENT STATUS-->
            <div class="form-row">
              <div class="name">Resident Status</div>
              <div class="value">
                <div class="row row-space">
                  <div class="col-1">
                    <div class="input-group" style="width: 495px; padding-left: 15px;">
                      <div class="rs-select2 js-select-simple select--no-search">
                        <select required name="resident_status">
                          <option value="" disabled selected>Resident Status</option>
                          <option>Active</option>
                          <option>Inactive</option>
                          <option>Deceased</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <button class="btn btn--radius-2 btn--red" style="width: 571px;" type="submit" name="signup">Register</button>
              <button class="btn btn--radius-2 btn--red" style="width: 571px;">
                <a style="color: white; text-decoration:none;" href="Barangay Info.php">Back</a></button>
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
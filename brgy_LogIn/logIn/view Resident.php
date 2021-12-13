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
    <title>View Resident</title>

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
                    <h2 class="title">View Barangay Registration Form</h2>
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
                                            <input disabled class="input--style-5 " placeholder="Last Name" type="text" name="family_name">

                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="input-group-desc">
                                            <input disabled class="input--style-5 " placeholder="First Name" type="text" name="first_name">

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <input disabled class="input--style-5" placeholder="Middle Name" type="text" name="middle_name">

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
                                    <input disabled class="input--style-5" placeholder="Alias" type="text" name="alias">
                                </div>
                            </div>
                        </div>
                        <!-- FACE MARKS-->
                        <div class="form-row">
                            <div class="name">Face Marks</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-5" placeholder="Face Marks" type="text" name="face_marks">
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
                                            <input disabled class="input--style-5" style="height: 35px; width: 170px;" placeholder="Birthday" type="date" name="birth_date">
                                        </div>
                                    </div>


                                    <div class="name" style="margin-top: 5px; margin-right: 0px;">Birthplace</div>
                                    <div class="col-1">
                                        <div class="input-group">
                                            <input disabled class="input--style-5" placeholder="Birthplace" type="text" name="birth_place">
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
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select disabled name="sex">
                                                    <option disabled="disabled" selected="selected">Gender</option>
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
                                                <select disabled name="civil_status">
                                                    <option disabled="disabled" selected="selected">Civil Status</option>
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
                                    <input disabled class="input--style-5" placeholder="Nationality" type="text" name="nationality">
                                </div>
                            </div>
                        </div>
                        <!-- RELIGION-->
                        <div class="form-row">
                            <div class="name">Religion</div>
                            <div class="value">
                                <div class="input-group" style="padding-left: 15px;">
                                    <input disabled class="input--style-5" placeholder="Religion" type="text" name="religion">
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
                                            <input disabled class="input--style-5" style="height: 35px; width: 170px;" placeholder="Occupation" type="text" name="occupation">
                                        </div>
                                    </div>


                                    <div class="name" style="margin-top: 5px; padding-left: 20px; margin-right: 0px;">Sector</div>
                                    <div class="col-1">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select disabled name="sector">
                                                    <option disabled="disabled" selected="selected">Sector</option>
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
                                    <input disabled class="input--style-5" placeholder="Spouse's Name" type="text" name="spouse_name">
                                </div>
                            </div>
                        </div>

                        <!-- SPOUSE'S OCCUPATION-->
                        <div class="form-row">
                            <div class="name">Spouse's Occupation</div>
                            <div class="value">
                                <div class="input-group" style="padding-left: 15px;">
                                    <input disabled class="input--style-5" placeholder="Spouse's Occupation" type="text" name="spouse_occupation">
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
                                                <select disabled name="voter_status">
                                                    <option disabled="disabled" selected="selected">Status</option>
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
                                                <select disabled name="voter_active">
                                                    <option disabled="disabled" selected="selected">If Yes</option>
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
                                    <input disabled class="input--style-5" placeholder="City Address" type="text" name="city_address">
                                </div>
                            </div>
                        </div>
                        <!-- PROVINCIAL ADDRESS-->
                        <div class="form-row">
                            <div class="name">Provincial Address</div>
                            <div class="value">
                                <div class="input-group" style="padding-left: 15px;">
                                    <input disabled class="input--style-5" placeholder="Provincial Address" type="text" name="prov_address">
                                </div>
                            </div>
                        </div>
                        <!-- PUROK-->
                        <div class="form-row">
                            <div class="name">Purok</div>
                            <div class="value">
                                <div class="input-group" style="padding-left: 15px;">
                                    <input disabled disabled class="input--style-5" placeholder="Purok" type="text" name="purok">
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
                                            <input disabled class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Home Number 1" type="numbers" name="home_numone">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="input-group">
                                            <input disabled class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Home Number 2 (optional)" type="numbers" name="home_numtwo">
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
                                            <input disabled class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Mobile Number 1" type="numbers" name="mob_numone">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="input-group">
                                            <input disabled class="input--style-5" pattern="[0-9]+" minlength="11" maxlength="11" style="height: 35px; width: 220px;" placeholder="Mobile Number 2 (optional)" type="numbers" name="mob_numtwo">
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
                                    <input disabled class="input--style-5" placeholder="E-mail" type="text" name="email">
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
                                                <select disabled name="resident_type">
                                                    <option disabled="disabled" selected="selected">Resident Type</option>
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
                                                <select disabled name="resident_status">
                                                    <option disabled="disabled" selected="selected">Resident Status</option>
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
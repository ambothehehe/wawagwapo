<!DOCTYPE html>
<html lang="en">

<head>
    <title>CES-DMS - Create New Account</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

        <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>

            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Create Account</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                    
                    <?php echo form_open('Users/addAnotherUserProfile'); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="panel panel-primary">
                              <div class="panel-heading" align="left">
                                <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User Information</h4>
                              </div>
                              <div class="panel-body">
                                <table width="100%">
                                  <tr>
                                    <td class="text-right" width="30%"><label>Last Name:</label></td>
                                    <td width="2%"></td>
                                    <td><input type="text" class="form-control" name="lastname" placeholder="Type your lastname" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>First Name:</label></td>
                                    <td></td>
                                    <td><input type="text" class="form-control" name="firstname" placeholder="Type your firstname" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>School:</label></td>
                                    <td></td>
                                    <td>
                                      <select id="school" class="form-control" name="office" required>
                                        <option>-- Select your School --</option>
                                          <option value="School of Architecture, Fine Arts and Design">School of Architecture, Fine Arts and Design</option>
                                          <option value="School of Arts and Sciences">School of Arts and Sciences</option>
                                          <option value="School of Education">School of Education</option>
                                          <option value="School of Health Care Profession">School of Health Care Profession</option>
                                          <option value="School of Law and Governance">School of Law and Governance</option>
                                          <option value="School of Business and Economics">School of Business and Economics</option>
                                          <option value="School of Engineering">School of Engineering</option>
                                      </select><br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Department:</label></td>
                                    <td></td>
                                    <td>
                                      <select id="department" class="form-control" name="department" required>
                                      <option data-group="all" value="0" readonly>-- Select your Department --</option>
                                      <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                                        <option data-group="School of Architecture, Fine Arts and Design" value="Architecture">Architecture</option>
                                        <option data-group="School of Architecture, Fine Arts and Design" value="Fine Arts">Fine Arts</option>
                                      <option disabled>-- School of Arts and Sciences --</option>
                                        <option data-group="School of Arts and Sciences" value="Languages and Literature">Languages and Literature</option>
                                        <option data-group="School of Arts and Sciences" value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                        <option data-group="School of Arts and Sciences" value="Psychology">Psychology</option>
                                        <option data-group="School of Arts and Sciences" value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                        <option data-group="School of Arts and Sciences" value="Biology">Biology</option>
                                        <option data-group="School of Arts and Sciences" value="Chemistry">Chemistry</option>
                                        <option data-group="School of Arts and Sciences" value="Computer and Information Sciences">Computer and Information Sciences</option>
                                        <option data-group="School of Arts and Sciences" value="Mathematics">Mathematics</option>
                                        <option data-group="School of Arts and Sciences" value="Phsyics">Phsyics</option>
                                      <option disabled>-- School of Education --</option>
                                        <option data-group="School of Education" value="Teacher Education">Teacher Education</option>
                                        <option data-group="School of Education" value="Science and Mathematics">Science and Mathematics</option>
                                        <option data-group="School of Education" value="Physical Education">Physical Education</option>
                                      <option disabled>-- School of Health Care Profession -</option>
                                        <option data-group="School of Health Care Profession" value="Nursing">Nursing</option>
                                        <option data-group="School of Health Care Profession" value="Pharmacy">Pharmacy</option>
                                        <option data-group="School of Health Care Profession" value="Nutrition and Dietics">Nutrition and Dietics</option>
                                      <option disabled>-- School of Law and Governance --</option>
                                        <option data-group="School of Law and Governance" value="Law">Law</option>
                                        <option data-group="School of Law and Governance" value="Political Science">Political Science</option>
                                      <option disabled>-- School of Business and Economics --</option>
                                        <option data-group="School of Business and Economics" value="Accountancy">Accountancy</option>
                                        <option data-group="School of Business and Economics" value="Business Administration">Business Administration</option>
                                        <option data-group="School of Business and Economics" value="Economics">Economics</option>
                                        <option data-group="School of Business and Economics" value="Hospitality Management">Hospitality Management</option>
                                      <option disabled>-- School of Engineering --</option>
                                        <option data-group="School of Engineering" value="Chemical Engineering">Chemical Engineering</option>
                                        <option data-group="School of Engineering" value="Civil Engineering">Civil Engineering</option>
                                        <option data-group="School of Engineering" value="Computer Engineering">Computer Engineering</option>
                                        <option data-group="School of Engineering" value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                        <option data-group="School of Engineering" value="Electrical Engineering">Electrical Engineering</option>
                                        <option data-group="School of Engineering" value="Industrial Engineering">Industrial Engineering</option>
                                        <option data-group="School of Engineering" value="Mechanical Engineering">Mechanical Engineering</option>
                                  </select><br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Designation:</label></td>
                                    <td></td>
                                    <td>
                                      <select id="designation_registration" class="form-control" name="designation" required>
                                        <option>-- Select Designated Position --</option>
                                        <option value="6">CES Representative</option>
                                        <option value="5">CES Coordinator</option>
                                        <option value="4">Department Chair</option>
                                        <option value="3">School Dean</option>
                                        <option value="9">Faculty</option>
                                        <option id="co-curricular" value="7">Co-Curricular Organization</option>
                                        <option d="extra-curricular" value="8">Extra-Curricular Organization</option>
                                        <option value="10">Office of Student Affairs</option>
                                        <option value="11">Support Unit</option>
                                      </select><br>
                                    </td>
                                  </tr>

                                  <tr id = "org">
                                    <td class="text-right"><label>Organization:</label></td>
                                    <td></td>
                                    <td><input type="text" class="form-control" name="organization" placeholder="Type your organization" data-validation="alphanumeric" required><br></div></td>
                                  </tr>

                                  <tr>
                                    <td class="text-right"><label>Email Address:</label></td>
                                    <td></td>
                                    <td><input type="email" class="form-control" name="email" placeholder="Type your E-mail" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Contact Number:</label></td>
                                    <td></td>
                                    <td><input type="number" class="form-control" name="contact_num" placeholder="Type your contact number" required><br></td>
                                  </tr>
                                </table>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="panel panel-primary">
                              <div class="panel-heading" align="left">
                                <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Username & Password</h4>
                              </div>
                              <div class="panel-body">
                                <table width="100%">
                                  <tr>
                                    <td class="text-right" width="30%"><label>Username:</label></td>
                                    <td width="2%"></td>
                                    <td><input type="text" class="form-control" placeholder="Type your username" name="username" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Password:</label></td>
                                    <td></td>
                                    <td><input type="text" class="form-control" placeholder="Type your password" name="password" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Confirm Password:</label></td>
                                    <td></td>
                                    <td><input type="text" class="form-control" placeholder="Type your password" name="password_confirmation" required><br></td>
                                  </tr>
                                  <tr>
                                    <td colspan="3"><hr></td>
                                  </tr>
                                  <tr>
                                    <table width="100%" align="center">
                                      <tr>
                                        <td width="48%">
                                          <a href="<?php echo site_url('Director/manage_accounts');?>" style="text-decoration:none"><button type="button" class="btn btn-danger btn-block btn-lg"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button></a>
                                        </td>
                                        <td width="4%"></td>
                                        <td width="48%">
                                          <input type="submit" id="create_profile" class="btn btn-success btn-block btn-lg" name="director_registration" value="Register"/>
                                        </td>
                                      </tr>
                                    </table>
                                  </tr>
                                </table>
                              </div>
                          </div>
                        </div>
                      <?php echo form_close(); ?>  
                </div>
            </div>

        </div>

    </div>

    <?php include('application/views/footer.php');?>

    <script type="text/javascript">

        $("#designation_registration").change(if_organization);

        function if_organization() {
            
            var designation = $("#designation_registration").val();
            console.log(designation);
            
            if (designation == "7" || designation == "8") {
                $(".org").show();
            } else {
                $(".org").hide();
            }
        }
    </script>

</body>

</html>
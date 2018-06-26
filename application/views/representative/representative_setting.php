<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Your Profile Settings</title>
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
                        <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Profile Settings</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <?php include('application/views/messages.php'); ?>
                <div class="row tab-content">
                <form action="" method="post" id="save_edit_profile_settings" >
                    <!-- Account Settings -->
                    <div class="container" style="width: 90%">

                      <!-- <?php //var_dump($user); ?> -->

                      <div class="update-profile-msg"></div>
					
                      <div class="row">
                        <div class="col-md-6">
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4>Profile Information</h4>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4"><label>First Name:</label></div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control" name="firstname" value="<?php echo($user['firstname']);?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"><label>Last Name:</label></div>
                                <div class="col-md-8">
                                   <input type="text" class="form-control" name="lastname" value="<?php echo($user['lastname']);?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"><label>School:</label></div>
                                <div class="col-md-8">
                                  <select class="form-control" name="school" disabled>
									<option value="<?php echo $user['office'];?>" selected><?php echo $user['office'];?></option>
                                  </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"><label>Deparment:</label></div>
                                <div class="col-md-8">
                                  <select class="form-control" name="department" disabled>
									<option value="<?php echo $user['department'];?>" selected><?php echo $user['department'];?></option>
                                  </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"><label>E-mail Address:</label></div>
                                <div class="col-md-8">
                                  <input type="email" class="form-control" value="<?php echo($user['email']);?>" name="email" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"><label>Contact #:</label></div>
                                <div class="col-md-8">
                                  <input type="number" class="form-control" value="<?php echo($user['contact_num']);?>" name="contact_num" required>
                                </div>
                            </div>
                          </div>
                          <br>

                        </div>


                        <div class="col-md-6">
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4>Username & Password</h4>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5"><label>Username:</label></div>
                                <div class="col-md-7">
                                  <input type="text" class="form-control" name="username" value="<?php echo($user['username']);?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5"><label>Password:</label></div>
                                <div class="col-md-7">
                                  <input type="password" class="form-control" name="password" value="<?php echo($user['password']);?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5"><label>Confirm Password:</label></div>
                                <div class="col-md-7">
                                  <input type="password" class="form-control" name="confirm_password" value="<?php echo($user['password']);?>" required>
                                </div>
                            </div>
                          </div>

                          <!-- HIDDEN SA UPDATED BY -->

                          <input type="hidden" class="form-control" name="updated_by" value="<?php echo($user['firstname']);?> <?php echo($user['lastname']);?>" required>

                          <!-- HIDDEN SA UPDATED BY -->
                          
                        </div>

                      </div>

                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-9"></div>
                                <div class="col-md-3">
                                  <button type="submit" class="btn btn-primary" id="save_profile_settings" name="save" value="save" style="width:100%"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                 
                    </div>
                  </form>
                </div>
            </div>
        </div>
    <div id="success_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header"></div>
          <div class="modal-body"></div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>

    <?php include('application/views/footer.php');?>

</body>

</html>
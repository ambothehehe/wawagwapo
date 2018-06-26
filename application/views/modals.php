<!DOCTYPE html>
<html>
<body>
	<!-- Edit Modal -->
    <div id="edit_profile_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">EDIT ACCOUNT</h4>
          </div>
          <div class="modal-body">

            <!-- ARA BAI -->
            <form id="edit_profile">
              <!-- ARA BAI -->

              <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                      <h5>First Name:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Type your Firstname" data-validation="alphanumeric" required></input>
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <h5>Last Name:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="lastname form-control" id="lastname" name="lastname" placeholder="Type your Lastname" data-validation="alphanumeric" required></input>
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <h5>School:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="form-control" id="office" name="office" placeholder="Type your Office / School" data-validation="alphanumeric" readonly></input>
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <h5>Department:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="form-control" id="department" name="department" placeholder="Type your Department" data-validation="alphanumeric" readonly></input>
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <h5>Organization:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="form-control" id="organization" name="organization" placeholder="Type your Organization" data-validation="alphanumeric"></input>
                      </div> 
                    </div>
                  </div>

                  <!-- HIDDEN UPDATER INFOS -->

                  <input type="hidden" class="form-control" id="addedbyfirstname" name="addedbyfirstname" ></input>
                  <input type="hidden" class="form-control" id="addedbylastname" name="addedbylastname"></input>

                  <!-- HIDDEN UPDATER INFOS -->

                  <div class="row">
                    <div class="col-md-3">
                      <h5>Username:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Type the Username" data-validation="alphanumeric" required></input>
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <h5>Password:</h5>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Type your Password" required></input>
                      </div> 
                    </div>
                  </div>
                </div>
              <input type="hidden" id="user_id" name="user_id"></input>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" id="save_edit_profile" class="btn btn-primary">&nbsp; Save &nbsp;</button>
			  </div>
            <?php echo form_close(); ?>
          </div>
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

    <div id="confirm_delete_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">DELETE USER PROFILE</h4>
          </div>
          <div class="modal-body">
            Are you sure you want to delete this user profile?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger btn-ok">Delete</button>
          </div>
        </div>
      </div>
    </div>

     <div class="modal fade" tabindex="-1" role="dialog" id="submitted_by_modal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User's Information</h4>
                  </div>
                  <div class="modal-body"></div>
                </div>
              </div>
            </div>
    
    <div id="confirm_deny_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">DENY USER ACCOUNT APPLICATION</h4>
          </div>
          <div class="modal-body">
            Are you sure you don't want to accept this user?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger btn-ok">Deny</button>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
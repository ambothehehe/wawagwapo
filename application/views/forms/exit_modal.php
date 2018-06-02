<!DOCTYPE html>
<html>
<body>
	<!-- Exit Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="exit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
          </div>
          <div class="modal-body">
            Are you sure you want cancel? All progress will not be saved!
          </div>
          <div class="modal-footer">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <a href="<?php echo site_url('Representative/create_proposal');?>" style="text-decoration:none">
                <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="exit1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
          </div>
          <div class="modal-body">
            Are you sure you want cancel? All progress will not be saved!
          </div>
          <div class="modal-footer">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <a href="<?php echo site_url('Representative/create_report');?>" style="text-decoration:none">
                <button name= "cancelnigga1" id = "cancelnigga1" value = "Yes" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Drafts Modal -->
     <div class="modal fade" tabindex="-1" role="dialog" id="saveasdraft">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            Successfully saved as a draft.
          </div>
          <div class="modal-footer">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <a href="<?php echo site_url('Representative/home');?>" style="text-decoration:none">
                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="submit_a"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp OK</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
     
</body>
</html>
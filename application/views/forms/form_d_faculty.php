<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Fill Out Form D</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

        <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
         <?php echo form_open('Faculty/addFormd');?>
        <div id="page-content-wrapper">

            <?php include('application/views/topNav.php');?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1>Filling Out Form D <small>CES Program/Project/Activity Report Form</small></h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        
                        <form>
                            <div class="panel" align="center">
                                <div class="panel-body">
                                    <table width="100%">
                                        <tr>
                                            <td><label>Title:</label></td>
                                            <td colspan="3">
                                              <!-- <select class="form-control" required> -->
                                                <!-- <option>Name of Approved Proposal 1</option>
                                                <option>Name of Approved Proposal 2</option>
                                                <option>Name of Approved Proposal 3</option>
                                                <option>Name of Approved Proposal 4</option> -->
                                               
                    <select name="id" class="form-control" required>

                      <?php foreach($proposals as $row) { ?>
                      <option name="fd_title" value="<?=$row["propdetails"]->proposal_id ?>"><?=$row["proposalJsonDetails"]->title?></option>
                      <?php } ?>

                     </select> </td>
       <!--  </div> -->
                                             


                                              <!-- </select></td> -->
                                       
                                               
                                            <td></td>
                                            <td></td>
                                        </tr>

                    <!--   who created and the department of the creator of the report input here -->
                                       <tr><td> <input type="hidden" name="who_created" value="<?= $fname ?>&nbsp;<?= $lname ?>"></td>
                                        <td> <input type="hidden" name="creators_department" value="<?= $department ?>"></td>
                                         <td> <input type="hidden" name="creator_id" value="<?= $creator_id ?>"></td>
                                         <td> <input type="hidden" name="creator_id" value="<?= $creator_id ?>"></td>
                                         <td> <input type="hidden" name="creators_organization" value="<?= $organization ?>"></td>

                                        <tr>
                                  <!-- END part of the info of creator -->

                                         <tr>
                                            <td><label>School:</label></td>
                                             <td>
                                              <select id="school" class="form-control" name="fd_school" required>
                                                <option value="<?=$row["proposalJsonDetails"]->school?>"><?=$row["proposalJsonDetails"]->school?></option>
                                             </td>
                                            <td><label>&nbsp Department:</label></td>
                                            <td>
                                              <select id="department" class="form-control" name="fd_dept" required>
                                                <option value="<?=$row["proposalJsonDetails"]->department?>"><?=$row["proposalJsonDetails"]->department?></option>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td><label>Inclusive Date:</label></td>
                                            <td><input type="text" name="act_duration1" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
                                            <td class="text-center"><em>to</em></td>
                                            <td><input type="text" name="act_duration2" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
                                        </tr>
                                        <tr>
                                            <td><label>Venue:</label></td>
                                            <td colspan="3"><input type="text" name="fd_venue" class="form-control" placeholder="Where will the activity take place?" required></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Introduction</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Provide here an explanation or a rationale of the undertaken activity.</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="introduction"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Present here a summary of the participants’ profile as well as the roles and responsibilities assumed. (the attendance sheet will serve as an attachment).</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="participants_partners_and_beneficiaries"></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>III. Highlights of the Activity</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Point out the important features or parts of the activity as perceived by the sectors specified below:</p>
                                    </div>
                                    <!-- <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th width="33%" class="text-center">As perceived by the Beneficiaries</th>
                                        <th width="33%" class="text-center">As perceived by the Students</th>
                                        <th width="33%" class="text-center">As perceived by the Faculty/Staff</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                        </tr>
                                      </tbody>
                                    </table> -->

                                    <label>As perceived by the Beneficiaries</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..." name="perceived_by_beneficiaries"></textarea>
                                    <label>As perceived by the Students</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..." name="perceived_by_students"></textarea>
                                    <label>As perceived by the Faculty/Staff</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..." name="perceived_by_faculty"></textarea>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Challenges/Difficulties Encountered</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Enumerate and discuss the various difficulties encountered during the implementation of the activity. This may include matters such as logistics, manpower, program, or those that may have been encountered by the participants. Also discuss how the group addressed said challenges/problems.</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="challenges_encountered"></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Attachments</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p>
                                        <strong>Instruction:</strong> Please provide the following as attachments:
                                        <ol>
                                          <li>Program of Activity</li>
                                          <li>Attendance sheet/s</li>
                                          <li>At most 10 photos with appropriate captions</li>
                                          <li>Feedback forms from participants</li>
                                          <li>Reflection Papers from students</li>
                                          <li>Liquidation Report (if applicable)</li>
                                        </ol>
                                      </p>
                                    </div>
                                </div>
                            </div>
<!-- 
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit1"><span name= "cancelnigga" id = "cancelnigga" value = "Yes" class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div> -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="right">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                             <?php echo form_close();?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php include('exit_modal.php');?>
            
        </div>

    </div>

    <?php include('application/views/footer.php');?>

     <script type="text/javascript">
      $(function(){
        $('#school').on('change', function(){
          var val = $(this).val();
          var sub = $('#department');
              sub.find('option').not(':first').hide();
              $('option', sub).filter(function() {
                  if($(this).attr('data-group') == val)
                      $(this).show();
              });
          sub.val(0);
        });
      });
    </script>

</body>

</html>
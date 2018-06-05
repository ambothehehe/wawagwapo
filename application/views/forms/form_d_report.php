<!DOCTYPE html>
<html lang="en">

<head>

   <title>CESPPMS - Form D</title>
    <?php include('application/views/header.php');?>

</head>

<body>

    <div id="wrapper">
       <?php include('application/views/sidebar.php');?>

       

        <!-- Page Content -->
        <?php echo form_open('Chair/viewform_d');?>
        <div id="page-content-wrapper">
           
          
            <div class="container-fluid" style="padding-top:15px;">
                <div class="row tab-content">
                  <div id="printThisArea" style="padding:20px; padding-top:33px; background-color:#FFFFF0;">
                  <?php include('application/views/topNav.php');?>
                  
                    <div>
                        <h1>USC-CES FORM D <small>CES Program/Project/Activity Report Form</small></h1>
                        <hr>
                         <?php foreach($reps as $res) {?>
                        <div class="panel" align="center">
                            <div class="panel-body">
                              <h2><?php echo $res->fd_title;?></h2>
                              <h3><?php echo $res->fd_school;?></h3>
                              <h4><?php echo $res->fd_dept;?></h4>
                              <h5><?php echo $res->fd_venue;?></h5>
                              <h5><?php echo $res->date_start;?>&nbsp;to&nbsp;<?php echo $res->date_end;?></h5>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Introduction</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $res->introduction;?></p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $res->participants_partners_and_beneficiaries;?></p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Highlights of the Activity</h4>
                            </div>
                            <div class="panel-body">
                                <label>As perceived by the Beneficiaries</label>
                                <div class="panel panel-default panel-body">
                                  <p class="text-justify"><?php echo $res->perceived_by_beneficiaries;?></p>
                                </div>
                                <label>As perceived by the Students</label>
                                <div class="panel panel-default panel-body">
                                  <p class="text-justify"><?php echo $res->perceived_by_students;?></p>
                                </div>
                                <label>As perceived by the Faculty/Staff</label>
                                <div class="panel panel-default panel-body">
                                  <p class="text-justify"><?php echo $res->perceived_by_faculty;?></p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>IV. Challenges/Difficulties Encountered</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $res->challenges_encountered;?></p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
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

                        <div style="background-color:#C6E2FF; height:100px; width:100%;"><i>
                         <div style="padding:2px;"><center>created by:<br/><b><?php echo $res->who_created;?></b><br/>
                            <?php echo $res->creators_department;?><br/><?php echo $res->creators_school;?>
                          </center></i>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
             <?php } ?>
             </div>
             </div>
         </form>


    </div>

                        <div style="position:fixed; top:8%; right:2%;">
                          <div style="float:left; padding:2px; padding-top:10px;">

                              <button type="submit" class="btn btn-primary btn-md btn-block" onclick="printDiv('printThisArea')" >
                            <span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Print
                        </button>

                        </div>

                        <div style="float:left; padding:10px;">
                          <?php if($role == 'Representative'){
                            echo form_open('Representative/reports');
                                 }elseif ($role == 'Coordinator') {
                                      echo form_open('Coordinator/reports');
                                 }elseif ($role == 'CES Director') {
                                      echo form_open('Director/other_reports');
                              }?>

                      

                        <?php echo form_close();?>

                        </div>

                      
                       <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "Student Organization Adviser") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            <?php echo form_open('Proposals/SONotesReport'); ?>
                            <input class="form-control" type="hidden" name="reportd_id" value="<?php echo $id;?>"/>
                                <button type="submit" class="btn btn-primary btn-md" name="notereport" value="ProceedReport">Submit&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

                                <?php form_close();?>
                            </div>
                         <?php } ?>
                        </div>

                      <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "Faculty") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            <?php echo form_open('Proposals/facNotesReportd'); ?>
                            <input class="form-control" type="hidden" name="reportd_id" value="<?php echo $id;?>"/>
                                <button type="submit" class="btn btn-primary btn-md" name="notereport" value="ProceedReport">Submit&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

                                <?php form_close();?>
                            </div>
                         <?php } ?>
                        </div>

                      <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "Department Chair") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            <?php echo form_open('Proposals/chairNotesReport'); ?>
                            <input class="form-control" type="hidden" name="reportd_id" value="<?php echo $id;?>"/>
                                <button type="submit" class="btn btn-primary btn-md" name="notereport" value="ProceedReport">Submit&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

                                <?php form_close();?>
                            </div>
                         <?php } ?>
                        </div>

                        <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "Coordinator") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            <?php echo form_open('Proposals/coordNotesReport'); ?>
                            <input class="form-control" type="hidden" name="reportd_id" value="<?php echo $id;?>"/>
                                <button type="submit" class="btn btn-primary btn-md" name="notereport" value="ProceedReport">Submit&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

                                <?php form_close();?>
                            </div>
                         <?php } ?>
                        </div>

                        <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "School Dean") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            <?php echo form_open('Proposals/deanNotesReport'); ?>
                            <input class="form-control" type="hidden" name="reportd_id" value="<?php echo $id;?>"/>
                                <button type="submit" class="btn btn-primary btn-md" name="notereport" value="ProceedReport">Submit&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

                                <?php form_close();?>
                            </div>
                         <?php } ?>
                        </div>

                        <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "CES Director") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            <?php echo form_open('Proposals/adminNotesReport'); ?>
                            <input class="form-control" type="hidden" name="reportd_id" value="<?php echo $id;?>"/>
                                <button type="submit" class="btn btn-primary btn-md" name="notereport" value="ProceedReport">Submit&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

                                <?php form_close();?>
                            </div>
                         <?php } ?>
                        </div>

                        <div style="position:fixed; top:8%; right:2%;">
                         <?php if($role == "Vice-President for Academic Affairs") { ?>
                            <div style="float:left; padding:2px; padding-top:10px;">
                            </div>
                         <?php } ?>
                        </div>



            
       

       <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap-Datepicker JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <!-- Custom Scripts -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>

<!-- FOR Printing Form -->
<script type="text/javascript">
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>



    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- Datepicker Script -->
    <script type="text/javascript">
      $('.datepicker').datepicker({
        todayBtn: "linked"
      });
    </script>

</body>

</html>
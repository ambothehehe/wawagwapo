<!DOCTYPE html>
<html lang="en">

<head>

    <title>CESPPMS - Form E</title>
    <?php include('application/views/header.php');?>

</head>

<body>

    <div id="wrapper">
        <?php include('application/views/sidebar.php');?>
        

        <!-- Page Content -->
        <?php echo form_open('Coordinator/viewform_e');?>
        <div id="page-content-wrapper">
            
            
             <div class="container-fluid">

               <?php include('application/views/topNav.php');?>
               
                <div class="row tab-content">
                  <div id="printThisArea" style="padding:30px; background-color:#FFFFF0; padding-top:33px;">
                    <div>
                        <h1>USC-CES FORM E <small>CES Program/Project Completion Report Form</small></h1>
                        <hr>
                        
                        <form>
                           <?php foreach($repe as $res) {?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>I. Preliminaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td width="28%"><strong>1.1 Complete Title of Program/Project</strong></td>
                                        <td width="2%"><input type="hidden" name="id" value="<?php echo $res->fe_id;?>"></td> <!--THE ID IS HERE-->
                                        <td><p><u><?php echo $res->title;?></u></p></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.2 Unit/s Responsible</strong></td>
                                        <td></td>
                                        <td><p><u><?php echo $res->unit_responsible;?></u></p></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.3 Program/Project Duration</strong></td>
                                        <td></td>
                                        <td><p><u><?php echo $res->program_duration;?></u></p></td>
                                      </tr>
                                      <tr>
                             <!--    add row na part sa activities -->
                                        <td colspan="3">
                                         <!--  <table class="table table-bordered" width="100%">
                                            <thead>
                                              
                                              <th class="text-center">Activities</th>
                                              <th class="text-center">Inclusive Dates</th>
                                              <th class="text-center">Total No. of Hours</th>
                                            </thead>
                                            <tbody>
                                              <?php 
                                              
                                              //$arrtitle = explode(' , ', $res->act_title);
                                              //$arrdate = explode(' , ', $res->incdate);
                                              //$arrhours =  explode(' , ', $res->totalhours);
                                                //foreach($arrtitle as $activitytitle){ foreach($arrdate as $activitydate) { foreach($arrhours as $activityhours) {
                                              ?>

                                              <tr class="text-center">
                                               
                                                <td class="text-center"><?php // echo $activitytitle; ?></td>

                                                <td class="text-center"><?php //echo $activitydate; ?></td>
                                                <td class="text-center"><?php // echo $activityhours; } ?></td>
                                              </tr>
                                              <?php // } ?>
                                             <tr>
                                                
                                                <td class="text-center">River Clean-up</td>
                                                <td class="text-center">January 1, 2015</td>
                                                <td class="text-center">25 hours</td>
                                              </tr> 
                                              
                                            </tbody>
                                          </table> -->

                                           <div style="width:33%; float:left; padding-right:0px;">
                                            <table class="table table-bordered" width="100%" >
                                              <thead>
                                                <th class="text-center">Activities</th>
                                                
                                              </thead>
                                              <tbody>
                                                <?php  $activity_title_arr = explode(' , ', $res->act_title);
                                                     
                                             
                                                foreach($activity_title_arr as $actaytol){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $actaytol; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                              </div>

                                            <div style="width:33%; float:left; padding-right:0px;">
                                            <table class="table table-bordered" width="100%" >
                                              <thead>
                                                <th class="text-center">Inclusive Dates</th>
                                                
                                              </thead>
                                              <tbody>
                                                <?php  $activity_incdates_arr = explode(' , ', $res->incdate);
                                                     
                                             
                                                foreach($activity_incdates_arr as $actdates){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $actdates; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                              </div>

                                                <div style="width:33%; float:left; padding-right:0px;">
                                            <table class="table table-bordered" width="100%" >
                                              <thead>
                                                <th class="text-center">Total No. of Hours</th>
                                                
                                              </thead>
                                              <tbody>
                                                <?php  $activity_hours_arr = explode(' , ', $res->totalhours);
                                                     
                                             
                                                foreach($activity_hours_arr as $actoras){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $actoras; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                              </div>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.4 Final Beneficiaries/Target Groups</strong> <small>(specify the number per sector/group)</small></td>
                                        <td></td>
                                        <td><p><u><?php echo $res->final_target_groups;?></u></p></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.5 Partners/Collaborators</strong></td>
                                        <td></td>
                                        <td><p><u><?php echo $res->collaborators;?></u></p></td>
                                      </tr>
                                      <!-- <tr>
                                        <td colspan="3">
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center">Intra USC Partners/Collaborators</th>
                                              <th class="text-center">Extra USC Partners/Collaborators</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>
                                                  <ul>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                  </ul>
                                                </td>
                                                <td>
                                                  <ul>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                  </ul>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr> -->
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td>
                                            <label>2.1 Summary</label>
                                            <ul style="list-style:none">
                                              <li>
                                                <em>2.1.1. Background of the issue addressed by the project</em>
                                                <div class="panel panel-default panel-body">
                                                  <p class="text-justify"><?php echo $res->background_of_issue;?></p>
                                                </div>
                                              </li>
                                              <li>
                                                <em>2.1.2. Major achievements of the program/project</em>
                                                <div class="panel panel-default panel-body">
                                                  <p class="text-justify"><?php echo $res->major_achievements_of_program;?></p>
                                                </div>
                                              </li>
                                              <li>
                                                <br/>
                                                <em>2.1.3. How results of different activities contribute to the larger goal of the program/project</em>
                                                <div class="panel panel-default panel-body">
                                                  <p class="text-justify"><?php echo $res->results_of_activities_to_goal;?></p>
                                                </div>
                                              </li>
                                            </ul>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.2 Overall strategy adopted for the implementation of the program/project</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify"><?php echo $res->overall_strategy_adopted;?></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div style="position: relative; width: 100%;">
                                          <label>2.3 Achievements against specified goal</label>
                                          </div>
                                          <!-- <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center">Goal</th>
                                              <th class="text-center">Specific Objectives</th>
                                              <th class="text-center">Specific Activities</th>
                                              <th class="text-center">Outputs</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                              </tr>
                                              <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                              </tr>
                                            </tbody>
                                          </table> -->
                                           <div style="width:25%; float:left; padding-left:0px;">
                                             <table class="table table-bordered" width="100% " >
                                              <thead>
                                                <th class="text-center">Goal</th>
                                              </thead>
                                              <tbody>
                                                <?php  $goal_arr = explode(' , ', $res->goal_title);
                                                     
                                             
                                                foreach($goal_arr as $the_goals){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $the_goals; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                         </div>

                                         <div style="width:25%; float:left; padding-left:0px;">
                                             <table class="table table-bordered" width="100% " >
                                              <thead>
                                                <th class="text-center">Specific Objectives</th>
                                              </thead>
                                              <tbody>
                                                <?php  $specobj_arr = explode(' , ', $res->spec_obj);
                                                     
                                             
                                                foreach($specobj_arr as $the_specific_objectives){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $the_specific_objectives; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                         </div>

                                         <div style="width:25%; float:left; padding-left:0px;">
                                             <table class="table table-bordered" width="100% " >
                                              <thead>
                                                <th class="text-center">Specific Activities</th>
                                              </thead>
                                              <tbody>
                                                <?php  $specact_arr = explode(' , ', $res->spec_act);
                                                     
                                             
                                                foreach($specact_arr as $the_specific_activities){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $the_specific_activities; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                         </div>

                                         <div style="width:25%; float:left; padding-left:0px;">
                                             <table class="table table-bordered" width="100% " >
                                              <thead>
                                                <th class="text-center">Outputs</th>
                                              </thead>
                                              <tbody>
                                                <?php  $outputs_arr = explode(' , ', $res->outputs);
                                                     
                                             
                                                foreach($outputs_arr as $the_outputs){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $the_outputs; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                         </div>


                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.4 Observed impact of the program/project</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify"><?php echo $res->observed_impact_of_program;?></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.5 Challenges/difficulties and measures undertaken</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify"><?php echo $res->challenges_and_measures_undertaken;?></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.6 Good practices</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify"><?php echo $res->good_practices;?></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.7 Lessons learned from the program/project</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify"><?php echo $res->lessons_learned_from_program;?></p>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>
                           
                            <div class="panel panel-primary">
                                <div class="panel-heading" >
                                    <h4>III. Partnerships and Collaboration </h4>
                                </div>
                                <div class="panel-body">
                                  <table width="100%">
                                    <tr>
                                      <td>
                                        <label>3.1 Briefly describe the contributions of all your Intra and Extra USC partners/collaborators</label>
                                        <ul style="list-style:none">
                                          <li>
                                            <div style="position: relative; width: 100%;">
                                            3.1.1 Intra USC Partners/Collaborators
                                          </div>
                                            <div style="width:50%; float:left; padding-right:0px;">
                                            <table class="table table-bordered" width="100%" >
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                
                                              </thead>
                                              <tbody>
                                                <?php  $intraname_arr = explode(' , ', $res->intraname);
                                                     
                                             
                                                foreach($intraname_arr as $intname){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $intname; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                              </div>

                                           <div style="width:50%; float:left; padding-left:0px;">
                                             <table class="table table-bordered" width="100% " >
                                              <thead>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <?php  $intracontrib_arr = explode(' , ', $res->intracontribs);
                                                     
                                             
                                                foreach($intracontrib_arr as $intcont){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $intcont; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                         </div>
                                          </li>
                                          <li>
                                            <div style="position: relative; width: 100%;">
                                            3.1.2 Extra USC Partners/Collaborators
                                          </div>
                                        
                                           <div style="width:50%; float:left; padding-right:0px;">
                                            <table class="table table-bordered" width="100%" >
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                
                                              </thead>
                                              <tbody>
                                                <?php  $extraname_arr = explode(' , ', $res->extraname);
                                                     
                                             
                                                foreach($extraname_arr as $extname){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $extname; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                              </div>

                                           <div style="width:50%; float:left; padding-left:0px;">
                                             <table class="table table-bordered" width="100% " >
                                              <thead>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <?php  $extracontrib_arr = explode(' , ', $res->extracontribs);
                                                     
                                             
                                                foreach($extracontrib_arr as $extcont){ 
                                                 ?>
                                                <tr>
                                                  <td><?php echo $extcont; ?></td>
                                                 
                                                </tr>
                                               
                                                <?php }?>
                                              </tbody>
                                            </table>
                                         </div>
                                          </li>
                                        </ul>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.2 Assess your unit’s relationship with the partners/collaborators mentioned above. How have your relations affected the program/project?</label>
                                        <div class="panel panel-default panel-body">
                                          <p class="text-justify"><?php echo $res->unit_relationship;?></p>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.3 Describe the other links or opportunities gained as a consequence of the program/project.</label>
                                        <div class="panel panel-default panel-body">
                                          <p class="text-justify"><?php echo $res->other_links_gained_from_program;?></p>
                                        </div>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>IV. Witness to the Word, In Action…</h4>
                                </div>
                                <div class="panel-body">
                                  <p class="text-justify"><?php echo $res->witness_to_the_word;?></p>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>V. Witness to the Word, In Action…</h4>
                                </div>
                                <div class="panel-body">
                                  <p class="text-justify"><?php echo $res->ways_forward;?></p>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>VI. Attachments</h4>
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

                            <?php } ?>
                        </form>

                         </div>
            </div>

    </div>
                      </div> <!-- END of div for the whole proposal view without the Edit button -->

                      
                        <div style="position:fixed; top:8%; right:2%;">
                          <div style="float:left; padding:2px; padding-top:10px;">

                            <div style="float:left; padding:2px; padding-top:10px;">
                                  <button type="submit" class="btn btn-primary btn-md btn-block" onclick="printDiv('printThisArea')" >
                                  <span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Print
                                  </button>
                              </div>
                        
                        </div> 

                        <div style="float:left; padding:10px;">
                          <?php if($role == 'Representative'){
                            echo form_open('Representative/reports');
                                 }elseif ($role == 'Coordinator') {
                                      echo form_open('Coordinator/reports');
                                 }elseif ($role == 'CES Director') {
                                      echo form_open('Director/other_reports');
                              }?>

                      <!--   <button type="submit" class="btn btn-primary btn-md btn-block" onclick="printDiv('printThisArea')" >
                            <span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Print
                        </button> -->

                        <?php echo form_close();?>
                      </div>

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

<script type="text/javascript">
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>


</body>

</html>
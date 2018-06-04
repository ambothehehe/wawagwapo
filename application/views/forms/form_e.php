<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Fill Out Form E</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

        <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <?php 
        if ($role == 'Coordinator') {
          echo form_open('Coordinator/coord_addForme');
        }
        else if ($role == 'Representative') {
          echo form_open('Representative/addForme');
        }else if ($role == 'Faculty') {
          echo form_open('Faculty/addForme');
        }else if ($role == 'Co-Curricular Organization') {
          echo form_open('CoCurricular/addForme');
        }else if ($role == 'Extra-Curricular Organization') {
          echo form_open('ExtraCurricular/addForme');
        }

       ?>
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1>Filling Out Form E <small>CES Program/Project Completion Report Form</small></h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        
                        <form>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Preliminaries</h4>
                                </div>

                                <?php //var_dump($department)?>

                                <div class="panel-body">
                                    <table width="100%">
                <!--   who created and the department of the creator of the report input here -->
                                       <tr><td> <input type="hidden" name="who_created" value="<?= $fname ?>&nbsp;<?= $lname ?>"></td>
                                        <td> <input type="hidden" name="creators_department" value="<?= $department ?>"></td>
                                        <td> <input type="hidden" name="creator_id" value="<?= $creator_id ?>"></td>
                                        <td> <input type="hidden" name="creators_school" value="<?= $creators_school ?>"></td>
                                        <tr>
                                  <!-- END part of the info of creator -->

                                      <tr>
                                        <td width="25%"><strong>1.1 Complete Title of Program/Project</strong></td>
                                        <td width="2%"></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="title_of_program" required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.2 Unit/s Responsible</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="unit_responsible" required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.3 Program/Project Duration</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="program_duration" required><br></td>
                                      </tr>




                                      <tr>
                                        <td colspan="3">
                                          <!-- <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center" width="5%">No.</th>
                                              <th class="text-center">Activities</th>
                                              <th class="text-center">Inclusive Dates</th>
                                              <th class="text-center">Total No. of Hours</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-center"><label>1</label></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control datepicker" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                              <tr>
                                                <td class="text-center"><label>2</label></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control datepicker" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <div class="text-center">
                                            <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                          </div>
                                          <br> -->

                                         
                                                <table id="activity-reports" class="table table-bordered">
                                                  <thead>
                                                      <th class="text-center">Activities</th>
                                                      <th class="text-center">Inclusive Dates</th>
                                                      <th class="text-center">Total No. of Hours</th>
                                                      <th class="text-center"><button type="button" id="add-activity-reports-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td><input type="text" name="act_title[]" class="form-control"></td>
                                                    

                                                      <td><input type="text" id="inclusive-date1" name="incdate[]" data-toggle="tooltip" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>

                                                      <td><input type="text" name="totalhours[]" class="form-control"></td>
                                                      <td></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                        

                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.4 Final Beneficiaries/Target Groups</strong> <small>(specify the number per sector/group)</small></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="final_target_groups" required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.5 Partners/Collaborators</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="collaborators" required><br></td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td>
                                            <label>2.1 Summary</label> <small><em>(please write a summary of successes and expected impact of the program/project. Although there is no specifically required format just supply inputs to the items below. You may add items you may consider important)</em></small>
                                            <ul style="list-style:none">
                                              <li>
                                                <em>2.1.1. Background of the issue addressed by the project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..." name="background_of_issue"></textarea>
                                              </li>
                                              <li>
                                                <em>2.1.2. Major achievements of the program/project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..." name="major_achievements_of_program"></textarea>
                                              </li>
                                              <li>
                                                <em>2.1.3. How results of different activities contribute to the larger goal of the program/project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..." name="results_of_activities_to_goal"></textarea>
                                              </li>
                                            </ul>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.2 Overall strategy adopted for the implementation of the program/project</label> <small><em>(please describe in detail the overall strategy or approach used to ensure the accomplishment of outcomes. You may discuss here the framework of the program/project, if there is any)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="overall_strategy_adopted"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.3 Achievements against specified goal</label> <small><em>(please highlight the outputs of the program/project against the goal identified for the program/project. The details can be sourced from your <strong>Form A</strong>)</em></small>
                                          <div class="alert alert-info" role="alert">
                                              <strong>For Outputs:</strong>
                                              <ul>
                                                <li>Please note whether outputs were achieved or not achieved. If not achieved, provide reason/s.</li>
                                                <li>Please quantify and give narrative assessment of results.</li>
                                              </ul>
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
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <div class="text-center">
                                            <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                          </div> -->

                                       
                                              <table id="goals-outline" class="table table-bordered">
                                                <thead>
                                                    <th class="text-center">Goal</th>
                                                    <th class="text-center">Specific Objectives</th>
                                                    <th class="text-center">Specific Activities</th>
                                                    <th class="text-center">Outputs</th>
                                                    <th class="text-center"><button type="button" id="add-goals-outline-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="text" name="goal_title[]" class="form-control"></td>
                                                    <td><input type="text" name="spec_obj[]" class="form-control"></td>
                                                    <td><input type="text" name="spec_act[]" class="form-control"></td>
                                                    <td><input type="text" name="outputs[]" class="form-control"></td>
                                                    <td></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                       

                                          <br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.4 Observed impact of the program/project</label> <small><em>(please describe the observed and/or documented outcomes or impact of the program/project. You may provide as attachment some evidences to show these outcomes or impact)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name=" observed_impact_of_program"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.5 Challenges/difficulties and measures undertaken</label> <small><em>(please describe the challenges/difficulties encountered in all of the phases of the program/project and the measures or mechanisms undertaken to address them)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="challenges_and_measures_undertaken"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.6 Good practices</label> <small><em>(please provide all the good practices that resulted from the program/project)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="good_practices"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.7 Lessons learned from the program/project</label> <small><em>(please describe the experiences and lessons learned by the students, faculty, staff especially in terms of program/project management and implementation, partnership and collaboration, community mobilization, capacity building, advocacy, among others)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="lessons_learned_from_program"></textarea>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>III. Partnerships and Collaboration </h4>
                                </div>
                                <div class="panel-body">
                                  <table width="100%">
                                    <tr>
                                      <td>
                                        <label>3.1 Briefly describe the contributions of all your Intra and Extra USC partners/collaborators</label>
                                        <ul style="list-style:none">
                                          <li>
                                            3.1.1 Intra USC Partners/Collaborators
                                            <!-- <table class="table table-bordered" width="100%">
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <div class="text-center">
                                              <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                            </div> -->

                                            <table id="intra-collabs" class="table table-bordered">
                                                <thead>
                                                    <th class="text-center">Name of Partners/Collaborators</th>
                                                    <th class="text-center">Actual Contributions</th>
                                                    <th class="text-center"><button type="button" id="add-intra-collabs-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="text" name="intraname[]" class="form-control"></td>
                                                    <td><input type="text" name=" intracontribs[]" class="form-control"></td>
                                                    <td></td>
                                                  </tr>
                                                </tbody>
                                              </table>

                                          </li>
                                          <li>
                                            3.1.2 Extra USC Partners/Collaborators
                                           <!--  <table class="table table-bordered" width="100%">
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <div class="text-center">
                                              <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                            </div> -->

                                            <table id="extra-collabs" class="table table-bordered">
                                                <thead>
                                                    <th class="text-center">Name of Partners/Collaborators</th>
                                                    <th class="text-center">Actual Contributions</th>
                                                    <th class="text-center"><button type="button" id="add-extra-collabs-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="text" name="extraname[]" class="form-control"></td>
                                                    <td><input type="text" name="extracontribs[]" class="form-control"></td>
                                                    <td></td>
                                                  </tr>
                                                </tbody>
                                              </table>

                                          </li>
                                        </ul>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.2 Assess your unit’s relationship with the partners/collaborators mentioned above. How have your relations affected the program/project?</label>
                                        <textarea class="form-control" rows="5" placeholder="Type Here..." name="unit_relationship"></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.3 Describe the other links or opportunities gained as a consequence of the program/project.</label>
                                        <textarea class="form-control" rows="5" placeholder="Type Here..." name="other_links_gained_from_program"></textarea>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Witness to the Word, In Action…</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please describe how the program/project allowed students, faculty, staff to manifest their being Carolinians, Witnesses to the Word</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="witness_to_the_word"></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Ways Forward</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please explain how your experiences in this program/project can help future undertakings</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="ways_forward"></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>VI. Attachments</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please provide as attachment all documents you deem necessary and useful besides those already prescribed by Form E or the Portfolio Checklist</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
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

</body>

</html>
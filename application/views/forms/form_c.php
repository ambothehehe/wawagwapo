<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Fill Out Form C</title>
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
                        <h1>Filling Out Form C <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>For Requests</em>)</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                    
                        <!-- <?php 
                            $attributes = array('id' => 'forms');
                            // echo form_open('Proposals/', $attributes);
                        ?> -->
                          <form method="post" name="form_c" id="form_c">
                            
                             <?php /*include('proposal_header.php');*/?>
<!-- START proposal header of form_c.php -->
<div class="panel panel-success" align="center">
    <div class="panel-body">
      <table width="100%">
        <tr>
          <td><label>Title:</label></td>
          <td colspan="4"><input type="text" class="form-control" name="title" data-toggle="tooltip" placeholder="Name of the Program/Project/Activity" required>

            <input type="hidden" class="form-control" name="user_id" data-toggle="tooltip" value="<?php echo $user_id?>">
            <!--<input type="hidden" class="form-control" name="form_type" data-toggle="tooltip" value="<?php if(isset($form_type)) echo $form_type; ?>">-->
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
         
          <td>
            <input type="hidden" name="school" value="<?php echo $user_office?>" >
    <?php if(isset($proposal_id)):?>
      <input type="hidden" name="proposal_id" value="<?php echo $proposal_id?>" >
    <?php endif;?>  
          </td>
          <td>
             <input type="hidden" class="form-control" name="department" value="<?=$user_dept?>" >
             <input type="hidden" class="form-control" name="form_type"  value="0"/>
             
          </td>
          <td>
             <input type="hidden" class="form-control" name="organization" value="<?=$organization?>" >
          </td>
        </tr> 
        <tr>
            <td><label>Inclusive Date:</label></td>
            <td><input type="text" id="inclusive-date1" name="inclusive_date1" data-toggle="tooltip" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
            <td class="text-center"><em>to</em></td>
            <td><input type="text" id="inclusive-date2" name="inclusive_date2" data-toggle="tooltip" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
        </tr>
        <tr>
            <td><label>Venue:</label></td>
            <td colspan="3"><input type="text" id="venue" class="form-control" data-toggle="tooltip" name="venue" placeholder="Where will the activity take place?" required></td>
            <td></td>
            <td></td>
        </tr>
      </table>
    </div>
  </div>
<!-- END of proposal header -->
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>Program/Project/Activity Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                      <thead>
                                        <th class="bg-success">A. Requester (<em>please <span class="text-danger">check/tick</span> the appropriate item and <span class="text-danger">include</span> the specific name of partner or requester</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table width="100%">
                                              <tr>
                                                <td width="15%">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" id= "community" value="community" data-toggle="collapse" data-target="#1_comm">Community</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_comm" class="collapse">
                                                    <input type="text" class="form-control" name="communities" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" id ="organization" value="organization" data-toggle="collapse" data-target="#1_org">Organization</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_org" class="collapse">
                                                    <input type="text" class="form-control" name="organization:" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" id ="institution" value="institution" data-toggle="collapse" data-target="#1_inst">Institution</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_inst" class="collapse">
                                                    <input type="text" class="form-control" name="institution:" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" id ="units from within usc" value="units from within usc" data-toggle="collapse" data-target="#1_units">Unit/s from within USC, please specify</label>
                                                  </div>
                                                  <div id="1_units" class="collapse">
                                                    <table class="table table-bordered" width="100%">
                                                      <tr>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id ="ces office" value="ces office">CES Office</label>
                                                          </div>
                                                        </td>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id ="school_of_arts_and_sciences" value="school_of_arts_and_sciences" data-toggle="collapse" data-target="#sas">School of Arts and Sciences</label>
                                                            <div id="sas" class="collapse">
                                                              <select class="form-control" name="school_of_arts_and_sciences">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id = "Languages and Literature" value="Languages and Literature">Languages and Literature</option>
                                                                <option id = "Philosophy and Religious Studies" value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                                                <option id= "Psychology" value="Psychology">Psychology</option>
                                                                <option value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                                                <option id = "Biology" value="Biology">Biology</option>
                                                                <option value="Chemistry">Chemistry</option>
                                                                <option id = "Computer and Information Sciences" value="Computer and Information Sciences">Computer and Information Sciences</option>
                                                                <option id="Mathematics" value="Mathematics">Mathematics</option>
                                                                <option id= "Physics" value="Physics">Physics</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id= "school of architecture, fine arts and design" value="school of architecture, fine arts and design" data-toggle="collapse" data-target="#safad">School of Architecture, Fine Arts and Design</label>
                                                            <div id="safad" class="collapse">
                                                              <select class="form-control" name="school_of_architecture_fine_arts_and_design">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id= "Architecture" value="Architecture">Architecture</option>
                                                                <option id="Fine Arts" value="Fine Arts">Fine Arts</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id="school of education" value="school of education" data-toggle="collapse" data-target="#soed">School of Education</label>
                                                            <div id="soed" class="collapse">
                                                              <select class="form-control" name="school_of_education">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id = "Teacher Education" value="Teacher Education">Teacher Education</option>
                                                                <option id ="Science and Mathematics" value="Science and Mathematics">Science and Mathematics</option>
                                                                <option id= "Physical Education" value="Physical Education">Physical Education</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id = "school of engineering" value="school of engineering" data-toggle="collapse" data-target="#soe">School of Engineering</label>
                                                            <div id="soe" class="collapse">
                                                              <select class="form-control" name="school_of_engineering">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id="Chemical Engineering" value="Chemical Engineering">Chemical Engineering</option>
                                                                <option id="Civil Engineering" value="Civil Engineering">Civil Engineering</option>
                                                                <option id="Computer Engineering" value="Computer Engineering">Computer Engineering</option>
                                                                <option id="Electronics and Communications Engineering" value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                                                <option id="Electrical Engineering" value="Electrical Engineering">Electrical Engineering</option>
                                                                <option id="Industrial Engineering" value="Industrial Engineering">Industrial Engineering</option>
                                                                <option id="Mechanical Engineering" value="Mechanical Engineering">Mechanical Engineering</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id="school of business and economics" value="school of business and economics" data-toggle="collapse" data-target="#sbe">School of Business and Economics</label>
                                                            <div id="sbe" class="collapse">
                                                              <select class="form-control" name="school_of_business_and_economics">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id="Accountancy" value="Accountancy">Accountancy</option>
                                                                <option id="Business Administration" value="Business Administration">Business Administration</option>
                                                                <option id="Economics" value="Economics">Economics</option>
                                                                <option id="Hospitality Management" value="Hospitality Management">Hospitality Management</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id="school of health care profession" value="school of health care profession" data-toggle="collapse" data-target="#shcp">School of Health Care Profession</label>
                                                            <div id="shcp" class="collapse">
                                                              <select class="form-control" name="school_of_health_care_profession">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id="Nursing" value="Nursing">Nursing</option>
                                                                <option id="Pharmacy" value="Pharmacy">Pharmacy</option>
                                                                <option id="Nutrition and Dietics" value="Nutrition and Dietics">Nutrition and Dietics</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id="school of law and governance" value="school of law and governance" data-toggle="collapse" data-target="#solg">School of Law and Governance</label>
                                                            <div id="solg" class="collapse">
                                                              <select class="form-control" name="school_of_law_and_governance">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option id="Law" value="Law">Law</option>
                                                                <option id="Political Science" value="Political Science">Political Science</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" id="support unit" value="support unit" data-toggle="collapse" data-target="#su">Support Unit</label>
                                                            <div id="su" class="collapse">
                                                              <select class="form-control" name="support_unit">
                                                                <option value="0">-- Choose your Unit --</option>
                                                                <option id="Athletics Office" value="Athletics Office">Athletics Office</option>
                                                                <option id="Campus Ministry, Talamban" value="Campus Ministry, Talamban">Campus Ministry, Talamban</option>
                                                                <option id="Guidance Center" value="Guidance Center">Guidance Center</option>
                                                                <option id="Director of Library" value="Director of Library">Director of Library</option>
                                                                <option id="OSA Downtown" value="OSA Downtown">OSA Downtown</option>
                                                                <option id="OSA Talamban" value="OSA Talamban">OSA Talamban</option>
                                                                <option id="Club Mega" value="Club Mega">Club Mega</option>
                                                                <option id="Pathways" value="Pathways">Pathways</option>
                                                                <option id="USC-Supreme Student Council" value="USC-Supreme Student Council">USC-Supreme Student Council</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                      </tr>
                                                    </table>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                      <thead>
                                        <th class="bg-success">B. Mode of request (<em>please <span class="text-danger">check/tick</span> the appropriate item and <span class="text-danger">attach</span> said communication to this proposal</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table width="100%">
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" id = "letter" value="letter">letter, please attach</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" id="email" value="email">email, please attach</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" id="verbal" value="verbal">verbal, please provide evidence</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" id="sms" value="sms">SMS, please provide evidence</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" id="others" value="others" data-toggle="collapse" data-target="#1b_others">Others</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1b_others" class="collapse">
                                                    <input type="text" class="form-control" name="mode_of_request_others" placeholder="Please Specify...">
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                      <thead>
                                        <th class="bg-success">C. Nature of the Program/Project/Activity (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                        
                                        <?php include('nature_of_the_program.php'); ?>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                      <thead>
                                        <th class="bg-success"> D. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      
                                      <?php include('program_area.php'); ?>

                                    </table>
                                </div>
                            </div>

                            <?php include('rationale_and_contextualization.php');?>

                            <?php include('goal_objectives_and_outcomes.php');?>

                            <?php include('participants_partners_and_beneficiaries.php');?>

                            <?php include('outline_of_activities.php');?>
                            
                            <?php include('budgetary_requirements.php');?>

                            <input type="hidden" name="form_type" value="c"></input>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_prop"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_prop_coord"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>

            <?php include('exit_modal.php');?>

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
    <br>
    <br>
    <?php include('application/views/footer.php');?>
    <script type="text/javascript">
    $(document).ready(function () {
      var data;
      <?php if(isset($proposal)):?>
      data = <?php echo $proposal[0]->proposal_json_format;?>;
      <?php endif?>
      if(data !=undefined)
      {
        //alert(document.getElementsByName("proposal_id")[0].value);
        /*setting the values of the form*/
        document.getElementsByName("title")[0].value = data.title;
        document.getElementsByName("inclusive_date1")[0].value = data.inclusive_date1;
        document.getElementsByName("inclusive_date2")[0].value = data.inclusive_date2;
        document.getElementsByName("venue")[0].value = data.venue;
        document.getElementsByName("rationale_and_contextualization")[0].value=data.rationale_and_contextualization;
        document.getElementsByName("goal_objectives_and_outcomes")[0].value = data.goal_objectives_and_outcomes;
        document.getElementsByName("participants_partners_and_beneficiaries")[0].value = data.participants_partners_and_beneficiaries;
        if(data.tentative_date.length > 0)
        {
          for(var i=0; i < (data.tentative_date.length - 1); i++)
          {
            var list = '<tr>\
                <td><input type="text" name="tentative_date[]" data-toggle="tooltip" class="form-control datepicker" required></td>\
                <td><input type="text" name="activities[]" data-toggle="tooltip" class="form-control" required></td>\
                <td><input type="text" name="participants_needed[]" data-toggle="tooltip" class="form-control" required></td>\
                <td><input type="text" name="persons_incharge[]" data-toggle="tooltip" class="form-control" required></td>\
                <td class="text-center">\
                <button type="button" class="rm-activity-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                </td>\
              </tr>';
            $('#activity-outline tbody').append(list);
          }
          for(var i=0; i < data.tentative_date.length; i++)
          {
            document.getElementsByName("tentative_date[]")[i].value = data.tentative_date[i];
            document.getElementsByName("activities[]")[i].value = data.activities[i];
            document.getElementsByName("participants_needed[]")[i].value = data.participants_needed[i];
            document.getElementsByName("persons_incharge[]")[i].value = data.persons_incharge[i];
          }
        }else{
          document.getElementsByName("tentative_date[]")[0].value = data.tentative_date[0];
          document.getElementsByName("activities[]")[0].value = data.activities[0];
          document.getElementsByName("participants_needed[]")[0].value = data.participants_needed[0];
          document.getElementsByName("persons_incharge[]")[0].value = data.persons_incharge[0];         
        }
        if(data.hasOwnProperty('a_particulars') && data.a_particulars.length > 0)
        {
          for(var i=0; i < data.a_particulars.length; i++)
          {
            addMealsRow();
          }
          for(var i=0; i < data.a_particulars.length; i++)
          {
            document.getElementsByName("a_particulars[]")[i].value = data.a_particulars[i];
            document.getElementsByName("a_frequency[]")[i].value = data.a_frequency[i];
            document.getElementsByName("a_quantity[]")[i].value = data.a_quantity[i];
            document.getElementsByName("a_amount[]")[i].value = data.a_amount[i];
            document.getElementsByName("a_subtotal[]")[i].value = data.a_subtotal[i];           
          }           
        }
        if(data.hasOwnProperty('b_particulars') && data.b_particulars.length > 0){
          for(var i=0; i < data.b_particulars.length; i++)
          {
            addTranspoRow();
          }
          for(var i=0; i < data.b_particulars.length; i++)
          {
            document.getElementsByName("b_particulars[]")[i].value = data.b_particulars[i];
            document.getElementsByName("b_frequency[]")[i].value = data.b_frequency[i];
            document.getElementsByName("b_quantity[]")[i].value = data.b_quantity[i];
            document.getElementsByName("b_amount[]")[i].value = data.b_amount[i];
            document.getElementsByName("b_subtotal[]")[i].value = data.b_subtotal[i];           
          }
        }
        if(data.hasOwnProperty('c_particulars') && data.c_particulars.length > 0){
          for(var i=0; i < data.c_particulars.length; i++)
          {
            addMaterialsRow();
          }
          for(var i=0; i < data.c_particulars.length; i++)
          {
            document.getElementsByName("c_particulars[]")[i].value = data.c_particulars[i];
            document.getElementsByName("c_frequency[]")[i].value = data.c_frequency[i];
            document.getElementsByName("c_quantity[]")[i].value = data.c_quantity[i];
            document.getElementsByName("c_amount[]")[i].value = data.c_amount[i];
            document.getElementsByName("c_subtotal[]")[i].value = data.c_subtotal[i];           
          }
        }
        if(data.hasOwnProperty('grand_total'))
        {
          document.getElementsByName("grand_total")[0].value = data.grand_total;
        }
        if(data.hasOwnProperty('requester'))
        {
          for(var i=0; i < data.requester.length; i++)
          {
            document.getElementById(data.requester[i]).checked = true;
            if(data.requester[i] === 'community' && data.hasOwnProperty("communities")){
              document.getElementsByName("communities")[0].value= data.communities;
            }else if(data.requester[i] ==='organization'){
              document.getElementsByName("organization:").value = data.organization;
            }else if(data.requester[i] === 'institution'){
              document.getElementsByName("institution:").value = data.institution;
            }else if(data.requester[i] === 'units from within usc'){
              document.getElementsByName("units from within usc").value = data.unit_from_usc;
            }
          }
        }
        
        if(data.hasOwnProperty("mode_of_request"))
        {
           //console.log(data.hasOwnProperty("mode_of_request"));
          for(var i = 0; i < data.mode_of_request.length; i++)
          {
            //alert(data.mode_of_request[i]);
            document.getElementById(data.mode_of_request[i]).checked = true;
            if(data.mode_of_request[i] == "others" && data.hasOwnProperty("mode_of_request_others"))
            {
              document.getElementsByTagName("mode_of_request_others")[0].value = data.mode_of_request_others;
            }
          }

        }
        //alert('hey');
        //console.log(data.hasOwnProperty("nature_of_the_program"));
        if(data.hasOwnProperty("nature_of_the_program"))
        {
          for(var i = 0; i < data.nature_of_the_program.length; i++)
          {
            //alert(data.nature_of_the_program[i]);
            document.getElementById(data.nature_of_the_program[i]).checked = true;
            if(data.nature_of_the_program[i] == "others" && data.hasOwnProperty("nature_of_the_program_others"))
            {
              document.getElementsByTagName("nature_of_the_program_others")[0].value = data.nature_of_the_program_others;
            }
          }
        }

        if(data.hasOwnProperty("program_area"))
        {
          for(var i = 0; i < data.program_area.length; i++)
          {
            //alert(data.program_area[i]);
            document.getElementById(data.program_area[i]).checked = true;
          }
        } 
      }  
    });
  </script>

</body>

</html>
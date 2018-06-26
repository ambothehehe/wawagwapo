<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Fill Out Form A</title>
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
                        <h1>Filling Out Form A <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>Concept Note</em>)</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-left">
                      <h4>
                      <p>Required fields: <strong>****</strong></span></p>
                      </h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <form method="post" name="form_a1" id="form_a1">                            
                            <?php //include('proposal_header.php');?>

<!-- START proposal header of form_a1.php -->
<div class="panel panel-success" align="center">
    <div class="panel-body">
      <table width="100%">
        <tr>
          <td><label>Title:</label></td>
          <td colspan="4"><input type="text" class="form-control" name="title" data-toggle="tooltip" placeholder="****  Name of the Program/Project/Activity  ****" required>

            <input type="hidden" class="form-control" name="user_id" data-toggle="tooltip" value="<?php echo $user_id?>">
             <input type="hidden" class="form-control" name="form_type" data-toggle="tooltip" value="1">
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
          </td>
          <td>
             <input type="hidden" class="form-control" name="organization" value="<?=$organization?>" >
          </td>
        </tr> 
        <tr>
            <td><label>Inclusive Date:</label></td>
            <td><input type="text" id="inclusive-date1" name="inclusive_date1" data-toggle="tooltip" placeholder="****  Date Start of Activity (mm/dd/yyyy)  ****" class="form-control datepicker" required></td>
            <td class="text-center"><em>to</em></td>
            <td><input type="text" id="inclusive-date2" name="inclusive_date2" data-toggle="tooltip" placeholder="****  Date End of Activity (mm/dd/yyyy)  ****" class="form-control datepicker" required></td>
        </tr>
        <tr>
            <td><label>Venue:</label></td>
            <td colspan="3"><input type="text" id="venue" class="form-control" data-toggle="tooltip" name="venue" placeholder="****  Where will the activity take place?  ****" required></td>
            <td></td>
            <td></td>
        </tr>
      </table>
    </div>
  </div>
<!-- END of proposal header -->
                


                       <!--  <input type="hidden" name="procedure_num" value="3"> -->
                            
                            <?php include('rationale_and_contextualization.php');?>

                            <?php include('goal_objectives_and_outcomes.php');?>

                            <?php include('participants_partners_and_beneficiaries.php');?>

                         
                            <?php include('outline_of_activities.php');?>
                             

                            
                            <?php include('budgetary_requirements.php');?>
                             

                             <?php include('form_b1.php');?>

                        
                            
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button id= "save_a1" class="btn btn-default btn-block" name="submit" data-toggle="modal" data-target="#saveasdraft" value="save_prop"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit_propa1" name="submit" data-toggle="modal" data-target="#createproposal" value="submit_prop" onsubmit = "window.location='<?php echo base_url(); ?>index.php/Faculty/send'"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>

                            
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button> -->
                        </form>
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

    <?php include('application/views/modals.php'); ?>
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
				if(data.hasOwnProperty('unit_responsible'))
				{
					for(var i=0; i < data.unit_responsible.length; i++)
					{
						document.getElementById(data.unit_responsible[i]).checked = true;
					}
				}
				if(data.school_of_arts_and_sciences != "0"){
					//document.getElementById("School of Arts and Sciences").checked = true;
					document.getElementById(data.school_of_arts_and_sciences).selected = true;
				}
				if(data.school_of_architecture_fine_arts_and_design != "0"){
					document.getElementById(data.school_of_architecture_fine_arts_and_design).selected = true;
				}
				if(data.school_of_education != "0"){
					document.getElementById(data.school_of_education).selected = true;
				}
				if(data.school_of_engineering != "0"){
					document.getElementById(data.school_of_engineering).selected = true;
				}
				if(data.school_of_business_and_economics != "0"){
					document.getElementById(data.school_of_business_and_economics).selected = true;
				}
				if(data.school_of_health_care_profession != "0"){
					document.getElementById(data.school_of_health_care_profession).selected = true;
				}
				if(data.school_of_law_and_governance != "0"){
					document.getElementById(data.school_of_law_and_governance).selected = true;
				}
				if(data.support_unit != "0"){
					document.getElementById(data.support_unit).selected = true;
				}
				document.getElementById(data.term).checked=true;
				document.getElementById(data.semester).checked=true;
				if(data.semester == "others")
				{
					document.getElementById("othersem").value =data.semester_others;
				}
				if(data.hasOwnProperty("locus_and_leadership")){
					for(var i = 0; i < data.locus_and_leadership.length; i++)
					{
						//alert(data.locus_and_leadership[i]);
						document.getElementById(data.locus_and_leadership[i]).checked = true;
						if(data.locus_and_leadership[i] == "others:")
						{
							document.getElementsByTagName("locus_and_leadership_others").value= data.locus_and_leadership_others;
						}
					}
				}
				for(var i = 0; i < data.nature_of_the_program.length; i++)
				{
					//alert(data.nature_of_the_program.length);
					document.getElementById(data.nature_of_the_program[i]).checked = true;
					if(data.nature_of_the_program[i] == "others")
					{
						document.getElementById(data.nature_of_the_program[i]+"_nature").checked = true;
						document.getElementsByName("nature_of_the_program_others")[0].value= data.nature_of_the_program_others;
					}else{
						document.getElementById(data.nature_of_the_program[i]).checked = true;
					}
				}
				if(data.hasOwnProperty("program_area"))
				{
					for(var i = 0; i < data.program_area.length; i++)
					{
						//alert(data.nature_of_the_program[i]);
						document.getElementById(data.program_area[i]).checked = true;
						
					}
				}
				if(data.hasOwnProperty("prelimasschoice_contextdimension"))
				{
					for(var i=0; i < data.prelimasschoice_contextdimension.length;i++)
					{
						if(data.prelimasschoice_contextdimension[i]== "unit have done preliminary needs assessment")
						{
							document.getElementById("unitdone").checked = true;
							for(var x = 0; x < data.unit_personnel_involved.length; x++)
							{
								if(data.unit_personnel_involved[x]!="others")
									document.getElementById(data.unit_personnel_involved[x]).checked = true;
								else{
									document.getElementById(data.unit_personnel_involved[x]+"_context").checked = true;
									document.getElementById("unit_personnel_involved_others").value=data.unit_personnel_involved_others;
								}
							}
						}
						if(data.prelimasschoice_contextdimension[i]== "unit have not done preliminary needs assessment")
						{
						   document.getElementById("unitnotdone").checked = true;
						}	
						if(data.prelimasschoice_contextdimension[i]== "with existing verifiable data from the field")
						{
						   document.getElementById("withdata").checked = true;
						   for(var x = 0; x < data.data_sources.length; x++)
						   {
							   //alert(data.data_sources[x]);
								if(data.data_sources[x]!="others")
									document.getElementById(data.data_sources[x]).checked = true;
								else{
									document.getElementById(data.data_sources[x]+"_datasource").checked = true;
									document.getElementById("data_sources_others").value=data.data_sources_others;
								}
						   }
						   for(var x = 0; x < data.tools_used_to_gather.length; x++)
						   {
							   document.getElementById(data.tools_used_to_gather[x]).checked = true;
							   if(data.tools_used_to_gather[x] === "others_tools")
								document.getElementById("tools_used_to_gather_others").value=data.tools_used_to_gather_others;
								
						   }
						   for(var x = 0; x < data.means_employed_to_verify.length; x++)
						   {
								//if(data.means_employed_to_verify[x]!="others")
								document.getElementById(data.means_employed_to_verify[x]+"_mean").checked = true;
								if(data.means_employed_to_verify[x]=="others"){
									document.getElementById("means_employed_to_verify_others").value=data.means_employed_to_verify_others;
								}
						   }
						   for(var x = 0; x < data.who_collected.length; x++)
						   {
								//if(data.means_employed_to_verify[x]!="others")
								document.getElementById(data.who_collected[x]+"_collected").checked = true;
								if(data.who_collected[x]=="others"){
									document.getElementById("who_collected_others").value=data.who_collected_others;
								}
						   }					   
						}
					}
				}
				if(data.hasOwnProperty("productivity_dimension"))
				{
					for(var i = 0; i < data.productivity_dimension.length; i++)
					{
						document.getElementsByName("productivity_dimension[]")[i].checked = true;
						if( data.productivity_dimension[i] === "others" && data.hasOwnProperty("productivity_dimension_others"))
						{
							document.getElementsByName("productivity_dimension_others")[0].value = data.productivity_dimension_others;
						}
					}
				}
				if(data.hasOwnProperty("economic_dimension"))
				{
					for(var i = 0; i < data.economic_dimension.length; i++)
					{
						document.getElementsByName("economic_dimension[]")[i].checked = true;
						if( data.economic_dimension[i] === "others" && data.hasOwnProperty("economic_dimension_others"))
						{
							document.getElementsByName("economic_dimension_others")[0].value = data.economic_dimension_others;
						}else if(data.economic_dimension[i] == "employability of partners at"){
							//alert("test");
							document.getElementsByName("employability_of_partners")[0].value = data.employability_of_partners;
						}
					}
				}
				if(data.hasOwnProperty("social_dimension"))
				{
					for(var i = 0; i < data.social_dimension.length; ++i)
					{
						
						if( data.social_dimension[i] === "others" && data.hasOwnProperty("social_dimension_others"))
						{
							//alert(data.social_dimension[i]);
							document.getElementById(data.social_dimension[i]+"_social_dimension").checked = true;
							//alert(data.social_dimension[i]);
							document.getElementsByName("social_dimension_others")[0].value = data.social_dimension_others;
						}else{
							//alert(data.social_dimension[i]);
							document.getElementById(data.social_dimension[i]).checked = true;
						}
					}
					if(data.hasOwnProperty("social_dimension_household") && data.social_dimension_household > 0)
					{
						document.getElementsByName("social_dimension_household")[0].value =  data.social_dimension_household;
					}
					if(data.hasOwnProperty("social_dimension_youth_male") && data.social_dimension_youth_male)
					{
						document.getElementsByName("social_dimension_youth_male")[0].value =  data.social_dimension_youth_male;
					}
					if(data.hasOwnProperty("social_dimension_local_government_unit"))
					{
						document.getElementsByName("social_dimension_local_government_unit")[0].value =  data.social_dimension_local_government_unit;
					}
					if(data.hasOwnProperty("social_dimension_youth_female"))
					{
						document.getElementsByName("social_dimension_youth_female")[0].value =  data.social_dimension_youth_female;
					}
					if(data.hasOwnProperty("social_dimension_organization"))
					{
						document.getElementsByName("social_dimension_organization")[0].value =  data.social_dimension_organization;
					}	
					if(data.hasOwnProperty("social_dimension_children_boy"))
					{
						document.getElementsByName("social_dimension_children_boy")[0].value =  data.social_dimension_children_boy;
					}
					if(data.hasOwnProperty("social_dimension_senior_citizen_male"))
					{
						document.getElementsByName("social_dimension_senior_citizen_male")[0].value =  data.social_dimension_senior_citizen_male;
					}	
					if(data.hasOwnProperty("social_dimension_children_girl"))
					{
						document.getElementsByName("social_dimension_children_girl")[0].value =  data.social_dimension_children_girl;
					}
					if(data.hasOwnProperty("social_dimension_senior_citizen_female"))
					{
						document.getElementsByName("social_dimension_senior_citizen_female")[0].value =  data.social_dimension_senior_citizen_female;
					}					
					if(data.hasOwnProperty("social_dimension_infants_boy"))
					{
						document.getElementsByName("social_dimension_infants_boy")[0].value =  data.social_dimension_infants_boy;
					}	
					if(data.hasOwnProperty("social_dimension_adults_male"))
					{
						document.getElementsByName("social_dimension_adults_male")[0].value =  data.social_dimension_adults_male;
					}	
					if(data.hasOwnProperty("social_dimension_infants_girl"))
					{
						document.getElementsByName("social_dimension_infants_girl")[0].value =  data.social_dimension_infants_girl;
					}
					if(data.hasOwnProperty("social_dimension_adults_female"))
					{
						document.getElementsByName("social_dimension_adults_female")[0].value =  data.social_dimension_adults_female;
					}
					if(data.hasOwnProperty("social_dimension_others_count"))
					{
						document.getElementsByName("social_dimension_others_count")[0].value =  data.social_dimension_others_count;
					}
					
				}
				if(data.hasOwnProperty("environment_dimension"))
				{
					for(var i = 0; i < data.environment_dimension.length; i++)
					{
						
						if( data.environment_dimension[i] === "others" && data.hasOwnProperty("environment_dimension_others"))
						{
							document.getElementById(data.environment_dimension[i]+"_environment_dimension").checked = true;
							document.getElementsByName("environment_dimension_others")[0].value = data.environment_dimension_others;
						}else{
							document.getElementById(data.environment_dimension[i]).checked = true;
						}
					}
				}				
				if(data.hasOwnProperty("government_dimension"))
				{
					for(var i = 0; i < data.government_dimension.length; i++)
					{
						//alert(data.government_dimension[i]);
						if( data.government_dimension[i] === "others" && data.hasOwnProperty("government_dimension_others"))
						{
							//alert(data.government_dimension_others);
							document.getElementById(data.government_dimension[i]+"_government_dimension").checked = true;
							document.getElementsByName("government_dimension_others")[0].value = data.government_dimension_others;
							
						}else{
							
							document.getElementById(data.government_dimension[i]).checked = true;
						}
					}
				}
				if(data.hasOwnProperty("hours_needed_to_prepare"))
				{
					document.getElementsByName("hours_needed_to_prepare")[0].value =  data.hours_needed_to_prepare;
				}
				if(data.hasOwnProperty("hours_needed_to_complete"))
				{
					document.getElementsByName("hours_needed_to_complete")[0].value =  data.hours_needed_to_complete;
				}
				if(data.hasOwnProperty("faculty_members_involved_count"))
				{
					document.getElementsByName("faculty_members_involved_count")[0].value =  data.faculty_members_involved_count;
				}
				if(data.hasOwnProperty("course_based_students_involved_count"))
				{
					document.getElementsByName("course_based_students_involved_count")[0].value =  data.course_based_students_involved_count;
				}
				if(data.hasOwnProperty("student_organization_members_involved_count"))
				{
					document.getElementsByName("student_organization_members_involved_count")[0].value =  data.student_organization_members_involved_count;
				}
				if(data.hasOwnProperty("staff_involved_count"))
				{
					document.getElementsByName("staff_involved_count")[0].value =  data.staff_involved_count;
				}	
				if(data.hasOwnProperty("campaign_materials_to_produce_count"))
				{
					document.getElementsByName("campaign_materials_to_produce_count")[0].value =  data.campaign_materials_to_produce_count;
				}
				if(data.hasOwnProperty("campaign_materials_to_improve_count"))
				{
					document.getElementsByName("campaign_materials_to_improve_count")[0].value =  data.campaign_materials_to_improve_count;
				}
				if(data.hasOwnProperty("curriculum_programs_to_develop_count"))
				{
					document.getElementsByName("curriculum_programs_to_develop_count")[0].value =  data.curriculum_programs_to_develop_count;
				}
				if(data.hasOwnProperty("curriculum_programs_to_improve_count"))
				{
					document.getElementsByName("curriculum_programs_to_improve_count")[0].value =  data.curriculum_programs_to_improve_count;
				}
				if(data.hasOwnProperty("proposals_to_develop_count"))
				{
					document.getElementsByName("proposals_to_develop_count")[0].value =  data.proposals_to_develop_count;
				}
				if(data.hasOwnProperty("papers_presented_count"))
				{
					document.getElementsByName("papers_presented_count")[0].value =  data.papers_presented_count;
				}
				if(data.hasOwnProperty("papers_published_count"))
				{
					document.getElementsByName("papers_published_count")[0].value =  data.papers_published_count;
				}
				if(data.hasOwnProperty("policies_to_advocate_count"))
				{
					document.getElementsByName("policies_to_advocate_count")[0].value =  data.policies_to_advocate_count;
				}
				if(data.hasOwnProperty("preparation_expertise_needed_faculty_members"))
				{
					document.getElementsByName("preparation_expertise_needed_faculty_members")[0].value =  data.preparation_expertise_needed_faculty_members;
				}	
				if(data.hasOwnProperty("preparation_expertise_needed_students"))
				{
					document.getElementsByName("preparation_expertise_needed_students")[0].value =  data.preparation_expertise_needed_students;
				}					
				if(data.hasOwnProperty("preparation_roles_faculty_members"))
				{
					document.getElementsByName("preparation_roles_faculty_members")[0].value =  data.preparation_roles_faculty_members;
				}
				if(data.hasOwnProperty("preparation_roles_students"))
				{
					document.getElementsByName("preparation_roles_students")[0].value =  data.preparation_roles_students;
				}
				if(data.hasOwnProperty("implementation_expertise_needed_faculty_members"))
				{
					document.getElementsByName("implementation_expertise_needed_faculty_members")[0].value =  data.implementation_expertise_needed_faculty_members;
				}
				if(data.hasOwnProperty("implementation_expertise_needed_students"))
				{
					document.getElementsByName("implementation_expertise_needed_students")[0].value =  data.implementation_expertise_needed_students;
				}
				if(data.hasOwnProperty("implementation_roles_faculty_members"))
				{
					document.getElementsByName("implementation_roles_faculty_members")[0].value =  data.implementation_roles_faculty_members;
				}
				if(data.hasOwnProperty("implementation_roles_students"))
				{
					document.getElementsByName("implementation_roles_students")[0].value =  data.implementation_roles_students;
				}
				if(data.hasOwnProperty("nature_of_linkage"))
				{	
					if(data.nature_of_linkage == "1")
					{
						document.getElementsByName("nature_of_linkage")[0].checked =  true;
					}else{
						document.getElementsByName("nature_of_linkage")[1].checked =  true;
					}
				}			
				if(data.hasOwnProperty("date_signed"))
				{
					document.getElementsByName("date_signed")[0].value =  data.date_signed;
				}
				if(data.hasOwnProperty("signatories_for_usc"))
				{
					document.getElementsByName("signatories_for_usc")[0].value =  data.signatories_for_usc;
				}
				if(data.hasOwnProperty("signatories_for_partner"))
				{
					document.getElementsByName("signatories_for_partner")[0].value =  data.signatories_for_partner;
				}
				if(data.hasOwnProperty("major_duties_of_usc_unit"))
				{
					document.getElementsByName("major_duties_of_usc_unit")[0].value =  data.major_duties_of_usc_unit;
				}
				if(data.hasOwnProperty("major_duties_of_partner"))
				{
					document.getElementsByName("major_duties_of_partner")[0].value =  data.major_duties_of_usc_unit;
				}				
				if(data.hasOwnProperty("date_linkage_started"))
				{
					document.getElementsByName("date_linkage_started")[0].value =  data.date_linkage_started;
				}
				if(data.hasOwnProperty("who_initiated_linkage"))
				{
					document.getElementsByName("who_initiated_linkage")[0].value =  data.who_initiated_linkage;
				}
				if(data.hasOwnProperty("activities_done"))
				{
					document.getElementsByName("activities_done")[0].value =  data.activities_done;
				}
				if(data.hasOwnProperty("opportunities_identified"))
				{
					document.getElementsByName("opportunities_identified")[0].value =  data.opportunities_identified;
				}
				if(data.hasOwnProperty("challenges_encountered"))
				{
					document.getElementsByName("challenges_encountered")[0].value =  data.challenges_encountered;
				}				
				//signatories_for_partner
				//alert(data.hasOwnProperty('b_particulars'));
			}
				
		});
	</script>
	<script>
    $("#form_a1").submit(function() {
  var id = $('#prod').val();
    $.ajax({
                type:'POST',
                url:'<?php echo base_url("index.php/Representative/send"); ?>',
                data:{'id':id},
                success:function(data){
                }
            });
});
</script>
</body>

</html>
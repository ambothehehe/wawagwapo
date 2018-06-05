<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Form A and B</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

          <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include('application/views/topNav.php');?>
            <div class="container-fluid" style="padding-top:50px">

                <div class="row tab-content">

                   <div id="printArea">
						<div>
							<h1>USC-CES FORM A <small>CES Program/Project/Activity Proposal (<u>Concept Note</u>)</small></h1>
							<hr>
							<div class="panel" align="center" >
								<div class="panel-body"><p>
									  <h2><?php if(property_exists($specprop,"title")){ echo $specprop->title; } ?><!-- Barangay Labangon River Clean-up --></h2>
									  <h3><?php if(property_exists($specprop,"school")){ echo $specprop->school; } ?><!-- School of Arts & Sciences --></h3>
									  <h3><?php if(property_exists($specprop,"organization")){ echo $specprop->organization; } ?><!-- School of Arts & Sciences --></h3>

									  <h4><?php if(property_exists($specprop,"department")){ echo $specprop->department; } ?><!-- Computer and Information Sciences --></h4>
									  <h5><?php if(property_exists($specprop,"venue")){ echo $specprop->venue; } ?><!-- Barangay Talamban, Cebu City --></h5>
									  
									  <h5><?php if(property_exists($specprop,"inclusive_date1")){ echo date('F jS, Y',strtotime($specprop->inclusive_date1)); } ?> to <?php echo date('F jS, Y',strtotime($specprop->inclusive_date2));?><!-- December 25, 2015 --></h5>
									 
									</p>
								</div> <!-- panel-body -->
								<div class="panel panel-primary">
								
									<div class="panel-heading">
										<h4>I. Rationale and Contextualization</h4>
									</div>
									
									<div class="panel-body">
										<p class="text-justify"><?php if(property_exists($specprop,"rationale_and_contextualization")){ echo $specprop->rationale_and_contextualization; } ?></p>
										<button type="button" class="btn btn-xs btn-danger" id="btn-rationale"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment&nbsp;&nbsp;<span class="badge"></span></button>
									</div>
									
									<div id="rationale_comment" class="collapse">
									  <div class="panel panel-body panel-danger">
									  <?php $i = 0; foreach ($comments as $comment) {
										if($comment->comment_category == "Rationale and Contextualization"){ $i++;  ?>
										<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
										<p class="text-justify"><?php echo $comment->comment;?></p>
										
										<?php } }?>
										<?php if($i === 0): 
												echo "0 comment";
											  endif;
										?>
									  </div>
									</div>
								</div>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4>II. Goal, Objectives, and Outcomes</h4>
									</div>
									<div class="panel-body">
										<p class="text-justify"><?php if(property_exists($specprop,"goal_objectives_and_outcomes")){ echo $specprop->goal_objectives_and_outcomes; } ?></p>
										<button type="button" class="btn btn-xs btn-danger" id="btn-goals-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment <span class="badge"></span></button>
										<div id="goals_comment" class="collapse">
										  <div class="panel panel-body panel-danger">
										   <?php $i=0; foreach ($comments as $comment) { 
											if($comment->comment_category == "Goal, Objectives, and Outcomes"){ $i++;  ?>
											<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
											<p class="text-justify"><?php echo $comment->comment;?></p>
											
											<?php } } ?>
											<?php if($i === 0): 
												echo "0 comment";
											  endif;
											?>
										  </div>
										</div>
									</div>
								</div>
							   <div class="panel panel-primary">
									<div class="panel-heading">
										<h4>III. Participants, Partners and Beneficiaries</h4>
									</div>
									<div class="panel-body">
										<p class="text-justify"><?php if(property_exists($specprop,"participants_partners_and_beneficiaries")){  echo $specprop->participants_partners_and_beneficiaries; } ?></p>
										<button type="button" class="btn btn-xs btn-danger" id="btn-participants-comment" ><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment <span class="badge"></span></button>
										<div id="participants_comment" class="collapse">
										  <div class="panel panel-body panel-danger">
											<?php $i = 0; foreach ($comments as $comment) {
											if($comment->comment_category == "Participants, Partners and Beneficiaries"){ $i++;  ?>
											  
											<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
											<p class="text-justify"><?php echo $comment->comment;?></p>
											
											<?php } } ?>
											<?php if($i === 0): 
												echo "0 comment";
											  endif;
											?>
										  </div>
										</div>
									</div>
								</div>	
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4>IV. Outline of Activities</h4>
									</div>
									<div class="panel-body">
									 <table class="table table-bordered">
										  <thead>
											  <th class="text-center">Tentative Date</th>
											  <th class="text-center">Activities</th>
											  <th class="text-center">Participants Needed</th>
											  <th class="text-center">Person/s In-charge</th>
										  </thead>
										  <tbody>
										  	<?php if(property_exists($specprop, "tentative_date")) { ?>
											<?php for($i= 0; $i < count($specprop->tentative_date);$i++){?>
												<tr>
												<td><?php echo $specprop->tentative_date[$i]?></td>
												<td><?php echo $specprop->activities[$i]?></td>
												<td><?php echo $specprop->participants_needed[$i]?></td>
												<td><?php echo $specprop->persons_incharge[$i]?></td>
												</tr>
											<?php } } ?>
										  </tbody>
										</table>
										<button type="button" class="btn btn-xs btn-danger" id="btn-actoutline-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment</button>
										<div id="actoutline_comment" class="collapse">
										  <div class="panel panel-body panel-danger">
											<?php $i= 0;  foreach ($comments as $comment) {
											if($comment->comment_category == "Outline of Activities"){ $i++; ?>
											<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
											<p class="text-justify"><?php echo $comment->comment;?></p>
											
											<?php } } ?>
											<?php if($i === 0): 
												echo "0 comment";
											  endif;
										    ?>
											
										  </div>
										</div>										
									</div>
								</div>
							<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>V. Budgetary Requirements</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                  <thead>
                                      <th class="text-center" width="20%">Particulars</th>
                                      <th class="text-center" width="20%">Frequency</th>
                                      <th class="text-center" width="20%">Quantity</th>
                                      <th class="text-center" width="20%">Amount</th>
                                      <th class="text-center" width="20%">Total</th>
                                  </thead>
                                  <thead>
                                      <th colspan="5" class="bg-success">A. Meals and Snacks</th>
                                  </thead>
                                  <tbody>
                                  	<?php if(property_exists($specprop, "a_particulars")) { ?>
									<?php for($i= 0; $i < count($specprop->a_particulars);$i++){?>
											<tr>
												<td><?php echo $specprop->a_particulars[$i]?></td>
												<td><?php echo $specprop->a_frequency[$i]?></td>
												<td><?php echo $specprop->a_quantity[$i]?></td>
												<td><?php echo $specprop->a_amount[$i]?></td>
												<td><?php echo $specprop->a_subtotal[$i]?></td>
											</tr>
									<?php } } ?>
                                  </tbody>
								  <thead>
                                      <th colspan="5" class="bg-success">B. Transportation</th>
                                  </thead>
                                  <tbody>
                                  	<?php if(property_exists($specprop, "b_particulars")) { ?>
									<?php if(isset($specprop->b_particulars)){ for($i= 0; $i < count($specprop->b_particulars);$i++){?>
											<tr>
												<td><?php echo $specprop->b_particulars[$i]?></td>
												<td><?php echo $specprop->b_frequency[$i]?></td>
												<td><?php echo $specprop->b_quantity[$i]?></td>
												<td><?php echo $specprop->b_amount[$i]?></td>
												<td><?php echo $specprop->b_subtotal[$i]?></td>
											</tr>
									<?php } ?>
									<?php } ?>
									<?php } ?>
                                  </tbody>
								  <thead>
                                      <th colspan="5" class="bg-success">C. Materials</th>
                                  </thead>
                                  <tbody>
                                  	<?php if(property_exists($specprop, "c_particulars")) { ?>
									<?php if(isset($specprop->c_particulars)){ for($i= 0; $i < count($specprop->c_particulars);$i++){?>
											<tr>
												<td><?php echo $specprop->c_particulars[$i]?></td>
												<td><?php echo $specprop->c_frequency[$i]?></td>
												<td><?php echo $specprop->c_quantity[$i]?></td>
												<td><?php echo $specprop->c_amount[$i]?></td>
												<td><?php echo $specprop->c_subtotal[$i]?></td>
											</tr>
									<?php } ?>
									<?php } ?>
									<?php } ?>
                                    <tr>
                                      <td class="text-right" colspan="4"><h4>Total:</h4></td>
                                      <td class="text-center"><h4><?php echo $specprop->grand_total;?></h4></td>
                                    </tr>
                                  </tbody>									  
                                </table>
								<button type="button" class="btn btn-xs btn-danger" id="btn-budreq-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment</button>
								<div id="budreq_comment" class="collapse">
								  <div class="panel panel-body panel-danger">
								   <?php $i=0; foreach ($comments as $comment) {  
									if($comment->comment_category == "Budgetary Requirements"){ $i++; ?>
									<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
									<p class="text-justify"><?php echo $comment->comment;?></p>
									
									<?php } } ?>
									<?php if($i === 0): 
											echo "0 comment";
										  endif;
									?>
								  </div>
								</div>
                            </div>
                        </div>
							</div> <!-- panel -->
						</div>

						<?php if($specprop->form_type != "2") { ?>
						<h1>USC-CES FORM B <small>CES Program/Project/Activity Proposal (<u>Details</u>)</small></h1>
                        <hr>
						
						
						<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Program/Project/Activity Profile</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success wawa">A. College/School/Department/Unit Responsible</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                      <?php if(property_exists($specprop, "unit_responsible")) { ?>
                                      <?php  
                                      for($ur = 0; $ur < count($specprop->unit_responsible); $ur++) { ?>
                                        
                                        <ul>

                                          <?php 
                                          // if($unitresp_dropdown[$ur] == "0"){
                                          //   echo "";
                                          // }
                                          echo '<li>'.$specprop->unit_responsible[$ur];
										  if($specprop->unit_responsible[$ur] === "School of Arts and Sciences")
										  {
											 echo '-'.$specprop->school_of_arts_and_sciences;
										  }else if($specprop->unit_responsible[$ur] === "School of Engineering")
										  {
											 echo '-'.$specprop->school_of_engineering;
											  
										  }else if($specprop->unit_responsible[$ur] === "School of Archetecture, Fine Arts and Design")
										  {
											 echo '-'.$specprop->school_of_architecture_fine_arts_and_design;
										  }else if($specprop->unit_responsible[$ur] === "School of Education")
										  {
											 echo '-'.$specprop->school_of_education;
										  }else if($specprop->unit_responsible[$ur] === "School of Business and Economics")
										  {
											 echo '-'.$specprop->school_of_business_and_economics;
										  }else if($specprop->unit_responsible[$ur] === "School of Health Care Profession")
										  {
											 echo '-'.$specprop->school_of_health_care_profession;
										  }else if($specprop->unit_responsible[$ur] === "School of Law and Governance")
										  {
											 echo '-'.$specprop->school_of_law_and_governance;
										  }else if($specprop->unit_responsible[$ur] === "Support Unit")
										  {
											 echo '-'.$specprop->support_unit;
										  }
										  echo '</li>';
										  ?>

                                          <!-- <li>CES Office</li> -->
                                         <!--  <li>School of Arts and Sciences - Computer and Information Sciences</li>
                                          <li>School of Architecture, Fine Arts and Design - Fine Arts</li>
                                          <li>School of Business and Economics - Business Administration</li>
                                          <li>Support Unit - Guidance Center</li> -->
                                        </ul>
									  <?php } ?>
                                      </td>
                                    <?php } ?>
                                    </tr>
                                  </tbody>
								  <!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Time Frame</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        
                                        <ul>
                                          <li> <?php if(property_exists($specprop, "term")) {  echo $specprop->term." ". $specprop->semester; } ?>
												<?php if(property_exists($specprop, "semester_others") && property_exists($specprop, "semester") && $specprop->semester === "others") { echo " ". $specprop->semester_others; } ?>
										  </li>
                                        </ul>
                                      </td>
                                    </tr>
                                  </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">C. Locus and Leadership</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
									  <?php if(property_exists($specprop,"locus_and_leadership") && isset($specprop->locus_and_leadership)) {  ?>
									  <ul>
									  <?php for($i = 0; $i < count($specprop->locus_and_leadership);$i++){ ?>
                                        
										<li><?php echo $specprop->locus_and_leadership[$i];?>
                                        <?php if($specprop->locus_and_leadership[$i] === "others:"){ 
											echo $specprop->locus_and_leadership_others;
										}  ?>
									  <?php } } ?>
										</li>
									  </ul>
                                      </td>
                                    </tr>
                                  </tbody>
<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 4th Part -->
                                  <thead>
                                    <th class="bg-success">D. Nature of the Program/Project/Activity</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
									  <?php if( property_exists($specprop, "nature_of_the_program") && isset($specprop->nature_of_the_program)) {  ?>
									  <ul>
									  <?php for($i = 0; $i < count($specprop->nature_of_the_program);$i++){ ?>
                                        
										<li><?php echo $specprop->nature_of_the_program[$i];?>
                                        <?php if($specprop->nature_of_the_program[$i] === "others"){ 
											echo ":".$specprop->nature_of_the_program_others;
										}  ?>
									  <?php } } ?>
										</li>
									  </ul>
                                      </td>
                                    </tr>
                                  </tbody>
<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 5th Part -->
                                  <thead>
                                    <th class="bg-success">E. Program Area</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
									  <?php if(property_exists($specprop, "program_area") && isset($specprop->program_area)) {  ?>
									  <ul>
									  <?php for($i = 0; $i < count($specprop->program_area);$i++){ ?>
                                        
										<li><?php echo $specprop->program_area[$i];?>
    
									  <?php } } ?>
										</li>
									  </ul>
                                      </td>
                                    </tr>
                                  </tbody>								  
                                </table>
								<button type="button" class="btn btn-xs btn-danger" id="btn-progprofile-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment</button>
								<div id="progprofile_comment" class="collapse">
								  <div class="panel panel-body panel-danger">
									<?php $i=0; foreach ($comments as $comment) {
									if($comment->comment_category == "Program/Project/Activity Profile"){ $i++; ?>
									<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
									<p class="text-justify"><?php echo $comment->comment;?></p>
									
									<?php } } ?>
									
									<?php if($i === 0): 
											echo "0 comment";
										  endif;
									?>
								  </div>
								</div>
                            </div>
                        </div>
						<div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>II. Significance/Relevance Matrix</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Contextual Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <label><?php if(property_exists($specprop, "prelimasschoice_contextdimension")) {  echo $specprop->prelimasschoice_contextdimension[0]; ?></label>
                                    <br>
                                    <?php if($specprop->prelimasschoice_contextdimension[0] == "unit have done preliminary needs assessment"){?>
                                       <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</label>
                                      <?php
                                         
                                        $personinv=count($specprop->unit_personnel_involved);
                                        for ($ps=0; $ps < $personinv; $ps++) { 
                                      ?>
                                   
                                    <ul>
                                      <?php echo '<li>'.$specprop->unit_personnel_involved[$ps];
                                      if($specprop->unit_personnel_involved[$ps] == "others"){ echo ' : '.$specprop->unit_personnel_involved_others;}
                                      echo '</li>';?>
                                    
                                    </ul>
                                    <?php }}?>
                                  </td>
                                </tr>
								
                                <tr>
                                  <td>
                                    <?php if($specprop->prelimasschoice_contextdimension[0] == "with existing verifiable data from the field"){?>
                                    <label><?php echo $specprop->prelimasschoice_contextdimension[0]?></label>
                                    <br>
									<label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</label>
                                    <?php 
                                        $dsarr=count($specprop->data_sources);
                                        for ($d=0; $d < $dsarr; $d++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->data_sources[$d];
                                      if($specprop->data_sources[$d] == "others"){ echo ' : '.$specprop->data_sources_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</label>
                                     <?php 
                                        $toolsusee=count($specprop->tools_used_to_gather);
                                        for ($x=0; $x < $toolsusee; $x++) { 
                                      ?>
                                    <ul>
                                       <?php echo '<li>'.$specprop->tools_used_to_gather[$x];
                                      if($specprop->tools_used_to_gather[$x] == "others"){ echo ' : '.$specprop->tools_used_to_gather_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</label>
                                    <?php 
                                        $ms=count($specprop->means_employed_to_verify);
                                        for ($x=0; $x < $ms; $x++) { 
                                      ?>
                                    <ul>
                                     <?php echo '<li>'.$specprop->means_employed_to_verify[$x];
                                      if($specprop->means_employed_to_verify[$x] == "others"){ echo ' : '.$specprop->means_employed_to_verify_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</label>
                                     <?php 
                                        $ms=count($specprop->who_collected);
                                        for ($x=0; $x < $ms; $x++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->who_collected[$x];
                                      if($specprop->who_collected[$x] == "others"){ echo ' : '.$specprop->who_collected_others;}
                                      echo '</li>';?>
                                    </ul>
                                      <?php }?>
                                    <?php }
                                    elseif ($specprop->prelimasschoice_contextdimension[0] == "without data from the field") {?>
                                     <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Enumerate bases for proposing the P/P/A:</label>
                                     <br/>
                                     <div style="margin-left:10px; margin-right:20px; padding:5px; border: 0.5px solid #C0C0C0;">
                                     <?php echo $specprop->bases_for_proposing_program?>
                                     </div>
                                     <br/>
                                     <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp What are the means employed to ensure the responsiveness of the P/P/A to the local condition?</label>
                                     <br/>
                                     <div style="margin-left:10px; margin-right:20px; padding:5px; border: 0.5px solid #C0C0C0;">
                                     <?php echo $specprop->means_employed_ensure_resposiveness?>
                                     </div>
                                    <?php }?>
                                    <?php } ?>
                                  </td>
                                </tr>								
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Productivity Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                  	<?php if(property_exists($specprop, "productivity_dimension")) { ?>
                                    <?php 
                                        $pd=count($specprop->productivity_dimension);
                                        for ($x=0; $x < $pd; $x++) { 
                                      ?>
                                    <ul>
                                     <?php echo '<li>'.$specprop->productivity_dimension[$x];
                                      if($specprop->productivity_dimension[$x] == "others"){ echo ' : '.$specprop->productivity_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php } } ?>
                                  </td>
                                </tr>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 3rd Part -->
                              <thead>
                                <th class="bg-success">C. Economic Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                  	  <?php if(property_exists($specprop, "economic_dimension")) { ?>
                                      <?php 
                                        $econn=count($specprop->economic_dimension);
                                        for ($x=0; $x < $econn; $x++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->economic_dimension[$x];
                                      if($specprop->economic_dimension[$x] == "employability of partners at"){ echo ' : '.$specprop->economic_dimension_others;}
                                      if($specprop->economic_dimension[$x] == "others"){ echo ' : '.$specprop->economic_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php } } ?>
                                  </td>
                                </tr>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 4th Part -->
                              <thead>
                                <th class="bg-success">D. Social Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <label>The P/P/A will benefit:</label>
                                    <br>
                                      <table class="table table-bordered" width="100%">
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of households: <strong><?php if(property_exists($specprop, "social_dimension_household")){ echo $specprop->social_dimension_household; } ?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of youth (male) <i>[13 to 30 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_youth_male")){ echo $specprop->social_dimension_youth_male; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Local Government Units: <strong><?php if(property_exists($specprop, "social_dimension_local_government_unit")) { echo $specprop->social_dimension_local_government_unit; } ?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. youth (female) <i>[13 to 30 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_youth_female")) echo $specprop->social_dimension_youth_female; ?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Organizations/Associations: <strong><?php if(property_exists($specprop, "social_dimension_organization")){ echo $specprop->social_dimension_organization; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of children (boy) <i>[6 to 12 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_children_boy")) echo $specprop->social_dimension_children_boy; ?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. senior citizens (male) <i>[at least 60 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_senior_citizen_male")) { echo $specprop->social_dimension_senior_citizen_male; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of children (girl) <i>[6 to 12 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_children_girl")){ echo $specprop->social_dimension_children_girl; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of senior citizens (female) <i>[at least 60 years old]</i>:<strong><?php if(property_exists($specprop, "social_dimension_senior_citizen_female")){ echo $specprop->social_dimension_senior_citizen_female; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of infants (boy) <i>[0 to 5 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_infants_boy")){ echo $specprop->social_dimension_infants_boy; } ?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of adults (male) <i>[31 to 59 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_adults_female")){ echo $specprop->social_dimension_adults_female; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of infants (girl) <i>[0 to 5 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_infants_girl")){ echo $specprop->social_dimension_infants_girl; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of adults (female) <i>[31 to 59 years old]</i>: <strong><?php if(property_exists($specprop, "social_dimension_adults_female")){ echo $specprop->social_dimension_adults_female; } ?></strong> 
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <?php if( property_exists($specprop, "social_dimension_others") && isset($specprop->social_dimension_others)):   ?>
                                          <strong><?php echo $specprop->social_dimension_others.":"?></strong> <?php echo $specprop->social_dimension_others_count; ?>
                                        <?php endif;   ?>
                                        </td>
                                      </tr>
                                    </table> 
                       
                                  </td>
                                </tr>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                              <thead>
                                <th class="bg-success">E. Environmental  Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                     <?php
                                        if(property_exists($specprop, "environment_dimension")) {
                                        $envi=count($specprop->environment_dimension);
                                        for ($e=0; $e < $envi; $e++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->environment_dimension[$e];
                                      if($specprop->environment_dimension[$e] == "others"){ echo ' : '.$specprop->environment_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php } } ?>

                                  </td>
                                </tr>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 6th Part -->
                              <thead>
                                <th class="bg-success">F. Governance Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <?php 
                                       if(property_exists($specprop, "government_dimension")) {
                                        $gov=count($specprop->government_dimension);
                                        for ($gg=0; $gg < $gov; $gg++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->government_dimension[$gg];
                                      if($specprop->government_dimension[$gg] == "others"){ echo ' : '.$specprop->government_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php } } ?>
                                  </td>
                                </tr>
                              </tbody>
							</table>
							<button type="button" class="btn btn-xs btn-danger" id="btn-signifmatrix-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment</button>
							<div id="signifmatrix_comment" class="collapse">
							  <div class="panel panel-body panel-danger">

								<?php $i=0; foreach ($comments as $comment) {
								if($comment->comment_category == "Significance/Relevance Matrix"){ $i++; ?>
								<label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
								<p class="text-justify"><?php echo $comment->comment;?></p>
								
								<?php } } ?>
								<?php if($i === 0): 
										echo "0 comment";
									  endif;
								?>
							  </div>
							</div>							
						</div>
                        </div>
						
						  <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>III. Implications to Work hours, Academic Program, and Research</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Practical Counts:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                  <table class="table table-bordered" width="100%">
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of man hours needed to prepare the P/P/A: <strong><?php if(property_exists($specprop, "hours_needed_to_prepare")){ echo $specprop->hours_needed_to_prepare; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of man hours needed to complete the P/P/A: <strong><?php if(property_exists($specprop, "hours_needed_to_complete")) {echo $specprop->hours_needed_to_complete; } ?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of faculty members who will be involved: <strong><?php if(property_exists($specprop, "faculty_members_involved_count")) { echo $specprop->faculty_members_involved_count; } ?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of course-based students who will be involved: <strong><?php if(property_exists($specprop, "course_based_students_involved_count")){ echo $specprop->course_based_students_involved_count; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Student Organization members who will be involved: <strong><?php if(property_exists($specprop, "student_organization_members_involved_count")){ echo $specprop->student_organization_members_involved_count; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of staff who will be involved: <strong><?php if(property_exists($specprop, "staff_involved_count")){ echo $specprop->staff_involved_count; } ?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Information and Education Campaign materials to be produced: <strong><?php if(property_exists($specprop, "campaign_materials_to_produce_count")){ echo $specprop->campaign_materials_to_produce_count; } ?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Information and Education Campaign materials to be improved:<strong><?php if(property_exists($specprop, "campaign_materials_to_improve_count")){ echo $specprop->campaign_materials_to_improve_count; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of curricular programs to be developed: <strong><?php if(property_exists($specprop, "curriculum_programs_to_develop_count")){ echo $specprop->curriculum_programs_to_develop_count; } ?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of curricular programs to be improved: <strong><?php if(property_exists($specprop, "curriculum_programs_to_improve_count")){ echo $specprop->curriculum_programs_to_improve_count; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of proposals to be developed: <strong><?php if(property_exists($specprop, "proposals_to_develop_count")) { echo $specprop->proposals_to_develop_count; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of papers to be presented: <strong><?php if(property_exists($specprop, "papers_presented_count")) { echo $specprop->papers_presented_count; }?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of papers to be published: <strong><?php if(property_exists($specprop, "papers_published_count")) { echo $specprop->papers_published_count; }?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of policies to be advocated: <strong><?php if(property_exists($specprop, "policies_to_advocate_count")){ echo $specprop->policies_to_advocate_count; }?></strong>
                                        </td>
                                      </tr>
                                    </table> 
                                  </td>
                                </tr>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Human Resource Implications:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th colspan="3" class="text-center"><u>PREPARATION</u> OF THE PPA</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td width="30%"></td>
                                          <td class="text-center"><label>Faculty Members</label></td>
                                          <td class="text-center"><label>Students</label></td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->preparation_expertise_needed_faculty_members;?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->preparation_expertise_needed_students;?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify"><?php if(property_exists($specprop, "preparation_roles_faculty_members")){ echo $specprop->preparation_roles_faculty_members; } ?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php if(property_exists($specprop, "preparation_roles_students")){ echo $specprop->preparation_roles_students; } ?></p>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>

                                    <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th colspan="3" class="text-center">IMPLEMENTATION</u> OF THE PPA</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td width="30%"></td>
                                          <td class="text-center"><label>Faculty Members</label></td>
                                          <td class="text-center"><label>Students</label></td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                          <td>
                                            <p class="text-justify"><?php if(property_exists($specprop, "implementation_expertise_needed_faculty_members")) { echo $specprop->implementation_expertise_needed_faculty_members; } ?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php if(property_exists($specprop, "implementation_expertise_needed_students")){ echo $specprop->implementation_expertise_needed_students; }?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify"><?php if(property_exists($specprop, "implementation_roles_faculty_members")){ echo $specprop->implementation_roles_faculty_members; }?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php if(property_exists($specprop, "implementation_roles_students")){ echo $specprop->implementation_roles_students; }?></p>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
							<button type="button" class="btn btn-xs btn-danger" id="btn-implic-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment</button>
						  <div id="implic_comment" class="collapse">
							<div class="panel panel-body panel-danger">
								<?php $i=0; foreach ($comments as $comment) {
								if($comment->comment_category == "Implications to Work hours, Academic Program, and Research"){  $i++; ?>
								<label class="text-danger"><?php echo $comment->firstname;?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
								<p class="text-justify"><?php echo $comment->comment;?></p>
                            
								<?php } } ?>
								<?php if($i === 0): 
										echo "0 comment";
									  endif;
								?>
							</div>
						  
						  </div>
                          </div>
						  
                        </div>
						
						
						<div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>V. Partnership and Linkage Profile</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">Nature of Linkage/Partnership: <em>please specify:</em></th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <?php if (property_exists($specprop, "nature_of_linkage") && isset($specprop->nature_of_linkage) && $specprop->nature_of_linkage === "1") { ?>
									<p><?php echo "with Memorandum of Understanding / Memorandum of Agreement";   ?></p>
                                    <label>Date Signed:</label> <u><?php if (property_exists($specprop, "date_signed") )echo $specprop->date_signed; ?></u>
                                    <br>
                                    <label>Signatories for USC:</label> <u><?php if (property_exists($specprop, "signatories_for_usc")) echo $specprop->signatories_for_usc; ?></u>
                                    <br>
                                    <label>Signatories for Partner:</label> <u><?php if(property_exists($specprop, "signatories_for_partner")) echo $specprop->signatories_for_partner;?></u>
                                    <br>
                                    <label>Enumerate the Major duties of USC/Unit:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php if(property_exists($specprop, "major_duties_of_usc_unit")) echo $specprop->major_duties_of_usc_unit;?></p>
                                    </div>
                                    <label>Enumerate the Major duties of Partner/s:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php if(property_exists($specprop, "major_duties_of_partner")) echo $specprop->major_duties_of_partner;?></p>
                                    </div>
                                  <?php } elseif ( property_exists($specprop, "nature_of_linkage") && isset($specprop->nature_of_linkage) && $specprop->nature_of_linkage === "0") {?>
								     <p><?php echo "without memorandum of understanding/memorandum of agreement"?></p>
                                     <label>Since when is the linkage:</label> <u><?php if(property_exists($specprop, "date_linkage_started")) echo $specprop->date_linkage_started;?></u>
                                    <br>
                                    <label>Who initiated the linkage:</label> <u><?php  if(property_exists($specprop, "who_initiated_linkage")) echo $specprop->who_initiated_linkage;?></u>
                                    <br>
                                    
                                    <label>Enumerate the activities already done:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php if(property_exists($specprop, "activities_done"))  echo $specprop->activities_done; }?></p>
                                    </div>


                                    <label>Enumerate the opportunities identified:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php if(property_exists($specprop, "opportunities_identified")) echo $specprop->opportunities_identified;?></p>
                                    </div>
                                    <label>Enumerate the challenges/problems encountered:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php if(property_exists($specprop, "challenges_encountered")) echo $specprop->challenges_encountered;?></p>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
							<button type="button" class="btn btn-xs btn-danger" id="btn-linksprof-comment"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment </button>
                        <div id="linksprof_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                            <?php $i=0; foreach ($comments as $comment) {
                            if($comment->comment_category == "Partnership and Linkage Profile"){ $i++; ?>
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>
                            
                            <?php } } ?>
							<?php if($i === 0): 
									echo "0 comment";
								  endif;
							?>
                          </div>
                        </div>
                          </div>
                        </div>
						
					</div>
					<?php } ?>
				</div>
            </div><!-- container fluid -->

            
        </div> <!-- page content wrapper -->
            <?php include('application/views/footer.php');?>
             
    </div><!--  wrapper -->

    

<!-- FOR Printing Form -->
     <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
  }

    </script>

  
    
    <!-- COMMENTS AREA MINIMIZE -->
    <script>
$(".btn-minimize").click(function(){
    $(this).toggleClass('btn-plus');
    $(".detailBox").slideToggle();
  });
$("#btn-rationale").click(function(){
	$(this).toggleClass('btn-plus');
	$("#rationale_comment").slideToggle();
});
 
$("#btn-goals-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#goals_comment").slideToggle();
}); 
$("#btn-participants-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#participants_comment").slideToggle();
}); 
$("#btn-actoutline-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#actoutline_comment").slideToggle();
}); 
$("#btn-budreq-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#budreq_comment").slideToggle();
}); 
$("#btn-progprofile-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#progprofile_comment").slideToggle();
}); 
$("#btn-signifmatrix-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#signifmatrix_comment").slideToggle();
}); 
$("#btn-implic-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#implic_comment").slideToggle();
});
$("#btn-linksprof-comment").click(function(){
	$(this).toggleClass('btn-plus');
	$("#linksprof_comment").slideToggle();
}); 

if($(".wawa").length == 0){
	$(".animal").remove();
}
    </script>

</body>

</html>
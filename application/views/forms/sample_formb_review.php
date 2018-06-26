
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
                                    <th class="bg-success">A. College/School/Department/Unit Responsible</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                      <?php
                                      if(property_exists($specprop,"unit_responsible")):
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
                                  <?php endif; ?>
                                      </td>
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
                                          <li> <?php if(property_exists($specprop,"term")):  echo $specprop->term." ". $specprop->semester;?>
												<?php if(property_exists("specprop","semester") && $specprop->semester === "others") { echo " ". $specprop->semester_others; } ?>
                                              <?php endif; ?>
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
									  <?php if(isset($specprop->nature_of_the_program)) {  ?>
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
									  <?php if(isset($specprop->program_area)) {  ?>
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
                          <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>6. Program/Project/Activity Profile</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="ppaprof_area">
                                        <option value="5">5 - Completely filled-in</option>
                                        <option value="4">4 - Filled-in</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Unfilled</option>
                                        <option value="1">1 - Totally unfilled</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="ppaprof_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>

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
                                    <?php if(property_exists($specprop,"prelimasschoice_contextdimension")): ?>
                                    <label><?php echo $specprop->prelimasschoice_contextdimension[0]?></label>
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
                                    <?php }} ?>

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
                                  </td>
                                </tr>
                            <?php endif;// endif for checking if property_exists for context Dimension ?>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Productivity Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                      <?php if(property_exists($specprop,"productivity_dimension")): ?>
                                    <?php
                                        $pd=count($specprop->productivity_dimension);
                                        for ($x=0; $x < $pd; $x++) {
                                      ?>
                                    <ul>
                                     <?php echo '<li>'.$specprop->productivity_dimension[$x];
                                      if($specprop->productivity_dimension[$x] == "others"){ echo ' : '.$specprop->productivity_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                <?php endif; ?>
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
                                      <?php if(property_exists($specprop,"economic_dimension")): ?>
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
                                    <?php } ?>
                                <?php endif; ?>
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
                                          No. of households: <strong><?php echo $specprop->social_dimension_household?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of youth (male) <i>[13 to 30 years old]</i>: <strong><?php echo $specprop->social_dimension_youth_male?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Local Government Units: <strong><?php echo $specprop->social_dimension_local_government_unit?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. youth (female) <i>[13 to 30 years old]</i>: <strong><?php echo $specprop->social_dimension_youth_female?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Organizations/Associations: <strong><?php echo $specprop->social_dimension_organization?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of children (boy) <i>[6 to 12 years old]</i>: <strong><?php echo $specprop->social_dimension_children_boy?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. senior citizens (male) <i>[at least 60 years old]</i>: <strong><?php echo $specprop->social_dimension_senior_citizen_male?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of children (girl) <i>[6 to 12 years old]</i>: <strong><?php echo $specprop->social_dimension_children_girl?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of senior citizens (female) <i>[at least 60 years old]</i>:<strong><?php echo $specprop->social_dimension_senior_citizen_female?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of infants (boy) <i>[0 to 5 years old]</i>: <strong><?php echo $specprop->social_dimension_infants_boy?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of adults (male) <i>[31 to 59 years old]</i>: <strong><?php echo $specprop->social_dimension_adults_female?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of infants (girl) <i>[0 to 5 years old]</i>: <strong><?php echo $specprop->social_dimension_infants_girl?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of adults (female) <i>[31 to 59 years old]</i>: <strong><?php echo $specprop->social_dimension_adults_female?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <?php if(isset($specprop->social_dimension_others)):   ?>
                                          <strong><?php echo $specprop->social_dimension_others.":"?></strong> <?php echo $specprop->social_dimension_others_count?>
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
                                      <?php if(property_exists($specprop,"environment_dimension")): ?>
                                     <?php
                                        $envi=count($specprop->environment_dimension);
                                        for ($e=0; $e < $envi; $e++) {
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->environment_dimension[$e];
                                      if($specprop->environment_dimension[$e] == "others"){ echo ' : '.$specprop->environment_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php } ?>
                                <?php endif; ?>
                                  </td>
                                </tr>
                              </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 6th Part -->
                              <thead>
                                <th class="bg-success">F. Governance Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <?php if(property_exists($specprop,"government_dimension")): ?>
                                  <td>
                                    <?php
                                        $gov=count($specprop->government_dimension);
                                        for ($gg=0; $gg < $gov; $gg++) {
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$specprop->government_dimension[$gg];
                                      if($specprop->government_dimension[$gg] == "others"){ echo ' : '.$specprop->government_dimension_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                <?php endif; ?>
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
                        <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>7. Significance/Relevance Matrix</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="signifmatrix_area">
                                        <option value="5">5 - Absolutely Significant</option>
                                        <option value="4">4 - Significant</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Insignificant</option>
                                        <option value="1">1 - Absolutely insignificant</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="signifmatrix_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>
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
                                          No. of man hours needed to prepare the P/P/A: <strong><?php echo $specprop->hours_needed_to_prepare;?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of man hours needed to complete the P/P/A: <strong><?php echo $specprop->hours_needed_to_complete;?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of faculty members who will be involved: <strong><?php echo $specprop->faculty_members_involved_count;?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of course-based students who will be involved: <strong><?php echo $specprop->course_based_students_involved_count;?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Student Organization members who will be involved: <strong><?php echo $specprop->student_organization_members_involved_count;?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of staff who will be involved: <strong><?php echo $specprop->staff_involved_count;?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Information and Education Campaign materials to be produced: <strong><?php echo $specprop->campaign_materials_to_produce_count?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of Information and Education Campaign materials to be improved:<strong><?php echo $specprop->campaign_materials_to_improve_count;?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of curricular programs to be developed: <strong><?php echo $specprop->curriculum_programs_to_develop_count; ?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of curricular programs to be improved: <strong><?php echo $specprop->curriculum_programs_to_improve_count;?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of proposals to be developed: <strong><?php echo $specprop->proposals_to_develop_count;?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of papers to be presented: <strong><?php echo $specprop->papers_presented_count;?></strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of papers to be published: <strong><?php echo $specprop->papers_published_count;?></strong>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          No. of policies to be advocated: <strong><?php echo $specprop->policies_to_advocate_count;?></strong>
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
                                            <p class="text-justify"><?php echo $specprop->preparation_roles_faculty_members;?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->preparation_roles_students;?></p>
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
                                            <p class="text-justify"><?php echo $specprop->implementation_expertise_needed_faculty_members; ?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->implementation_expertise_needed_students; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->implementation_roles_faculty_members;?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->implementation_roles_students;?></p>
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

                        <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>8. Implications to Work hours, Academic Program, and Research</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="implics_area">
                                        <option value="5">5 - Absolutely Appropriate</option>
                                        <option value="4">4 - Appropriate</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Inappropriate</option>
                                        <option value="1">1 - Absolutely Inappropriate</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="implics_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>

                         <!-- Institutional and Support Part gidelete for the meantime diri-->

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
                                    <?php if (isset($specprop->nature_of_linkage) && $specprop->nature_of_linkage === "1") { ?>
									<p><?php echo "with Memorandum of Understanding / Memorandum of Agreement";   ?></p>
                                    <label>Date Signed:</label> <u><?php echo $specprop->date_signed?></u>
                                    <br>
                                    <label>Signatories for USC:</label> <u><?php echo $specprop->signatories_for_usc;?></u>
                                    <br>
                                    <label>Signatories for Partner:</label> <u><?php echo $specprop->signatories_for_partner;?></u>
                                    <br>
                                    <label>Enumerate the Major duties of USC/Unit:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->major_duties_of_usc_unit;?></p>
                                    </div>
                                    <label>Enumerate the Major duties of Partner/s:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->major_duties_of_partner;?></p>
                                    </div>
                                  <?php } elseif (isset($specprop->nature_of_linkage) && $specprop->nature_of_linkage === "0") {?>
								     <p><?php echo "without memorandum of understanding/memorandum of agreement"?></p>
                                     <label>Since when is the linkage:</label> <u><?php echo $specprop->date_linkage_started;?></u>
                                    <br>
                                    <label>Who initiated the linkage:</label> <u><?php echo $specprop->who_initiated_linkage;?></u>
                                    <br>

                                    <label>Enumerate the activities already done:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->activities_done; }?></p>
                                    </div>


                                    <label>Enumerate the opportunities identified:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->opportunities_identified;?></p>
                                    </div>
                                    <label>Enumerate the challenges/problems encountered:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->challenges_encountered;?></p>
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
                        <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>9. Partnership and Linkage Profile</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="linkageprof_area">
                                        <option value="5">5 - Perfectly Acceptable</option>
                                        <option value="4">4 - Acceptable</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Unacceptable</option>
                                        <option value="1">1 - Totally Unacceptable</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="linkageprof_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>

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

                    <?php if($specprop->form_type != '1' && $specprop->form_type != '2'): ?>
                    <?php include('sample_formc_review.php');?>
                    <?php endif; ?>
                    <div>
                        <h1>USC-CES FORM A <small>CES Program/Project/Activity Proposal (<u>Concept Note</u>)</small></h1>
                        <hr>
<?php echo form_open('Director/addScores');?>
                        <div class="panel" align="center" >
                            <div class="panel-body"><p>
                                  <h2><?php echo $specprop->title;?><!-- Barangay Labangon River Clean-up <span class="badge">revised</span> --></h2>
                                  <h3><?php echo $specprop->school;?><!-- School of Arts & Sciences --></h3>
                                  <h4><?php echo $specprop->department;?><!-- Computer and Information Sciences --></h4>
                                  <h5><?php echo $specprop->venue;?><!-- Barangay Talamban, Cebu City --></h5>

                                  <h5><?php echo date('F jS, Y',strtotime($specprop->inclusive_date1));?> to <?php echo date('F jS, Y',strtotime($specprop->inclusive_date2));?><!-- December 25, 2015 --></h5>

                                </p>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->

                        <input type="hidden" name="proposal_id" value="<?php echo $id;?>">
                         <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                      <input type="hidden" name="user_designation" value="<?php echo $role;?>">
                      <input type="hidden" name="reviewer_1" value="<?php echo $reviewer1;?>">
                       <input type="hidden" name="reviewer_2" value="<?php echo $reviewer2;?>">
					   <input type="hidden" name="review_id" value="<?php echo $review_id;?>">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Rationale and Contextualization</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->rationale_and_contextualization;?></p>
                            </div>
							<button type="button" class="btn btn-xs btn-danger" id="btn-rationale"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment&nbsp;&nbsp;<span class="badge"></span></button>
                        <div id="rationale_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                          <?php foreach ($comments as $comment) {
                            if($comment->comment_category == "Rationale and Contextualization"){?>
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>

                            <?php } }?>
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
                                    <td width="30%"><label>1. Rationale and Contextualization</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="rationale_area">
                                        <option value="5">5 - Essential</option>
                                        <option value="4">4 - High Priority</option>
                                        <option value="3">3 - Medium Priority</option>
                                        <option value="2">2 - Low Priority</option>
                                        <option value="1">1 - Not A Priority</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="rationale_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Goal, Objectives, and Outcomes</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->goal_objectives_and_outcomes;?></p>
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
                        <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>2. Goal, Objectives, and Outcomes</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="goals_area">
                                        <option value="5">5 - Very Desirable</option>
                                        <option value="4">4 - Desirable</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Undesirable</option>
                                        <option value="1">1 - Very undesirable</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="goals_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->participants_partners_and_beneficiaries;?></p>
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
                        <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>3. Participants, Partners and Beneficiaries</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="participants_area">
                                        <option value="5">5 - Absolutely Appropriate</option>
                                        <option value="4">4 - Appropriate</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Inappropriate</option>
                                        <option value="1">1 - Absolutely Inappropriate</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="participants_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>
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
											<?php for($i= 0; $i < count($specprop->tentative_date);$i++){?>
												<tr>
												<td><?php echo $specprop->tentative_date[$i]?></td>
												<td><?php echo $specprop->activities[$i]?></td>
												<td><?php echo $specprop->participants_needed[$i]?></td>
												<td><?php echo $specprop->persons_incharge[$i]?></td>
												</tr>
											<?php }?>
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
                        <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>4. Outline of Activities</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="outlines_area">
                                        <option value="5">5 - Absolutely Appropriate</option>
                                        <option value="4">4 - Appropriate</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Inappropriate</option>
                                        <option value="1">1 - Absolutely Inappropriate</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="outlines_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>

                        </div><div class="panel panel-primary">
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
                                    <?php if(property_exists("specprop","a_particulars")): ?>
									<?php for($i= 0; $i < count($specprop->a_particulars);$i++){?>
											<tr>
												<td><?php echo $specprop->a_particulars[$i]?></td>
												<td><?php echo $specprop->a_frequency[$i]?></td>
												<td><?php echo $specprop->a_quantity[$i]?></td>
												<td><?php echo $specprop->a_amount[$i]?></td>
												<td><?php echo $specprop->a_subtotal[$i]?></td>
											</tr>
									<?php }?>
                                <?php endif;?>
                                  </tbody>
								  <thead>
                                      <th colspan="5" class="bg-success">B. Transportation</th>
                                  </thead>
                                  <tbody>
                                     <?php if(property_exists("specprop","b_particulars")): ?>
									<?php if(isset($specprop->b_particulars)){ for($i= 0; $i < count($specprop->b_particulars);$i++){?>
											<tr>
												<td><?php echo $specprop->b_particulars[$i]?></td>
												<td><?php echo $specprop->b_frequency[$i]?></td>
												<td><?php echo $specprop->b_quantity[$i]?></td>
												<td><?php echo $specprop->b_amount[$i]?></td>
												<td><?php echo $specprop->b_subtotal[$i]?></td>
											</tr>
									<?php } ?>
									<?php }?>
                                <?php endif; ?>
                                  </tbody>
								  <thead>
                                      <th colspan="5" class="bg-success">C. Materials</th>
                                  </thead>
                                  <tbody>
									<?php if(isset($specprop->c_particulars)){ for($i= 0; $i < count($specprop->b_particulars);$i++){?>
											<tr>
												<td><?php echo $specprop->c_particulars[$i]?></td>
												<td><?php echo $specprop->c_frequency[$i]?></td>
												<td><?php echo $specprop->c_quantity[$i]?></td>
												<td><?php echo $specprop->c_amount[$i]?></td>
												<td><?php echo $specprop->c_subtotal[$i]?></td>
											</tr>
									<?php } ?>
									<?php }?>
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
                    </div>
                    <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>5. Budgetary Requirements</label></td>
                                    <td width="25%">
                                      <select class="form-control" name="budreq_area">
                                        <option value="5">5 - Perfectly Acceptable</option>
                                        <option value="4">4 - Acceptable</option>
                                        <option value="3">3 - Neutral</option>
                                        <option value="2">2 - Unacceptable</option>
                                        <option value="1">1 - Totally Unacceptable</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" name="budreq_remarks" rows="3" placeholder="Type Here..." ></textarea></td>
                                  </tr>

                                </tbody>
                              </table>
                               <?php if($specprop->form_type != 'c' && ($specprop->form_type != 'a'&& $specprop->form_type != 'b')==TRUE ): ?>
                               <?php include('sample_formb_review.php');?>
                               <?php endif; ?>
                            <div style="float:right; width: 50%;">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_b"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> &nbsp;SUBMIT SCORES </button>
                            </div>
                           <?php echo form_close();?>
                        <?php include('application/views/footer.php');?>
                  </div> <!-- iya open is above USC-CES FORM A na h1 -->









              </div> <!-- rowtab content -->

            </div><!-- container fluid -->


        </div> <!-- page content wrapper -->

    </div><!--  wrapper -->








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

    </script>










</body>

</html>

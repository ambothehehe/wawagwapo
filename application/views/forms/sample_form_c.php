<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Form C and Form A</title>
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

                  <h1>USC-CES FORM C <small>CES Program/Project/Activity Proposal (<u>for Requests</u>)</small></h1>
                  <hr>

                    <div class="panel" align="center" >
                      
                      <div class="panel panel-primary">
                        <div class="panel-body">
                          <p>
                            <h2><?php if(property_exists($specprop,"title")){ echo $specprop->title; } ?><!-- Barangay Labangon River Clean-up --></h2>
                            <h3><?php if(property_exists($specprop,"school")){ echo $specprop->school; } ?><!-- School of Arts & Sciences --></h3>
                            <h4><?php if(property_exists($specprop,"department")){ echo $specprop->department; } ?><!-- Computer and Information Sciences --></h4>
                            <h5><?php if(property_exists($specprop,"venue")){ echo $specprop->venue; } ?><!-- Barangay Talamban, Cebu City --></h5>
                            
                            <h5><?php if(property_exists($specprop,"inclusive_date1")){ echo date('F jS, Y',strtotime($specprop->inclusive_date1)); } ?> to <?php echo date('F jS, Y',strtotime($specprop->inclusive_date2));?><!-- December 25, 2015 --></h5>
                          </p>
                        </div> <!-- panel-body -->

                        <div class="panel-heading">
                            <h4>I. Program/Project/Activity Profile</h4>
                        </div> <!-- panel-heading -->
                          
                          <div class="panel-body">
                            <table class="table table-bordered">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Requester</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <?php if(property_exists($specprop,"requester") && isset($specprop->requester)) {  ?>
                                      <ul>
                                        <?php for($i = 0; $i < count($specprop->requester);$i++){ ?>
                                                          
                                          <li><?php echo $specprop->requester[$i];?>
                                              <?php if($specprop->requester[$i] === "community"){ 
                                                echo '-'.$specprop->communities;
                                              }else if($specprop->requester[$i] === "organization"){
                                                echo '-'.$specprop->organization;
                                              }else if($specprop->requester[$i] === "institution"){
                                                echo '-'.$specprop->institution;
                                              }else if($specprop->requester[$i] === "unit_from_usc"){
                                                echo '-'.$specprop->unit_from_usc;
                                                 for($ur = 0; $ur < count($specprop->unit_from_usc); $ur++) {
                                                    if($specprop->unit_from_usc[$ur] === "school_of_arts_and_sciences"){
                                                      echo '-'.$specprop->school_of_arts_and_sciences;
                                                    }else if($specprop->unit_from_usc[$ur] === "school of architecture, fine arts and design"){
                                                      echo '-'.$specprop->school_of_architecture_fine_arts_and_design;
                                                    }else if($specprop->unit_from_usc[$ur] === "school of education"){
                                                      echo '-'.$specprop->school_of_education;
                                                    }else if($specprop->unit_from_usc[$ur] === "school of engineering"){
                                                      echo '-'.$specprop->school_of_engineering;
                                                    }else if($specprop->unit_from_usc[$ur] === "school of business and economics"){
                                                      echo '-'.$specprop->school_of_business_economics;
                                                    }else if($specprop->unit_from_usc[$ur] === "school of health care profession"){
                                                      echo '-'.$specprop->school_of_health_care_profession;
                                                    }else if($specprop->unit_from_usc[$ur] === "school of law and governance"){
                                                      echo '-'.$specprop->school_of_law_and_governance;
                                                    }else if($specprop->unit_from_usc[$ur] === "support unit"){
                                                      echo '-'.$specprop->support_unit;
                                                    }
                                                 }
                                              }  ?>
                                          </li>
                                          <?php } } ?>
                                      
                                      </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Mode of request</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <?php if(property_exists($specprop,"mode_of_request") && isset($specprop->mode_of_request)) {  ?>
                                    <ul>
                                    <?php for($i = 0; $i < count($specprop->mode_of_request);$i++){ ?>
                                                        
                                        <li><?php echo $specprop->mode_of_request[$i];?>
                                            
                                    <?php } } ?>
                                    </li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                              <thead>
                                <th class="bg-success">C. Nature of the Program/Project/Activity</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <?php if(property_exists($specprop,"nature_of_the_program") && isset($specprop->nature_of_the_program)) {  ?>
                                    <ul>
                                    <?php for($i = 0; $i < count($specprop->nature_of_the_program);$i++){ ?>
                                                        
                                        <li><?php echo $specprop->nature_of_the_program[$i];?>
                                          <?php if($specprop->nature_of_the_program[$i] === "others_nature"){ 
                                            echo $specprop->others_nature;
                                          }  ?>
                                           </li> 
                                    <?php } } ?>
                                  </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                              <thead>
                                <th class="bg-success"> D. Program Area</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <?php if(property_exists($specprop,"program_area") && isset($specprop->program_area)) {  ?>
                                    <ul>
                                    <?php for($i = 0; $i < count($specprop->program_area);$i++){ ?>
                                                        
                                        <li><?php echo $specprop->program_area[$i];?></li> 
                                    <?php } } ?>
                                  </ul>
                                  </td>
                                </tr>
                              </tbody>
                              </table>
                              <button type="button" class="btn btn-xs btn-danger" id="btn-requester-comm"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment</button>
                                <div id="requester_comment" class="collapse">
                                  <div class="panel panel-body panel-danger">
                                    <?php $i=0; foreach ($comments as $comment) {  
                                      if($comment->comment_category == "Program/Project/Activity Profile"){ $i++; ?>
                                        <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                                        <p class="text-justify"><?php echo $comment->comment;?></p>
                                      <?php } } ?>
                                      <?php if($i === 0): 
                                          echo "No comments to show";
                                          endif;
                                      ?>
                                    </div>
                                  </div>
                                </div> <!-- panel-body -->
                              </div> <!-- panel-primary -->
                          

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Rationale and Contextualization</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                  <p class="text-justify"><?php if(property_exists($specprop,"rationale_and_contextualization")){ echo $specprop->rationale_and_contextualization; } ?></p>
                                  <button type="button" class="btn btn-xs btn-danger" id="btn-rationale"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment&nbsp;&nbsp;<span class="badge"></span></button>
                                </div>
                            </div>
                            <div id="rationale_comment" class="collapse">
                              <div class="panel panel-body panel-danger">
                              <?php $i = 0; foreach ($comments as $comment) {
                              if($comment->comment_category == "Rationale and Contextualization"){ $i++;  ?>
                              <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                              <p class="text-justify"><?php echo $comment->comment;?></p>
                              
                              <?php } }?>
                              <?php if($i === 0): 
                                  echo "No comments to show";
                                  endif;
                              ?>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Goal, Objectives, and Outcomes</h4>
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
                                  echo "No comments to show";
                                  endif;
                                ?>
                                </div>
                              </div>
                            </div>
                          </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>IV. Participants, Partners and Beneficiaries</h4>
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
                                  echo "No comments to show";
                                  endif;
                                ?>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Outline of Activities</h4>
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
                                  echo "No comments to show";
                                  endif;
                                  ?>
                                
                                </div>
                              </div>                    
                            </div>
                        </div>

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h4>II. Budgetary Requirements</h4>
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
                                    echo "No comments to show";
                                    endif;
                                  ?>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

            <!-- Exit Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="exit">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure you want cancel creating the proposal? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="create_proposal.php" style="text-decoration:none">
                        <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php include('application/views/footer.php');?>

                             <?php if($role === "Department Chair" || $role === "Coordinator" || $role === "School Dean"){?>
                 <div class="detailBox" style="right:0; bottom:0;float:right; position:fixed; background-color:#F3F2F2; margin:2px;">
                
                <div class="commentBox">            
                    <p class="taskDescription">Choose a specific part and type in your comments and suggestions for the proposal</p>
                </div>
                <div class="actionBox">
                        <?php echo form_open('Proposals/save_addComs_C');
                        ?>
                        
                          <form class="form-inline" role="form">
                              <div class="form-group">
                              <input type="hidden" name="user_id" value="<?php echo $user_id?>">
                              <input type="hidden" name="prop_id" value="<?php echo $id?>">
                              </div>
                              <div class="form-group">
                              <select class="form-control" NAME="comment_category">

                                <option class = "animal" disabled>--Form C--</option>
                                <option class = "animal" value="Program/Project/Activity Profile">I. Program/Project/Activity Profile</option>

                                <option disabled>--Form A--</option>
                                <option value="Rationale and Contextualization">I. Rationale and Contextualization</option>
                                <option value="Goal, Objectives, and Outcomes">II. Goal, Objectives, and Outcomes</option>
                                <option value="Participants, Partners and Beneficiaries">III. Participants, Partners and Beneficiaries</option>
                                <option value="Outline of Activities">IV. Outline of Activities</option>
                                <option value="Budgetary Requirements">V. Budgetary Requirements</option>
                              
                             </select>
                             <br>
                                  <textarea class="form-control boxsize" type="text" placeholder="Your comments" name="commentbox" value="" required></textarea>
                              </div>
                              <div class="form-group">
                                  <button class="btn btn-info" name="commentsubmit" id="commentsubmit">Add</button>
                              </div>
                      <?php echo form_close();?>
                </div>
              </div>
        
        
        <?php }?>
        </div> <!-- wrapper -->
<div style="position:fixed; top:8%; right:2%; ">
 <?php if($role == "Department Chair") { ?>
    <div style="float:left; padding:2px; padding-top:10px;">
    <?php echo form_open('Proposals/chairNotesProp');
    ?>
    <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">

    <button type="submit" class="btn btn-danger btn-md" name="note" value="ReturnProposal"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>&nbsp Return to Proponent</button>

    <button type="submit" class="btn btn-primary btn-md" name="note" value="ProceedProposal">Proceed to Coordinator&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>

    <?php form_close();?>
    </div>
 <?php } else if($role == "Coordinator") { ?>
    <div style="float:left; padding:2px; padding-top:10px;">
      <?php echo form_open('Proposals/coordRecommendsProp');?>
      <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
      <button type="submit" class="btn btn-danger btn-md" name="recommend" value="ReturnProposal"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>&nbsp Return to Proponent</button>
      <button type="submit" class="btn btn-primary btn-md" name="recommend" value="ProceedProposal">Endorse to Dean&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
      <?php form_close();?>
        </div>
 
 <?php } else if($role == "School Dean") { ?>
    <div style="float:left; padding:2px; padding-top:10px;">
      <?php echo form_open('Proposals/deanEndorseProp');?>
      <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
      <button type="submit" class="btn btn-danger btn-md" name="recommend" value="ReturnProposal"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>&nbsp Return to Proponent</button>
      <button type="submit" class="btn btn-primary btn-md" name="recommend" value="ProceedProposal">Endorse to Director&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
      <?php form_close();?>
        </div>
 
 <?php } else if($role == "CES Director" ) { ?>
      <div style="float:left; padding:2px; padding-top:10px;"> 
      
      <?php form_close();?>
      <?php if(intval($proposal[0]->status) < 10):?>
                <a href="<?php echo base_url() ?>index.php/Director/choose_review_committee/<?php echo $id; ?>" style="text-decoration:none">
                 <button type="button" class="btn btn-success btn-block btn-lg">Choose Review Committee&nbsp <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                </a>
      <?php endif;?>
            </div>
 <?php } else if($role == "Vice-President for Academic Affairs") { ?>
    <?php if($proposal[0]->status == "11"):  ?>
    <div style="float:left; padding:2px; padding-top:10px;">
      <?php echo form_open('Proposals/vpaaApproveProp');?>
      <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
      <button type="submit" class="btn btn-danger btn-md" name="recommend" value="ReturnProposal"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>&nbsp Return to Proponent</button>
      <button type="submit" class="btn btn-primary btn-md" name="recommend" value="ProceedProposal">Approve Proposal&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
      <?php form_close();?>
        </div>
    <?php endif;?>
 
 <?php } ?>
 
</div>    
   
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
    <!-- Comment Area Minimize -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
$("#btn-requester-comm").click(function(){
  $(this).toggleClass('btn-plus');
  $("#requester_comment").slideToggle();
});
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
    </script>

    <!-- Datepicker Script -->
    <script type="text/javascript">
      $('.datepicker').datepicker({
        todayBtn: "linked"
      });
    </script>

</body>

</html>
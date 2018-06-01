

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
                                                echo '-'.$specprop->community;
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
                              <table class="table table-bordered" style="background: #FFA500; ">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>1. Program/Project/Activity Profile</label></td>
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
                            </div>

    
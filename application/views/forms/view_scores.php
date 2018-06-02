<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Review Scores</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

        <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>

            <div class="row" style="padding-top:25px;">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Assessment Forms</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">

               

                    <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4><span class="glyphicon glyphicon-list-alt"></span>&nbsp 
                            
                               <a href="<?php echo base_url() ?>/Proposals/view_proposal_content/<?php echo $proposal[0]->proposal_id; ?>"><b><?php echo $specprop->title?></b></a>
                            Scores</h4>
                          </div>
                          <div class="panel-body">
                          
                           
                    
               
                              <div class="alert-danger text-center col-lg-4 col-md-4 col-sm-12 col-xs-12"><strong>below 59%:</strong> Disapproved</div>
                              <div class="alert-warning text-center col-lg-4 col-md-4 col-sm-12 col-xs-12"><strong>60% to 80%:</strong> Approved with Major Refinements</div>
                              <div class="alert-success text-center col-lg-4 col-md-4 col-sm-12 col-xs-12"><strong>81% to 95%:</strong> Approved with Minor Refinements</div>

                              <?php if(empty($allscores)) {?>
                            <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Review Scores ---</em></td>
                            </tr>
                            </tbody>
                            </table>
                        <?php } else{ ?>

 <?php $x=0; $y=0; $c=0;
 foreach($allscores as $scores){?>

                              <input type="text" name="assessor" class="form-control" value="<?php echo $scores->firstname.'&nbsp;'.$scores->lastname ?>" readonly>
                              <table class="table table-bordered table-hover">
                                <thead>
                                  <th></th>
                                  <?php if(!empty($scores->progpro_c)): ?>
                                  <th class="text-center">I</th>
                                  <th class="text-center">Initial Percentage (Form C)</th>
                                <?php endif; ?>
                                  <th class="text-center">I</th>
                                  <th class="text-center">II</th>
                                  <th class="text-center">III</th>
                                  <th class="text-center">IV</th>
                                  <th class="text-center">V</th>
                                  <th class="text-center">Initial Percentage (Form A)</th>
                                  <?php if(!empty($scores->ppaprof_area)): ?>
                                  <th class="text-center">I</th>
                                  <th class="text-center">II</th>
                                  <th class="text-center">III</th>
                                  <th class="text-center">IV</th>
                                  <th class="text-center">Initial Percentage (Form B)</th>
                                <?php endif; ?>
                                </thead>
                                <tbody>
                                 <tr>
                                 <td>Tally of Scores</td>
                                 <?php if(!empty($scores->progpro_c)): ?>
                                 <td class="text-center"><?php echo $scores->progpro_c;?> </td>
                                  <td class="text-center"><?php echo $scores->total_percentage_formc;?>%</td>
                                  <?php endif;?>                                  
                                    <td class="text-center"><?php echo $scores->rationale_area;?> </td>
                                  <td class="text-center"><?php echo $scores->goals_area;?></td>
                                  <td class="text-center"><?php echo $scores->participants_area;?></td>
                                  <td class="text-center"><?php echo $scores->outlines_area;?></td>
                                  <td class="text-center"><?php echo $scores->budreq_area;?></td>
                                  <td class="text-center"><?php echo $scores->total_percentage_forma;?>%</td>
                                  <?php if(!empty($scores->ppaprof_area)): ?>
                                  <td class="text-center"><?php echo $scores->ppaprof_area;?></td>
                                  <td class="text-center"><?php echo $scores->signifmatrix_area;?></td>
                                  <td class="text-center"><?php echo $scores->implics_area;?></td>
                                  <td class="text-center"><?php echo $scores->linkageprof_area;?></td>
                                  <td class="text-center"><?php echo $scores->total_percentage_formb;?>%</td>
                                <?php endif;?>
                                 </tr>
                                </tbody>
                              </table>
                              <?php  
								  $x += $scores->total_percentage_forma;
								  $ave_x = $x/2;
								  $total_xx= number_format((float)$ave_x, 2, '.', '');

                  if(!empty($scores->ppaprof_area)):
								  $y += $scores->total_percentage_formb;
								  $ave_y = $y/2;
								  $total_yy= number_format((float)$ave_y, 2, '.', '');
                  endif;

                  if(!empty($scores->progpro_c)):
                  $c += $scores->total_percentage_formc;
                  $ave_c = $c/2;
                  $total_cc= number_format((float)$ave_c, 2, '.', '');
                  endif;


                              ?>

                        <?php }?> <!-- close sa foreach $scores -->


                        <div>
                            
                            <?php if(!empty($scores->progpro_c)): ?>
                            <?php if($total_cc<60.00){?>
                            <div style="padding:10px; background:#ff8e88;">
                            <?php } elseif($total_cc>59.00 && $total_cc<81.00){?>
                            <div style="padding:10px; background:#ffff99;">
                            <?php } else{?>
                            <div style="padding:10px; background:#77dd77;">
                            <?php }?>
                            <center><b>Total Percentage of Form C:</b><input type="text" class="form-control" name="totalpercentage_c" value="<?php echo $total_cc;?>%" style="width: 40%; text-align: center;" readonly> </center>
                            <?php endif;?>
                            </div>
                            </div>
                            <div style="padding:10px;">
                            <?php if($ave_x<60.00){?>
                            <div style="padding:10px; background:#ff8e88;">
                            <?php } elseif($ave_x>59.00 && $ave_x<81.00){?>
                            <div style="padding:10px; background:#ffff99;">
                            <?php } else{?>
                            <div style="padding:10px; background:#77dd77;">
                            <?php }?>
                              <center><b>Total Percentage of Form A:</b><input type="text" class="form-control" name="totalpercentage_a" value="<?php echo $total_xx;?>%" style="width: 40%; text-align: center;" readonly> </center>
                            </div>
                          </div>
                            <div id="score_results">
                            <?php if(!empty($scores->ppaprof_area)): ?>
                            <?php if($total_yy<60.00){?>
                            <div style="padding:10px; background:#ff8e88;">
                            <?php } elseif($total_yy>59.00 && $total_yy<81.00){?>
                            <div style="padding:10px; background:#ffff99;">
                            <?php } else{?>
                            <div style="padding:10px; background:#77dd77;">
                            <?php }?>
                              <center><b>Total Percentage of Form B:</b><input type="text" class="form-control" name="totalpercentage_b" value="<?php echo $total_yy;?>%" style="width: 40%; text-align: center;" readonly> </center>
                            <?php endif;?>
                            </div></div>  
                        </div>  
                        <br> <br>
                        
                        <div style="padding-top: 60px;">
                     
                        <div>
                          <div ><b style="font-size: 15px; font-style: italic;">Remarks</b></div> <!--comments label b style-->
                          <ul style="list-style-type:none;">
                            <?php foreach($allscores as $rems){?>
                              <?php if(!empty($rems->progpro_c_remarks) == true){?><li>Program/Project/Activity Profile: "<?php echo $rems->progpro_c_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->rationale_remarks) == true){?><li>Rationale and Contextualization: "<?php echo $rems->rationale_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->goals_remarks) == true){?><li>II. Goal, Objectives, and Outcomes: "<?php echo $rems->goals_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->participants_remarks) == true){?><li>III. Participants, Partners and Beneficiaries: "<?php echo $rems->participants_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->outlines_remarks) == true){?><li>IV. Outline of Activities: "<?php echo $rems->outlines_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->budreq_remarks) == true){?><li>V. Budgetary Requirements: "<?php echo $rems->budreq_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->ppaprof_remarks) == true){?><li>I. Program/Project/Activity Profile: "<?php echo $rems->ppaprof_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->signifmatrix_remarks) == true){?><li>II. Significance/Relevance Matrix: "<?php echo $rems->signifmatrix_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->implics_remarks) == true){?><li>III. Implications to Work hours, Academic Program, and Research: "<?php echo $rems->implics_remarks;?>"
                              </li><?php }?>
                              <?php if(!empty($rems->linkageprof_remarks) == true){?><li>V. Partnership and Linkage Profile: "<?php echo $rems->linkageprof_remarks;?>"
                              </li><?php }?>
                            <?php }?>
                          </ul>
                        </div><!--score_results of Remarks-->
                        </div> <!--very big area of comments and remarks-->
                        <?php }?>
                    </div>
                    </div>
                   

        </div>

    </div>

    <?php include('application/views/footer.php');?>
    <div style="position:fixed; top:8%; right:2%; ">
    <?php 
       if(isset($total_yy) && isset($total_xx))
       {
          $avg = ($total_xx + $total_yy);
       }else{
          $avg = (isset($total_xx))?$total_xx:$total_yy;
       }
       //echo $avg;
    ?>
    <?php if($role == "CES Director" ): ?>
    <?php if($avg >= 60.00): ?>
          
            <?php if($proposal[0]->status == "10"):  ?>
            
            <?php echo form_open('Proposals/vpaaEndorseProp');?>
            <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-danger btn-md" name="vpaaEndorse" value="ReturnProposal"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>&nbsp Return to Proponent</button>
            <button type="submit" class="btn btn-primary btn-md" name="vpaaEndorse" value="ProceedProposal">Endorse to VPAA&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
            

            <?php endif;?>

      <?php else:?>
            <?php if($proposal[0]->status == "10"):  ?>
            
            <?php echo form_open('Proposals/vpaaEndorseProp');?>
            <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-danger btn-md" name="vpaaEndorse" value="ReturnProposal"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>&nbsp Return to Proponent</button>
            <?php endif;?>
           


      <?php endif;?>
    <?php endif;?>
    </div>
</body>

</html>
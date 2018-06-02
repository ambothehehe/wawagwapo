<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Create Proposal</title>
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
                        <h1><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Choose Review Committee</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                     <!-- My Proposals -->
                    <div class="panel" align="center" >
                            <div class="panel-body"><p>
                                  <h2><?php echo $specprop->title;?></h2>
                                  <h3><?php echo $specprop->school;?></h3>
                                  <h4><?php echo $specprop->department;?></h4>
                                  <h5><?php echo $specprop->venue;?></h5>
                                  
                                  <h5><?php echo date('F jS, Y',strtotime($specprop->inclusive_date1));?> to <?php echo date('F jS, Y',strtotime($specprop->inclusive_date2));?></h5>
                                 
                                </p>
                            </div> <!-- panel-body -->
                        </div>

                          <?php echo form_open('Director/addReviewer');?>
                          
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <label>Reviewer 1:</label>
                     <select class="reviewer" name="reviewer1" style=" width: 100%; padding: 5px; font-size: 17px;">
                          <option value="" >--Please choose--</option>
                           <?php foreach ($userlist as $user) { 
                            if($specprop->office != $user->office && $specprop->user_id != $user->user_id){?>
                      <option style="font-size:15px; padding:5px;" value="<?php echo $user->user_id?>"><?php echo $user->firstname?>&nbsp;<?php echo $user->lastname?> [<?php 
                      if($user->office== "School of Architecture, Fine Arts and Design") { echo "SAFAD";}
                      if($user->office== "School of Arts and Sciences") { echo "SAS";}
                      if($user->office== "School of Education") { echo "SED";}
                      if($user->office== "School of Health Care Professions") { echo "SHCP";}
                      if($user->office== "School of Business and Economics") { echo "SBE";}
                      if($user->office== "School of Engineering") { echo "SOE";}
                      if($user->office== "School of Law and Governance") { echo "SLG";}
                      if($user->office== "Support Units") { echo "Support Unit";}
                      
                      ?>]</option>
        
                       <?php } } ?>
                      </select>
                      </div>

                      <div class="col-md-6">
                        <label>Reviewer 2:</label>
                      <select class="reviewer" name="reviewer2" style=" width: 100%; padding: 5px; font-size: 17px;">
                          <option value="" >--Please choose--</option>
                           <?php foreach ($userlist as $user) { 
                            if($specprop->office != $user->office && $specprop->user_id != $user->user_id){ echo $prop->user_id;?>
                      <option style="font-size:15px; padding:5px;" value="<?php echo $user->user_id?>"><?php echo $user->firstname?>&nbsp;<?php echo $user->lastname?> [<?php 
                      if($user->office== "School of Architecture, Fine Arts and Design") { echo "SAFAD";}
                      if($user->office== "School of Arts and Sciences") { echo "SAS";}
                      if($user->office== "School of Education") { echo "SED";}
                      if($user->office== "School of Health Care Professions") { echo "SHCP";}
                      if($user->office== "School of Business and Economics") { echo "SBE";}
                      if($user->office== "School of Engineering") { echo "SOE";}
                      if($user->office== "School of Law and Governance") { echo "SLG";}
                      if($user->office== "Support Units") { echo "Support Unit";}
                      
                      ?>]</option>
        
                       <?php } } ?>
                      </select>
                      </div>

                      <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                  <div style="width: 90%; float: left;">

                    
                    <div style="padding:10px;">
                     
                      <br/>
                      
                    </div>
                 
                  <div style="float:right; ">
                    <input type="hidden" class="form-control" name="proposal_id" value="<?php echo $proposal_id?>">

                    <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                  </div>
                  <?php echo form_close();?>
                        </div>
                      </div>

                    </div>  
                  </div>

            </div>
        </div>

    </div>
    </div>
    </div>
    <br>
    <?php include('application/views/footer.php');?>


    

    <script>
      $(document).ready(function () {
          $(".reviewer").each(function () {
              var $self = $(this);
              $self.data("previous_value", $self.val());
          });
          
          $(".reviewer").on("change", function () {
              var $self = $(this);
              var prev_value = $self.data("previous_value");
              var cur_value = $self.val();
              
              $(".reviewer").not($self).find("option").filter(function () {
                  return $(this).val() == prev_value;
              }).prop("disabled", false);
              
              if (cur_value != "") {
                  $(".reviewer").not($self).find("option").filter(function () {
                      return $(this).val() == cur_value;
                  }).prop("disabled", true);
                  
                  $self.data("previous_value", cur_value);
              }
          });
      });
    </script>

   

</body>

</html>
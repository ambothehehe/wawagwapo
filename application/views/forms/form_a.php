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


            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                      <!--<?php echo form_open('Procedure_one/');?>-->
                        <form method="post" name="form_a" id="form_a">                          
                            <?php //include('proposal_header.php');?>

<!-- START proposal header of form_a1.php -->
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
             <input type="hidden" class="form-control" name="form_type"  value="2"/>
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
                


                       <!--  <input type="hidden" name="procedure_num" value="3"> -->
                            
                            <?php include('rationale_and_contextualization.php');?>

                            <?php include('goal_objectives_and_outcomes.php');?>

                            <?php include('participants_partners_and_beneficiaries.php');?>

                         
                            <?php include('outline_of_activities.php');?>
                             

                            
                            <?php include('budgetary_requirements.php');?>
                            

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="button" id = "save" class="btn btn-default btn-block" data-toggle="modal" value="save_prop" data-target="#saveasdraft"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_prop" onsubmit = "window.location='<?php echo base_url(); ?>index.php/Representative/send'"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button><!-- 
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_prop" onclick= "window.location='<?php echo base_url(); ?>index.php/Representative/send'"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button> -->
                            </div>
                            
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>

            <?php include('exit_modal.php');?>
            
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
      }
        
    });
  </script>

    
</body>

</html>
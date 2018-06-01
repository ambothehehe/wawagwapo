<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - My Reports</title>
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
                        <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp My Reports</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                
                <?php include('application/views/messages.php'); ?>
                
    <div class="tab-container">

  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#form_d">Form D list</a></li>
    <li><a data-toggle="tab" href="#form_e">Form E list</a></li>
   
  </ul>

  <div class="tab-content"  style="padding-top:30px;">
    <div id="form_d" class="tab-pane fade in active">
      <div class="lists-table">
        <div class="container">
            <div class="row">
                    <table id="reportd" class="table table-striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>School and Department</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody> 
                        <?php if(empty($list_d)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php foreach($list_d as $reps) {?>
                            <?php if($reps->creator_id == $user_id) { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>index.php/Representative/loadreportd/<?php echo $reps->fd_id; ?>"><?php echo $reps->fd_title;?></a></td>
                                        <!-- <td><a href="" value="<?php echo $reps->id;?>"><?php echo $reps->fd_title;?></a></td> -->
                                        <td><?php echo $reps->datecreated;?>
                                            <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $reps->creator_id ;?>">
                                        </td>
                                        <td><?php echo $reps->fd_dept;?><br><p style="font-size:75%;"><?php echo $reps->fd_school;?></p></td>




                                        <td>
                                         <?php
                                            echo form_open('Representative/deleteForm_d');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $reps->fd_id;?>" >
                                            <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} ?>
                    </tbody>
                    </table>
            </div>
            </div>
                    </div>


    </div>
    <div id="form_e" class="tab-pane fade">
     <div class="lists-table">
        <div class="container">
            <div class="row">
                    <table id="reporte" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody>  
                          <?php if(empty($list_e)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>
                        
                        <?php foreach($list_e as $elist) {?>
                              <?php if($elist->creator_id == $user_id) { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>index.php/Representative/loadreporte/<?php echo $elist->fe_id; ?>"><?php echo $elist->title;?></a></td>
                                        <td><?php echo $elist->datecreated;?>
                                             <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $elist->creator_id ;?>">
                                        </td>
                                        <td><?php
                                            echo form_open('Representative/deleteForm_e');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $elist->fe_id;?>" >
                                           <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} ?>
                    </tbody>
                    </table> 
                    </div>
                    </div>
                    </div>
    </div>
    
  </div>
</div>




              
            </div>
        </div>

    </div>

    <?php include('application/views/footer.php');?>

</body>

</html>
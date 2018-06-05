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
                            <th>Created By</th>
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
                        <?php if(empty($reportlist_d)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php foreach($reportlist_d as $repd) {?>
                            
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/Chair/loadreportd/<?php echo $repd->fd_id; ?>">
                                                 <?php echo $repd->fd_title;?></a>
                                        </td>
                                       
                                        <td>
                                            <?php echo $repd->datecreated;?><br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $repd->creator_id ;?>">
                                        </td>

                                        <td>
                                            <?php echo $repd->fd_dept;?><br><p style="font-size:75%;"><?php echo $repd->fd_school;?></p>
                                        </td>

                                        <td>
                                            <?php echo $repd->who_created;?></p>
                                        </td>
                                    </tr>

                        <?php  }?>

                            
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
                            <th>School and Department</th>
                            <th>Created By</th>
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
                        <?php if(empty($reportlist_e)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php foreach($reportlist_e as $repe) {?>
                           
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/Chair/loadreporte/<?php echo $repe->fe_id;?>"><?php echo $repe->title;?></a>
                                        </td>

                                        <td>
                                            <?php echo $repe->datecreated;?>
                                             <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $repe->creator_id ;?>">
                                        </td>

                                         <td>
                                            <?php echo $repe->creators_department;?><br><p style="font-size:75%;"><?php echo $repe->creators_school;?></p>
                                        </td>

                                        <td>
                                            <?php echo $repe->who_created;?><br><p style="font-size:75%;"><?php echo $repe->who_created;?></p>
                                        </td>
                            <?php } ?>
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
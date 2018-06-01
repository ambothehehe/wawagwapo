<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - All Reports</title>
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
                        <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp; Reports</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <?php include('application/views/messages.php'); ?>
                <div class="row tab-content">
                    <!-- My Reports -->
                    
                    
                    <br>

                    <div style="height:50%; width:20%; float:left; padding-right:10px; ">
<ul class="nav nav-tabs nav-stacked">
  <li><a data-toggle="tab" class="active" href="#Form_d_others">All Form D</a></li>
  <li><a data-toggle="tab" href="#Form_e_others">All Form E</a></li>
</ul>
</div>


<div style="width:80%;float:left;">
    <div class="scroll" style="overflow: scroll;  
    background-color: #FFFFFF;
    width: 100%;
    height: 500px;">
<div class="tab-content" style=" margin:5px;">
  <div id="Form_d_others" class="tab-pane fade in active">
   
<!--start FORM D table of my reports -->
 <div class="lists-table">
                    <table id="reportd" class="table table-striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>School and Department</th>
                            <th></th>
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
                        <?php if(empty($reportlist_d)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php 
                      
        
                        foreach($reportlist_d as $repd) {?>
                            
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/Vpaa/loadreportd/<?php echo $repd->fd_id; ?>">
                                                 <?php echo $repd->fd_title;?></a>
                                        </td>
                                       
                                        <td>
                                            <?php echo $repd->datecreated;?><br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $repd->creator_id ;?>">
                                        </td>

                                        <td>
                                            <?php echo $repd->fd_dept;?><br><p style="font-size:75%;"><?php echo $repd->fd_school;?></p>
                                        </td>

                                        <!-- DELETE BUTTON -->
                                        <td></td>
                                         </tr>
                                        <?php  }?>

                            
                        </tbody>
                    </table>

                    </div> 
                    <!-- end Form D of my reports -->


  </div>
  <div id="Form_e_others" class="tab-pane fade">
   <!--start FORM E table of my reports -->
 <div class="lists-table">
                    <table id="reportd" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>School and Department</th>
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
                        <?php if(empty($reportlist_e)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php foreach($reportlist_e as $allrepe) {?>
                           
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/Chair/loadreporte/<?php echo $allrepe->fe_id; ?>"><?php echo $allrepe->title;?></a>
                                        </td>

                                        <td>
                                            <?php echo $allrepe->datecreated;?>
                                             <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $allrepe->creator_id ;?>">
                                        </td>

                                        <td>
                                            <?php echo $repd->fd_dept;?><br><p style="font-size:75%;"><?php echo $repd->fd_school;?></p>
                                        </td>
                                                </tr>
                                        <?php } ?>
                             </tbody>
                    </table>

                    </div> 
                    <!-- end Form E of my reports -->
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
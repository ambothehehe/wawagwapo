<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - My Reports</title>
    <?php include 'application/views/header.php';?>
</head>

<body>

    <div id="wrapper">

       <?php include 'application/views/sidebar.php';?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include 'application/views/topNav.php';?>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header text-center">
                            <h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports <i>(Form E)</i></h1>
                        </div>
                    </div>
                </div>
                    <!-- My Reports -->
                    
                   

                    <div class="lists-table">
                    <table id="reporte" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
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
                        <?php if(empty($repaps)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>
                        
                        <?php foreach($repaps as $reps) {?>

                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Faculty/loadreporte/<?php echo $reps->id; ?>"><?php echo $reps->title_of_program;?></a></td>
                                        <td><?php echo $reps->datecreated;?></td>
                                        <td><?php
                                            echo form_open('Faculty/deleteForm_e');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $reps->proposid;?>" >
                                            <input class="form-control" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')">
                                            </form> </td>
                                    </tr>
                            <?php } ?>
                    </tbody>
                    </table> 
                    </div>

                    <!-- <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">Title of PPA Report</th>
                            <th class="text-center">Date Created</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="<?php //echo site_url('Representative/sample_report1');?>">Barangay Talamban River Clean-up</a></td>
                                <td class="text-center">January 1, 2015</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td><a href="<?php //echo site_url('Representative/sample_report2');?>">Barangay Talamban River Clean-up</a></td>
                                <td class="text-center">January 1, 2015</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav align="center">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>    -->
            </div>
        </div>

    </div>

    <?php include 'application/views/footer.php';?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Create Report</title>
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
                        <h1><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Report</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Types of CES Program/Project/Activity Reports</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-success">
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <td>
                                            <h4>USC-CES Form D CES Activity Report Form</h4>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('ExtraCurricular/form_d');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>USC-CES Form E CES Program or Project Completion Report Form</h4>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('ExtraCurricular/form_e');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
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
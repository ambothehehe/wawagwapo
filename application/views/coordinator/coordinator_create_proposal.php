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
                        <h1><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Proposal</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                    
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Types of CES Program/Project/Activity Proposals</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <strong>1. Course-based CES Program/Project/Activity</strong>
                                </div>
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <td>
                                            <ul style="list-style-type:none">
                                                <li>a. Deadline for 1st Semester: last Friday of June</li>
                                                <li>b. Deadline for 2nd Semester: last Friday of September</li>
                                            </ul>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('Coordinator/form_a_1_coord');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <strong>2. CES Proposals from Department/School and Student Organizations (co-curricular and extra-curricular)</strong>
                                </div>
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <td>
                                            <ul style="list-style-type:none">
                                                <li>a. <strong>Medium and Long term proposals planned by 1st quarter of the year</strong> (first Friday of February)</li>
                                            </ul>
                                        </td>
                                        <td width="30%">
                                            <a href=<?php echo site_url('Coordinator/form_a_1_coord');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <ul style="list-style-type:none">
                                                <li>
                                                    b. <strong>Submitted Within the Academic Year: <span class="text-danger"><em>Deadlines only apply to items i, ii, iii and not for Special Projects</em></span></strong>
                                                    <ol>
                                                        <li>Deadline for 1st Semester: last Friday of June</li>
                                                        <li>Deadline for 2nd Semester: last Friday of September</li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <table class="table table-bordered" width="100%">
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>i.</strong> Medium and Long Term proposal and planned within the academic year</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Coordinator/form_a_1_coord');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>ii.</strong> Short term proposals (one time activity; or to be implemented in one semester) with cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Coordinator/form_a_coord');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>iii.</strong> Short term proposals (one time activity; or to be implemented in one semester) without cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Coordinator/form_a_coord');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>iv.</strong> Special Projects (those requested by partners from within and outside USC) with cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Coordinator/form_c');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>v.</strong> Special Projects (those requested by partners from within and outside USC) without cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Coordinator/form_c');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    
    <?php include('application/views/footer.php');?>

</body>

</html>
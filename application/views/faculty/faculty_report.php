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
                        <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp Reports</h1>
                        <p><?php echo($this->session->office);?></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <?php include('application/views/messages.php'); ?>
                <div class="row">
                    <ul class="nav nav-tabs nav-justified" id="coordinator-report-tabs" role="tablist">
                        <li class="nav-item active">
                            <a href="#my-reports" class="nav-link" data-toggle="tab" role="tab">
                                <strong>My Reports</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#other-reports" class="nav-link" data-toggle="tab" role="tab">
                                <strong>Other Reports</strong>
                            </a>
                        </li>
                    </ul>

                    <br>
                    <!-- MY REPORTS AREA sa faculty -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="my-reports" role="tab-panel">
                            <?php include('faculty_myreport.php');?>
                        </div>

                        <!-- OTHER REPORTS AREA -->
                        <div class="tab-pane fade" id="other-reports" role="tab-panel">
                            <?php include('faculty_otherreport.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('application/views/footer.php');?>

</body>

</html>
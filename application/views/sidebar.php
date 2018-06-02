f<!DOCTYPE html>
<html>

<body>

    <nav role="navigation">
        <div id="sidebar-wrapper">
            <ul class="nav nav-pills nav-stacked sidebar-nav" role="menu">
                <div class="sidebar-brand"></div>
                <div class="user-info">
                    <img class="img-circle navlogo" src="<?php echo base_url();?>assets/img/ces_profile.png" alt="CES Logo" style="height:150px; width:150px;">
                    <h4 class="name"><?= $fname ?>&nbsp;<?= $lname ?></h4>
                    <h5 class="designation"><em><?= $role ?></em></h5>
                </div>
                
                <!-- Sidebar options of CES Representative -->
                <?php if ($role === 'Representative') { ?>
                <li>
                    <a href="<?php echo site_url('Representative/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; My Proposals
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo site_url('Representative/reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; My Reports
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>

                <!-- Sidebar options of CES Faculty -->
                <?php if ($role === 'Faculty') { ?>
                <li>
                    <a href="<?php echo site_url('Faculty/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; My Proposals
                    </a>
                </li>
                <?php if (strlen($organization) > 0) { ?>
                <li>
                    <a href="<?php echo site_url('Faculty/proposals_to_be_noted');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Proposals to be noted
                    </a>
                </li>
                <?php } ?>
                 <li>
                    <a href="<?php echo site_url('Faculty/reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; My Reports
                    </a>
                </li>
               <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Faculty/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>

                <?php if ($role === 'Extra-Curricular Organization') { ?>
                <li>
                    <a href="<?php echo site_url('ExtraCurricular/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; My Proposals
                    </a>
                </li>
               <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('ExtraCurricular/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>

                <!-- sidebar options for Co-Curricular -->

                <?php if ($role === 'Co-Curricular Organization') { ?>
                <li>
                    <a href="<?php echo site_url('CoCurricular/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; My Proposals
                    </a>
                </li>
               <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('CoCurricular/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>




                <!-- Sidebar options of CES Coordinator -->
                <?php if ($role === 'Coordinator') { ?>
                <li>
                    <a href="<?php echo site_url('Coordinator/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Reports
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>



                <!-- Sidebar options of Department Chair -->
                <?php if ($role === 'Department Chair') { ?>
                <li>
                    <a href="<?php echo site_url('Chair/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Proposals
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('Chair/reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Reports
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Chair/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>


                <!-- Sidebar options of School Dean -->
                <?php if ($role === "School Dean") { ?>
                <li>
                    <a href="<?php echo site_url('Dean/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Proposals
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('Dean/reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Reports
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Dean/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>


                <!-- Sidebar options of CES Director -->
                <?php if ($role === "CES Director") { ?>
                <li>
                    <a href="<?php echo site_url('Director/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/other_reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Reports
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/manage_accounts');?>">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Manage Accounts
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('Director/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>
                <?php } ?>

                 
               
                


                <!-- Sidebar options for Vice-President of Academic Affairs -->
                <?php if ($role === "Vice-President for Academic Affairs") { ?>
                <li>
                    <a href="<?php echo site_url('Vpaa/home');?>">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Vpaa/reports');?>">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Reports
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('Proposals/approved_proposals');?>">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Approved Proposals
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Vpaa/profile_settings');?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Profile Settings
                    </a>
                </li>

                <?php } ?>

                <!-- Sidebar options for Student Organization Representative -->
                <?php if ($role === "Student Org Representative") { ?>

                <?php } ?>

                <li>
                    <a href="<?php echo site_url('Users/logout')?>">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                        &nbsp;&nbsp;&nbsp; Logout
                    </a>
                </li>

            </ul>

        </div>
    </nav>
    
</body>

</html>
<!DOCTYPE html>
<html>

<body>
<div class="navbar-top">
	<div class="navbar navbar-fixed-top">
			<div class="row">
				<div class="navbar-header">
					<img src="<?php echo base_url();?>assets/img/usc_white.png" style="height:40px; width:70px">
					<a href="#" class="navbar-brand"><h3>&nbsp; CESPPMS</h3></a>
				</div>
				<div class="sidebar-toggle">
					<button type="button" id="menu-toggle" class="btn btn-default" data-target="#menu-toggle" data-toggle="tooltip" data-placement="bottom" title="Toggle Sidebar">
	            		<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
	            	</button>
      	 	
	            	<?php if ($role != "Representative" && $this->uri->segment(2) === "loadspecificproposal" || $this->uri->segment(2) === "loadspecificproposal_a" && $role != "Representative" && $role != "CES Director") { ?>
	            	 	<button class="btn-minimize"><b><span class="glyphicon glyphicon-comment"></span>&nbsp;Comment Box</b></button>
					<?php } ?>

	            	
				</div>
				<div class="btn-header">
					<?php if ($role === 'Representative') { ?>
						<?php if ($this->uri->segment(2) === "home") { ?>
							<a href="<?php echo site_url('Representative/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
						<?php } ?>
						<?php if ($this->uri->segment(2) === "reports" || $this->uri->segment(2) === "viewform_d" || $this->uri->segment(2) === "viewform_e") { ?>
							<a href="<?php echo site_url('Representative/create_report');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Report</button></a>
						<?php } ?>
					<?php } ?> 


					
					<?php if ($role === 'Faculty') { ?>
						<?php if ($this->uri->segment(2) === "home") { ?>
							<a href="<?php echo site_url('Faculty/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
						<?php } ?>
						<?php if ($this->uri->segment(2) === "reports" || $this->uri->segment(2) === "viewform_d" || $this->uri->segment(2) === "viewform_e") { ?>
							<a href="<?php echo site_url('Faculty/create_report');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Report</button></a>
						<?php } ?>
					<?php } ?> 

					<?php if ($role === 'Co-Curricular Organization') { ?>
						<?php if ($this->uri->segment(2) === "home") { ?>
							<a href="<?php echo site_url('CoCurricular/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
						<?php } ?>
					<?php } ?> 

					<?php if ($role === 'Extra-Curricular Organization') { ?>
						<?php if ($this->uri->segment(2) === "home") { ?>
							<a href="<?php echo site_url('ExtraCurricular/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
						<?php } ?>
					<?php } ?> 

					<?php if ($role === 'Coordinator') { ?>
						<?php if ($this->uri->segment(2) === "home") { ?>
							<a href="<?php echo site_url('Coordinator/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
						<?php } ?>
						<?php if ($this->uri->segment(2) === "reports") { ?>
							<a href="<?php echo site_url('Coordinator/create_report');?>" style="text-decoration:none"><button class="btn btn-success outline"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp Create Report</button></a>
						<?php } ?>
					<?php } ?> 

					<?php if ($role === 'CES Director') { ?>
						<?php if ($this->uri->segment(2) === "manage_accounts") { ?>
							<a href="<?php echo site_url('Director/create_account');?>">
				              <button type="button" class="btn btn-success outline">
				                <span class="glyphicon glyphicon-plus-sign"></span>
				                &nbsp; Create Account
				              </button>
				            </a>
						<?php } ?>
					<?php } ?>

					<?php if ($this->uri->segment(2) === "view_form") { ?>
						<div class="dropdown">
							<button type="button" class="btn" data-toggle="tooltip"  data-placement="bottom" title="Approval Status">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"></span></a>
							</button>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Approval Status:</li>
								<li class="divider"></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;Department Chair</input></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;School Coordinator</input></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;School Dean</input></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;CES Director</input></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;Review Committee 1</input></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;Review Committee 2</input></li>
								<li class="disabled"><input type="checkbox" disabled>&nbsp;Vice-President of Academic Affairs</input></li>
							</ul>
						</div>
					<?php } ?>

					<?php if($this->uri->segment(2) === "loadspecificproposal" || $this->uri->segment(2) === "view_proposal_content" || $this->uri->segment(2) === "loadspecificproposal_a"){?>
					<!--<div class="btn-log-trail"> <?php echo form_open('Proposals/proposal_log');?>
                        <input class="form-control" type="hidden" name="id" 
                               value="<?php echo $this->uri->segment(3); ?>"> 
                         <button type="submit" class="btn-log" style="width: 10%; float: right; color: black;"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>&nbsp;Log Trail</button>
                        </form>
                    </div>-->
                        <?php }?>
					
				</div>

			</div>

	   	</div>

	</div>



</body>
</html>
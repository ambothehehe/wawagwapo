<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Revision history
* 2017-26-11 Home() - Added a session checker for the appropriate
* access per page, designation_fkid will be used to check the
* appropriate account access.
*/

class StudentOrganization extends CI_Controller
{

	public function home() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 12)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['so_organization']	= $this->session->organization;
			
			$this->load->model('Proposal_AB');
			
			$data['assessor']=$this->Proposal_AB->validate_assessor();
			$data['proplist']=$this->Proposal_AB->LoadProposalsSO($this->session->organization); 
			$this->load->view('studentOrganization/SO_note', $data);
		}else{
			redirect(site_url());
		}
	}

	public function getToBeNotedProposal()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadProposalsSO($this->session->department); 
		echo json_encode($proplist);
	}

	public function profile_settings() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 12)
		{
			$data = array();

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role'] = $this->session->designation;

			$this->load->model('User');
			$user = new User();

			$user->user_id = $this->session->user_id;
					
			$data['user'] = $user->get_user();

			$this->load->view('studentOrganization/so_setting', $data);
		}else{
			redirect(site_url());
		}
	}

	public function reports() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 12)
		{

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['department']	= $this->session->department;
			$data['user_id'] = $this->session->user_id;


			$this->load->model('Reports');


			$data['reportlist_d']=$this->Reports->LoadReport_dCHAIR($data['department']);
			$data['reportlist_e']=$this->Reports->LoadReport_eCHAIR($data['department']);

			$this->load->view('chair/chair_report', $data);
		}else{
			redirect(site_url());
		}
	}

	public function loadreportd(){
		$reportd_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['office']	= $this->session->office;
		$data['creators_school']	= $this->session->office;

		$this->load->model('Reports');

		$data['reps']=$this->Reports->viewReport_d($reportd_id);
		
		$this->load->view("forms/form_d_report", $data);
	}

	public function loadreporte(){
		$reporte_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;

		$this->load->model('Reports');
		
		$data['repe']=$this->Reports->viewReport_e($reporte_id);
		$this->load->view("forms/form_e_report", $data);
	}

	public function viewform_d() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$this->load->model('Reports');
		// $data=array();
		$data['repaps']=$this->Reports->LoadReport_d(); 
		$this->load->view('representative/rep_report_d', $data);
	}

	public function viewform_e() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$this->load->model('Reports');
		// $data=array();
		$data['repaps']=$this->Reports->LoadReport_e();
		$this->load->view('representative/rep_report_e', $data);
	}

	public function process_settings() {
		if($this->input->post('save')) {
				  
			if($this->form_validation->run() === FALSE) {
				echo validation_errors();
			} else {
				  	
				$data = $this->input->post(NULL, TRUE);

				$this->load->model('User');
				$user = new User();

				$user->user_id 		= $this->session->user_id;
				$user->firstname 	= $data['firstname'];
				$user->lastname 	= $data['lastname'];
				$user->email 		= $data['email'];
				$user->contact_num  = $data['contact_num'];
				$user->office 		= $data['school'];
				$user->deparment 	= $data['department'];
				$user->username 	= $data['username'];
				$user->password 	= $data['password'];
				  	
				$state = $user->update_user();
				  	
				if ($state === TRUE) {
					// echo "<meta http-equiv='refresh' content='2; url=" . site_url('Representative/profile_settings') . "'>";
					// echo "<h1> Successfully updated your user profile!</h1>";

					$session_data = array(
					  	'session_id'	=> session_id(),
					  	'ip_address'	=> $_SERVER['REMOTE_ADDR'],
					  	'user_id' 		=> $this->session->user_id,
					  	'firstname' 	=> $user->firstname,
					  	'lastname' 		=> $user->lastname,
					  	'email' 		=> $user->email,
					  	'contact_num' 	=> $user->contact_num,
					  	'designation' 	=> $this->session->designation,
					  	'office' 		=> $user->office,
					  	'department'	=> $user->department,
					  	'organization'	=> $this->session->organization,
					  	'logged_in' 	=> TRUE
					);
				
				  	$this->session->set_userdata($session_data);

				  		// 	$this->session->set_flashdata('success_msg',
						// '<strong>Profile Updated!</strong> You have successfully updated your profile settings.');
						
					redirect(site_url('StudentOrganization/profile_settings'), "refresh");

				} else {
				  	echo "<meta http-equiv='refresh' content='2; url=" . site_url('StudentOrganization/profile_settings') . "'>";
				  	echo "<h3>No changes made.</h3>";
				}
				
			}
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct Script access allowed');


class CoCurricular extends CI_Controller
{

	function __construct(){
		parent:: __construct();
	}

	public function home(){

		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 7){
			$data['fname'] = $this->session->firstname;
			$data['lname'] = $this->session->lastname;
			$data['role'] = $this->session->designation;
			$data['user_id'] = $this->session->user_id;

			$this->load->model('Proposal_AB');

			$data['proplist'] = $this->Proposal_AB->LoadDraftProposal($this->session->user_id);
			$data['submitted_prop'] = $this->Proposal_AB->LoadSubmittedProposal($this->session->user_id);
			$data['assessor'] = $this->Proposal_AB->validate_assessor();

			$this->load->view('cocurricular/cocurricular_proposal', $data);

		}else{
			redirect(site_url());
		
		}
	}

	public function create_proposal(){

		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role'] = $this->session->designation;


		$this->load->view('cocurricular/cocurricular_create_proposal');
	}

	public function form_a(){

		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role'] = $this->session->designation;
		$data['user_id'] = $this->session->user_id;
		$data['user_office'] = $this->session->office;
		$data['user_dept'] = $this->session->department;
		$data['organization'] = $this->session->organization;


		if(isset($_GET['propsal_id'])){
			$this->load->model('Proposal_AB');
			$data["proposal"] = $this->Proposal_AB->getProposalDetails($_GET['proposal_id']);
			$data["proposal_id"] = $_GET['proposal_id'];

		} 
		$this->load->view('forms/form_a', $data);
	}

	public function form_a_1(){ 	

		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role'] = $this->session->designation;
		$data['user_id'] = $this->session->user_id;
		$data['user_office'] = $this->session->office;
		$data['user_dept'] = $this->session->department;
		$data['organization'] = $this->session->organization;

		if(isset($_GET['form_type'])){
			$data['form_type'] = 1;
		}else{
			$data['form_type'] = 2;
		}

		$this->load->view('forms/form_a1', $data);

	}
	public function fEditFormAB_p1(){
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;

		$this->load->model('Proposal_AB');
	    $p= new Proposal_AB();
	    $p->id=$this->input->post('id');

	    
	    $data['result_ab']=$p->getOneFormAB();

		$this->load->view('forms/form_a1_update', $data);
	}
	public function EditFormAB_draft() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;

		$this->load->model('Proposal_AB');
	    $p= new Proposal_AB();
	    $p->id=$this->uri->segment(3);

	    
	    $data['result_ab']=$p->getOneFormAB();

		$this->load->view('forms/form_a1_update', $data);
	}
	public function form_b() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		$this->load->view('forms/form_b', $data);
	}

	public function form_c() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		$this->load->view('forms/form_c', $data);
	}

	// for loading specific proposal
	public function loadspecificproposal(){
		$proposal_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		//$data["status"] = $this->uri->segment(4);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;
		$data['user_id'] = $this->session->user_id;

		$this->load->model('Proposal_AB');
		$data["proposal"] = $this->Proposal_AB->getProposalDetails($proposal_id);
		$data["proposal_id"]= $proposal_id;
		$proposal = $data["proposal"];
		$data['specprop']=(object) json_decode($proposal[0]->proposal_json_format,FALSE);
		$data['comments']=$this->Proposal_AB->LoadComments($proposal_id);
		$this->load->view("forms/sample_form_b", $data);
	}

	public function loadspecificproposal_a(){
		$proposal_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;
		$data['user_id'] = $this->session->user_id;

		$this->load->model('Proposal_AB');
		$data['specprop_a']=$this->Proposal_AB->viewSpecificprop_a($proposal_id);
		$data['comments']=$this->Proposal_AB->LoadComments($proposal_id);
		$data['assessor']=$this->Proposal_AB->validate_assessor();
		$data['validate_prop']=$this->Proposal_AB->viewScores($proposal_id);

		$this->load->view("forms/sample_form_a1", $data);
	}

	 public function deleteForm(){
   	$this->load->model('Proposal_AB');

   $this->Proposal_AB->row_delete($this->input->post('id'));
   $this->session->set_flashdata('success_msg',
					'<strong>Report Deleted!</strong> You have successfully deleted a proposal.');
				
	redirect(site_url('CoCurricular/home'), "refresh");
	

   }

    public function deleteForm_proposals(){
   	$this->load->model('Reports');

   $this->Reports->row_delete_proposals($this->input->post('id'));
   $this->session->set_flashdata('success_msg',
					'<strong>Report Deleted!</strong> You have successfully deleted a proposal.');
				
	redirect(site_url('CoCurricular/home'), "refresh");
   }

   public function sample_a1() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;

		$this->load->view('forms/form_d_update', $data);
	}

	public function sample_a() {
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role'] = $this->session->designation;
		$this->load->view('forms/sample_form_a_revised', $data);
	}

	public function form_A_and_B_p3() {
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$this->load->view('forms/sample_form_b', $data);
	}

	public function view_form() {

		if ($this->input->get()) {
			$form_data = $this->input->get(NULL, true);

			$this->load->model('Proposal');
			$proposal = new Proposal;

			$proposal_id = $this->encryption->decrypt($form_data['proposal']);
			$proposal->proposal_header_id 	= $proposal_id;
			$proposal->form_type 			= $form_data['form_type'];

			$data['fname'] 		= $this->session->firstname;
			$data['lname'] 		= $this->session->lastname;
			$data['role']		= $this->session->designation;
			$data['proposal'] 	= $proposal->get_proposal_info();

			if($proposal->form_type === 'a') {
				$this->load->view('forms/view_proposal_a', $data);
			}

			if($proposal->form_type === 'ab') {
				 $this->load->view('forms/view_proposal_ab', $data);
			}

			if($proposal->form_type === 'c') {
				$this->load->view('forms/view_proposal_c', $data);
			}
		}	
	}

	public function edit_form() {

		if ($this->input->get()) {
			$form_data = $this->input->get(NULL, true);
		}
	}

	public function profile_settings() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 7)
		{
			$data = array();

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role'] = $this->session->designation;

			$this->load->model('User');
			$user = new User();

			$user->user_id = $this->session->user_id;
			
			$data['user'] = $user->get_user();

			$this->load->view('cocurricular/cocurricular_setting', $data);
		}else{
			redirect(site_url());
		}
	}

	public function process_settings() {
		if($this->input->post('firstname')) {
		  
		  if($this->form_validation->run() === FALSE) {
		  	echo validation_errors();
		  } else {
		  	
		  	$data = $this->input->post("edit_profile",TRUE);

		  	$this->load->model('User');
		  	$user = new User();

		  	$user->user_id 		= $this->session->user_id;
		  	$user->firstname 	= $this->input->post('firstname');
			$user->lastname 	= $this->input->post('lastname');
			$user->email 		= $this->input->post('email');
			$user->contact_num  = $this->input->post('contact_num');
			$user->office 		= $this->input->post('school');
			$user->deparment 	= $this->input->post('deparment');
			$user->username 	= $this->input->post('username');
			$user->password 	= $this->input->post('password');

		  	$state = $user->update_user();
		  	
		  	if ($state === TRUE) {
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

		  	} else {
				echo "Error";
		 	 	}
		  	}

		}

	}
}

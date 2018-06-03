<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Revision history
* 2017-26-11 Home() - Added a session checker for the appropriate
* access per page, designation_fkid will be used to check the
* appropriate account access.
*/
class Director extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function home() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 2)
		{
			$data['fname'] 			= $this->session->firstname;
			$data['lname'] 			= $this->session->lastname;
			$data['role']			= $this->session->designation;
			$data['dir_user_id']	= $this->session->user_id;

			$this->load->model('Proposal_AB');
			
			//$data['proplist']=$this->Proposal_AB->LoadProposals();
			$data['revcominfo']=$this->Proposal_AB->LoadAllCoordinator(); 
			
			$this->load->view('director/director_home', $data);
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
		$data['department']	= $this->session->department;
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


	public function review_specificproposal(){
		$proposal_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data["reviewer1"] = $this->uri->segment(4);
		$data["reviewer2"] = $this->uri->segment(5);
		$data["review_id"] = $this->uri->segment(6);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;
		$data['user_id'] = $this->session->user_id;

		$this->load->model('Proposal_AB');
		
		$proposal=$this->Proposal_AB->getProposalDetails($proposal_id);
		$data['specprop']=(object) json_decode($proposal[0]->proposal_json_format,FALSE);
		
		$data['comments']=$this->Proposal_AB->LoadComments($proposal_id);
		$data['assessor']=$this->Proposal_AB->validate_assessor();
		
		$this->load->view("forms/sample_form_a_review", $data);
	}

	public function addScores(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();

		$review_id = $this->input->post('review_id');
        //$p->user_fkid= $this->input->post('user_id');
        //$reviewer_1= $this->input->post('reviewer_1');
        //$reviewer_2= $this->input->post('reviewer_2');

       // $p->proposal_header_fkid= $this->input->post('proposal_id');
		$p->progpro_c = $this->input->post('progpro_c');
		$p->progpro_c_remarks = $this->input->post('progpro_c_remarks');
        $p->rationale_area= $this->input->post('rationale_area');
        $p->rationale_remarks= $this->input->post('rationale_remarks');
        $p->goals_area= $this->input->post('goals_area');
        $p->goals_remarks= $this->input->post('goals_remarks');
        $p->participants_area= $this->input->post('participants_area');
        $p->participants_remarks= $this->input->post('participants_remarks');
        $p->outlines_area= $this->input->post('outlines_area');
        $p->outlines_remarks= $this->input->post('outlines_remarks');
        $p->budreq_area= $this->input->post('budreq_area');
        $p->budreq_remarks= $this->input->post('budreq_remarks');
        $p->ppaprof_area= $this->input->post('ppaprof_area');
        $p->ppaprof_remarks= $this->input->post('ppaprof_remarks');
        $p->signifmatrix_area= $this->input->post('signifmatrix_area');
        $p->signifmatrix_remarks= $this->input->post('signifmatrix_remarks');
        $p->implics_area= $this->input->post('implics_area');
        $p->implics_remarks= $this->input->post('implics_remarks');
        $p->linkageprof_area= $this->input->post('linkageprof_area');
        $p->linkageprof_remarks= $this->input->post('linkageprof_remarks');
        
        $add_allscores_forma = $this->input->post('rationale_area') + $this->input->post('goals_area') + $this->input->post('participants_area') + $this->input->post('outlines_area') + $this->input->post('budreq_area');
        $p->total_percentage_forma= $add_allscores_forma/25*100;

        $add_allscores_formb = $this->input->post('ppaprof_area') + $this->input->post('signifmatrix_area') + $this->input->post('implics_area') + $this->input->post('linkageprof_area');
        $p->total_percentage_formb= $add_allscores_formb/20*100;

        $add_allscores_formc = $this->input->post('progpro_c');
        $p->total_percentage_formc= $add_allscores_formc/5*100;

        //$rev1 = $p->addDateReview1($reviewer_1);
        //$rev2 = $p->addDateReview2($reviewer_2);

        $result=$p->saveReviewScores($review_id);


        if(!$result){
        	if ($this->input->post('user_designation') == "Coordinator") {
				$this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Coordinator/home'), "refresh");
			} else {
				$this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Director/home'), "refresh");
			}
		} else {
			if($p->isReviewDone($this->input->post('proposal_id')) == TRUE){
				//update status to 7
				$p->doneReviewProposal($this->input->post('proposal_id'));
			}
			
			if ($this->input->post('user_designation') == "Coordinator") {
				$this->session->set_flashdata('success_msg',
					'<strong>Proposal Reviewed!</strong> You have successfully reviewed proposal.');
				
				redirect(site_url('Coordinator/home'), "refresh");
			} else {
				
				$this->session->set_flashdata('success_msg',
					'<strong>Proposal Reviewed!</strong> You have successfully reviewed proposal.');
				
				redirect(site_url('Director/home'), "refresh");
			}
		}
			
		}


	public function other_reports() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 2)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['user_id']	= $this->session->user_id;

			$this->load->model('Reports');
			
			$data['reportlist_d']=$this->Reports->LoadReport_dADMIN();
			$data['reportlist_e']=$this->Reports->LoadReport_eADMIN();
			
			$this->load->view('director/director_other_report', $data);
		}else{
			redirect(site_url());
		}
	}

	public function manage_accounts() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 2)
		{	
			$this->load->model('User_process');
			$user = new User_process();

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['active'] = $user->active_users();
			$data['pending'] 	= $user->applying_users();

			$this->load->view('director/director_manage_accounts', $data);
		}else{
			redirect(site_url());
		}
	}

	public function user_pending_to_active(){
		$this->load->model('User_process');
		$user = new User_process();

		$user->user_id=$this->input->post('id');
		$user->firstname=$this->input->post('fname');
		$user->lastname=$this->input->post('lname');
		$user->office=$this->input->post('office');
		$user->department=$this->input->post('dept');
		$user->organization=$this->input->post('org');
		$user->contact_num=$this->input->post('contnum');
		$user->username=$this->input->post('username');
		$user->password=$this->input->post('pass');
		$user->email=$this->input->post('email');
		$user->datetime_created=$this->input->post('datecreated');
		$user->designation_fkid=$this->input->post('desig');

		$user->status='1';
		
		$user->datetime_modified=NOW();

		$result=$p->changependingtoactive();
			 if(!$result){
            echo mysqli_error($result);
        }
        else{
            redirect('Director/manage_accounts', 'refresh');
            
        }
	}

	public function addReviewer(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        
        $result = $p->addReviewer($this->input->post('proposal_id'), $this->input->post('reviewer1'), $this->input->post('reviewer2'));
		
        if(!$result){
				$this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Director/home'), "refresh");
		}else{
				$this->session->set_flashdata('success_msg',
					'<strong>Proposal Distributed to Reviewers!</strong> You have successfully passed the proposal for reviewing.');
				
				$data['email'] = $this->Proposal_AB->getReviewerEmail1($this->input->post('proposal_id'), $this->input->post('reviewer1'), $this->input->post('reviewer2'));

				$data2['email'] = $this->Proposal_AB->getReviewerEmail2($this->input->post('proposal_id'), $this->input->post('reviewer1'), $this->input->post('reviewer2'));

				$this->load->library('email');
				$config = Array('protocol' => 'smtp',
				'smtp_host'    => 'ssl://smtp.gmail.com',
				'smtp_port'    => '465',
				'smtp_timeout' => '7',
				'smtp_user'    => 'donotreply24xD@gmail.com',
				'smtp_pass'    => 'wawa2015',
				'charset'    => 'utf-8',
				'mailtype' => 'text', // or html
				'validation' => TRUE // bool whether to validate email or not
				);
				$list = array($data['email'], $data2['email']);
				      
				$this->email->initialize($config);
				$this->email->from('donotreply24xD@gmail.com', 'CES PPMS');
				//$this->email->to($data['email']); 
				$this->email->to($list);
				$this->email->subject('CES Proposal Notification From Representative');
				$this->email->message('Good day!');
				$this->email->set_newline("\r\n");   
				$result = $this->email->send();  
			  	if(!$result)
			  	{
			  		// mail sent
			  		echo "sayup";
	        		//redirect(site_url());
			  	}
			  	else
			  	{
			  		echo "hey";
	        		//redirect(site_url());
			  	}
				//redirect(site_url('Director/home'), "refresh");
		}
	}

	public function sendToReviewer()
	{
		$this->addReviewer();
		$this->load->model('Proposal_AB');

		$data['email'] = $this->Proposal_AB->getRreviewerEmail($this->input->post('proposal_id'), $this->input->post('reviewer1'), $this->input->post('reviewer2'));

		if(!$data['email']){
			echo "SAD";
		}else{
			echo $data['email'];
		}
	}
	public function getForEndorsementDirector()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadProposalsDoneReview(); 
		$results = array();
		foreach($proplist as $prop)
		{
			$user_fullname = $this->Proposal_AB->getUser($prop->user_id);
			$pair = $this->Proposal_AB->getCommittee($prop->proposal_id);
			$data = array(
					"prop_details"=>$prop,
					"user"=>$user_fullname[0]->firstname." ".$user_fullname[0]->lastname." ",
					"pair"=>$pair[0]->firstname." ".$pair[0]->lastname." & ".$pair[1]->firstname." ".$pair[1]->lastname,
					"reviewer1"=>$this->session->user_id,
					"reviewer2"=>$pair[0]->reviewer_id
			);
			array_push($results,$data);
		}
		echo json_encode($results);
	}

	public function create_account() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$this->load->helper('form');
		$this->load->view('director/director_create_account', $data);
	}

	public function choose_review_committee() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		$proposal_id = $this->uri->segment(3);

		$this->load->model('Proposal_AB');

		$data["proposal"] = $this->Proposal_AB->getProposalDetails($proposal_id);
		$data["proposal_id"]= $proposal_id;
		$proposal = $data["proposal"];
		$data['specprop']=(object) json_decode($proposal[0]->proposal_json_format,FALSE);
		//echo $proposal[0]->proposal_id;
		//echo $data['specprop']->title;
		//print_r ($data["proposal"]);
		//$data['specprop']=$this->Proposal_AB->viewSpecificprop($proposal_id);
		$data['comments']=$this->Proposal_AB->LoadComments($proposal_id);
		//$data['assessor']=$this->Proposal_AB->validate_assessor();
		//$data['validate_prop']=$this->Proposal_AB->viewScores($proposal_id);


		
		$data['userlist']=$this->Proposal_AB->LoadAllCoordinator(); 
		//$data['proponent']=$this->Proposal_AB->viewSpecificprop($proposal_id);
		$data['assessor']=$this->Proposal_AB->validate_assessor();

		$this->load->view('director/choose_review_committee', $data);
	}

	public function profile_settings() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 2)
		{
			$data = array();

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role'] = $this->session->designation;

			$this->load->model('User');
			$user = new User();

			$user->user_id = $this->session->user_id;
					
			$data['user'] = $user->get_user();

			$this->load->view('Director/director_setting', $data);
		}else{
			redirect(site_url());
		}
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
						
					redirect(site_url('Director/profile_settings'), "refresh");

				} else {
				  	echo "<meta http-equiv='refresh' content='2; url=" . site_url('Director/profile_settings') . "'>";
				  	echo "<h3>No changes made.</h3>";
				}
				
			}
		}

	}
	public function getToBeEndorsedProposal()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadProposalsDirector(); 
		echo json_encode($proplist);
	}
	
}
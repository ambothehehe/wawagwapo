<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Revision history
* 2017-26-11 Home() - Added a session checker for the appropriate
* access per page, designation_fkid will be used to check the
* appropriate account access.
*/

class Coordinator extends CI_Controller
{

	public function home() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 5)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['office']	= $this->session->office;
			$data['user_id']	= $this->session->user_id;

			$this->load->model('Proposal_AB');
			
			$data['proplist']=$this->Proposal_AB->LoadProposals_forcoordinators();
			$data['revcominfo']=$this->Proposal_AB->LoadAllCoordinator();
			$data['assessor']=$this->Proposal_AB->validate_assessor();  

			$this->load->view('coordinator/coordinator_proposal', $data);
		} else{
			redirect(site_url());
		}
	}

	public function send()
	{	
		$this->load->model('Proposal_AB');
		
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 5)
		{
			$data['email']=$this->Proposal_AB->getDeanEmail($this->session->office,3);
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
			      
			$this->email->initialize($config);
			$this->email->from('donotreply24xD@gmail.com', 'CES PPMS');
			$this->email->to($data['email']); 
			//$this->email->to('mariaclairetan143@gmail.com');
			$this->email->subject('CES Proposal Notification FROM COORDINATOR');
			$this->email->message('Good day! Mr. Coordinator has done reviewing the proposal. You may now view');
			$this->email->set_newline("\r\n");   
			$result = $this->email->send();  
		  	if(!$result)
		  	{
		  		// mail sent
		  		
        		redirect(site_url());
		  	}
		  	else
		  	{
		  		
        		redirect(site_url());
		  	}
		  }
		}

		public function sendToAdmin()
	{	
		$this->load->model('Proposal_AB');
		
		//if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 5){
			$data['email']=$this->Proposal_AB->getAdminEmail(2);
			
			/*?>
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
			      
			$this->email->initialize($config);
			$this->email->from('donotreply24xD@gmail.com', 'CES PPMS');
			$this->email->to($data['email']); 
			//$this->email->to('mariaclairetan143@gmail.com');
			$this->email->subject('CES Proposal Notification FROM COORDINATOR');
			$this->email->message('Good day! Mr. Coordinator has done reviewing the proposal. You may now view');
			$this->email->set_newline("\r\n");   
			$result = $this->email->send();  
		  }*/
		}



	public function reports() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 5)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['user_id'] = $this->session->user_id;
			$data['office']	= $this->session->office;
			$data['organization']	= $this->session->organization;

			$this->load->model('Reports');

			$data['coord_d']=$this->Reports->LoadReport_dCOORD($data['office']);
			$data['coord_e']=$this->Reports->LoadReport_eCOORD($data['office']);

			$data['mycoord_d']=$this->Reports->LoadReport_dmyCOORD($data['office'], $data['user_id']);
			$data['mycoord_e']=$this->Reports->LoadReport_emyCOORD($data['office'], $data['user_id']);

			$this->load->view('coordinator/coordinator_report', $data);
		}else{
			redirect(site_url());
		}
	}

	public function viewform_e() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['organization']	= $this->session->organization;
		$this->load->model('Reports');
		// $data=array();
		$data['repaps']=$this->Reports->LoadReport_eCOORD();

		$this->load->view('coordinator/other_reports', $data);
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
		$data['organization']	= $this->session->organization;
		$data['creators_school'] = $this->session->office;

		$this->load->model('Reports');

		$data['repe']=$this->Reports->viewReport_e($reporte_id);
		
		$this->load->view("forms/form_e_report_coord", $data);
	}

	public function loadreportdmyreport(){
		$reportd_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;

		$this->load->model('Reports');

		$data['reps']=$this->Reports->viewReport_d($reportd_id);
		
		$this->load->view("forms/form_d_report_noProceed", $data);
	}

	public function loadreportemyreport(){
		$reporte_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['organization']	= $this->session->organization;
		$data['creators_school'] = $this->session->office;

		$this->load->model('Reports');

		$data['repe']=$this->Reports->viewReport_e($reporte_id);
		
		$this->load->view("forms/form_e_report_noProceed", $data);
	}


	public function addScores(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();

        $p->user_fkid= $this->input->post('user_id');
        $p->proposal_header_fkid= $this->input->post('proposal_id');
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
        $p->total_percentage_forma= $add_allscores_forma/30*100;

        $add_allscores_formb = $this->input->post('ppaprof_area') + $this->input->post('signifmatrix_area') + $this->input->post('implics_area') + $this->input->post('linkageprof_area');
        $p->total_percentage_formb= $add_allscores_formb/30*100;

        $add_allscores_formc = $this->input->post('progpro_c');
        $p->total_percentage_formc= $add_allscores_formc/25*100;

        $result=$p->saveReviewScores();
        
			
			if(!$result){ 
                echo mysqli_error($result);
            }
            else{
               //redirect('Coordinator/home','refresh');
            }
			
		}

	public function settings() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		$this->load->view('coordinator/coordinator_setting', $data);
	}

	public function create_proposal() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		$this->load->view('coordinator/coordinator_create_proposal', $data);
	}

	public function create_report() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		$this->load->view('coordinator/coordinator_create_report', $data);
	}

	public function form_a() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname']	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;

		if(isset($_GET['proposal_id'])){
			$this->load->model('Proposal_AB');
			$data["proposal"] = $this->Proposal_AB->getProposalDetails($_GET['proposal_id']);
		    $data["proposal_id"] = $_GET['proposal_id'];
		}

		$this->load->view('forms/form_a_coord', $data);
	}

	public function form_a_coord() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname']	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;

		if(isset($_GET['proposal_id'])){
			$this->load->model('Proposal_AB');
			$data["proposal"] = $this->Proposal_AB->getProposalDetails($_GET['proposal_id']);
		    $data["proposal_id"] = $_GET['proposal_id'];
		}

		$this->load->view('forms/form_a_coord', $data);
	}

	public function form_a_1() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;
	
		if(isset($_GET['proposal_id'])){
			$this->load->model('Proposal_AB');
			$data["proposal"] = $this->Proposal_AB->getProposalDetails($_GET['proposal_id']);
		    $data["proposal_id"] = $_GET['proposal_id'];
		}
		if(isset($_GET['form_type']))
		{
			$data['form_type'] = 1;
		}else{
			$data['form_type'] = 2;
		}
		//echo $data['form_type'];
		$this->load->view('forms/form_a1', $data);
	}

	public function form_a_1_coord() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;
	
		if(isset($_GET['proposal_id'])){
			$this->load->model('Proposal_AB');
			$data["proposal"] = $this->Proposal_AB->getProposalDetails($_GET['proposal_id']);
		    $data["proposal_id"] = $_GET['proposal_id'];
		}
		if(isset($_GET['form_type']))
		{
			$data['form_type'] = 1;
		}else{
			$data['form_type'] = 2;
		}
		//echo $data['form_type'];
		$this->load->view('forms/form_a1_coord', $data);
	}

	public function fEditFormAB_p1() {
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
		$data['user_id']	= $this->session->user_id;
		$data['user_office']	= $this->session->office;
		$data['user_dept']	= $this->session->department;
		$data['organization']	= $this->session->organization;
	
		if(isset($_GET['proposal_id'])){
			$this->load->model('Proposal_AB');
			$data["proposal"] = $this->Proposal_AB->getProposalDetails($_GET['proposal_id']);
		    $data["proposal_id"] = $_GET['proposal_id'];
		}
		if(isset($_GET['form_type']))
		{
			$data['form_type'] = 1;
		}else{
			$data['form_type'] = 0;
		}

		$this->load->view('forms/form_c', $data);
	}
	
	public function form_d() {

		$this->load->model('Reports');

		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department'] = $this->session->department;
		$data['creator_id'] = $this->session->user_id;
		$data['creators_school']	= $this->session->office;

		$proposal_array = array();

		$proposals2 = $this->Reports->get_title($data['creator_id']);
		
		if(($proposals2)){
			foreach($proposals2 as $prop)
			{

				$data2 = array("proposalJsonDetails" => (object)json_decode($prop->proposal_json_format),
							  "propdetails"=>$prop);
											
				array_push($proposal_array, $data2);
			}

			$data["proposals"] = $proposal_array;
			// $datum['titles']= $this->Reports->get_title();
			//echo $this->session->designation;
			//var_dump($proposal_array);

			$this->load->view('forms/form_d_coord', $data);
		}else{
			?><script type="text/javascript">alert("NO AVAILABLE PROPOSALS TO BE REPORTED");</script><?php
			redirect(site_url('Coordinator/create_report'), "refresh");
		}
	}


	public function form_e() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creator_id']	= $this->session->user_id;
		$data['creators_school']	= $this->session->office;
		
		$this->load->view('forms/form_e', $data);
	}

	public function addFormd() {

				$data['report_id'] = $this->session->proposal_id;
				$data['fname'] = $this->session->firstname;
				$data['lname'] = $this->session->lastname;
				$data['department'] = $this->session->department;
				$data['creator_id'] = $this->session->user_id;

				// $data['titles'] = $this->Reports->get_title();
				// // $datum['titles']= $this->Reports->get_title();
				// $this->load->view('forms/form_d', $data);
				// var_dump($data);
				// $this->template->show('title', $datum);
				$this->load->model('Reports');
				$this->load->model('Proposal_AB');

				$p = new Reports();

				$p->fd_id=$this->input->post('id'); // para sa TITLE
				$p->fd_school=$this->input->post('fd_school'); // para sa SCHOOL
				$p->fd_dept=$this->input->post('fd_dept'); // para sa DEPARTMENT
				$p->fd_venue=$this->input->post('fd_venue'); // para sa VENUE

				$p->report_status = 5;

				$p->date_start=$this->input->post('act_duration1'); //INCLUSIVE DATE START
				$p->date_end=$this->input->post('act_duration2'); //INCLUSIVE DATE END!
				$p->introduction=$this->input->post('introduction');
				$p->participants_partners_and_beneficiaries=$this->input->post('participants_partners_and_beneficiaries');
				$p->perceived_by_beneficiaries=$this->input->post('perceived_by_beneficiaries');
				$p->perceived_by_students=$this->input->post('perceived_by_students');
				$p->perceived_by_faculty=$this->input->post('perceived_by_faculty');
				$p->challenges_encountered=$this->input->post('challenges_encountered');

				// passing the info of creator
				$p->who_created=$this->input->post('who_created');
				$p->creators_department=$this->input->post('creators_department');
				$p->creator_id=$this->input->post('creator_id');
				$p->creators_school=$this->input->post('creators_school');
				$specprop = $this->Proposal_AB->getProposalDetails($p->fd_id);
				$proposal_json_format = (object)json_decode($specprop[0]->proposal_json_format);
				$p->fd_title = $proposal_json_format->title;

				$result=$p->AddFormD();

				$result1=$p->isreported($p->fd_id);

				$this->load->model('Proposal_AB');

			$data['email']=$this->Proposal_AB->getDeanEmail($this->session->office,3);
			
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
			      
			$this->email->initialize($config);
			$this->email->from('donotreply24xD@gmail.com', 'CES PPMS');
			$this->email->to($data['email']); 
			//$this->email->to('mariaclairetan143@gmail.com');
			$this->email->subject('CES Proposal Notification FROM chair');
			$this->email->message('Good day! Mr./Ms. Coordinator has done reviewing the Report. You may now view');
			$this->email->set_newline("\r\n");   
			$result = $this->email->send();  
		  	if(!$result){
		  		// mail sent
        		//redirect(site_url());
		  	}else{
        		//redirect(site_url());
		  	}

				if(!$result){
					$this->session->set_flashdata('error_msg',
						'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

					redirect(site_url('Coordinator/reports'), "refresh");
				}
				else{
					$this->session->set_flashdata('success_msg',
						'<strong>Report Created!</strong> You have successfully created Report D.');
					
					redirect(site_url('Coordinator/reports'), "refresh");
				}
				//echo "<br/>".$this->input->post('id');
	}

	public function getToBeEndorsedProposal()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadProposalsCoordinator($this->session->office); 
		//echo $this->session->office;
		echo json_encode($proplist);
	}

	public function getToBeEndorsedReport_E()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadReportECoordinator($this->session->office); 
		echo ($this->session->office);
		//echo $this->session->office;
		echo json_encode($proplist);
	}
	
	public function getProposalForReview()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->getForReviewProposals($this->session->user_id);
		$results = array();
		
		foreach($proplist as $prop)
		{
			$user_fullname = $this->Proposal_AB->getUser($prop->user_id);
			$pair = $this->Proposal_AB->getCommitteePair($prop->proposal_id,$this->session->user_id);
			$data = array(
					"prop_details"=>$prop,
					"user"=>$user_fullname[0]->firstname." ".$user_fullname[0]->lastname." ",
					"pair"=>$pair[0]->firstname." ".$pair[0]->lastname,
					"reviewer1"=>$this->session->user_id,
					"reviewer2"=>$pair[0]->reviewer_id
			);
			array_push($results,$data);
		}
		echo json_encode($results);
	}
	
	

	//add form e report throught submitting
			public function coord_addForme() {
			$this->load->model('Reports');
			$p = new Reports();
			
			$p->title=$this->input->post('title_of_program');
			$p->unit_responsible=$this->input->post('unit_responsible');
			$p->program_duration=$this->input->post('program_duration');

			$p->report_status = 5;


			// $actarr= array(
			// 'acttitle' => $this->input->post('act_title'), 
			// 'incdate' => $this->input->post('incdate'),
			// 'totalhours' => $this->input->post('totalhours') 
			// 	);
			$p->act_title =implode(" , ", $this->input->post('act_title'));
			$p->incdate =implode(" , ", $this->input->post('incdate'));
			$p->totalhours =implode(" , ", $this->input->post('totalhours'));
			
			$p->final_target_groups=$this->input->post('final_target_groups');
			$p->collaborators=$this->input->post('collaborators');
			$p->background_of_issue=$this->input->post('background_of_issue');
			$p->major_achievements_of_program=$this->input->post('major_achievements_of_program');
			$p->results_of_activities_to_goal=$this->input->post('results_of_activities_to_goal');
			$p->overall_strategy_adopted=$this->input->post('overall_strategy_adopted');
			$p->observed_impact_of_program=$this->input->post('observed_impact_of_program');
			$p->challenges_and_measures_undertaken=$this->input->post('challenges_and_measures_undertaken');
			$p->good_practices=$this->input->post('good_practices');
			$p->lessons_learned_from_program=$this->input->post('lessons_learned_from_program');
			$p->unit_relationship=$this->input->post('unit_relationship');
			$p->other_links_gained_from_program=$this->input->post('other_links_gained_from_program');
			$p->witness_to_the_word=$this->input->post('witness_to_the_word');
			$p->ways_forward=$this->input->post('ways_forward');

// GOALS AREA
			$p->goal_title =implode(" , ", $this->input->post('goal_title'));
			$p->spec_obj =implode(" , ", $this->input->post('spec_obj'));
			$p->spec_act =implode(" , ", $this->input->post('spec_act'));
			$p->outputs =implode(" , ", $this->input->post('outputs'));

//USC PARTNERS AND COLLABS AREA
			$p->intraname =implode(" , ", $this->input->post('intraname'));
			$p->intracontribs =implode(" , ", $this->input->post('intracontribs'));
			$p->extraname =implode(" , ", $this->input->post('extraname'));
			$p->extracontribs =implode(" , ", $this->input->post('extracontribs'));

			// passing the info of creator
			$p->who_created=$this->input->post('who_created');
			$p->creators_department=$this->input->post('creators_department');
			$p->creators_organization=$this->input->post('creators_organization');
			$p->creator_id=$this->input->post('creator_id');
			$p->creators_school=$this->input->post('creators_school');

			$result=$p->AddFormE();

			$data['email']=$this->Proposal_AB->getDeanEmail($this->session->office,3);
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
			      
			$this->email->initialize($config);
			$this->email->from('donotreply24xD@gmail.com', 'CES PPMS');
			$this->email->to($data['email']); 
			//$this->email->to('mariaclairetan143@gmail.com');
			$this->email->subject('CES Proposal Notification FROM COORDINATOR');
			$this->email->message('Good day! Mr./Ms. Coordinator has submitted a report. You may now view');
			$this->email->set_newline("\r\n");   
			$result = $this->email->send();  
		  	if(!$result)
		  	{
		  		// mail sent
        		//redirect(site_url());
		  	}
		  	else
		  	{
        		//redirect(site_url());
		  	}

			if(!$result){
			echo mysqli_error($result);
				redirect(site_url('Coordinator/reports'), "refresh");
			}
			else{
				$this->session->set_flashdata('success_msg',
					'<strong>Report Created!</strong> You have successfully created Report E.');
				
				redirect(site_url('Coordinator/reports'), "refresh");
			}

			}

	public function profile_settings() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 5)
		{
			$data = array();
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role'] = $this->session->designation;
			$data['department'] = $this->session->department;
			$data['office'] = $this->session->office;
			$this->load->model('User');
			$user = new User();
			$user->user_id = $this->session->user_id;
			$data['user'] = $user->get_user();
			$this->load->view('Coordinator/coordinator_setting', $data);
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
						
						redirect(site_url('Coordinator/profile_settings'), "refresh");

				  	} else {
				  	  echo "<meta http-equiv='refresh' content='2; url=" . site_url('Coordinator/profile_settings') . "'>";
				  	  echo "<h3>No changes made.</h3>";
				  	}
				  }
				}
			}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Revision history
* 2017-26-11 Home() - Added a session checker for the appropriate
* access per page, designation_fkid will be used to check the
* appropriate account access.
*/

class Faculty extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function home() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 9)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['organization'] = $this->session->organization;
			$data['user_id']= $this->session->user_id;

			
			$this->load->model('Proposal_AB');

			//$data['proplist']=$this->Proposal_AB->LoadProposals(); 
			$data['proplist']=$this->Proposal_AB->loadDraftProposal($this->session->user_id);
			$data['submitted_prop'] = $this->Proposal_AB->loadSubmittedProposal($this->session->user_id);
			$data['assessor']=$this->Proposal_AB->validate_assessor();
			
			$this->load->view('faculty/faculty_proposal', $data);
		}else{
			redirect(site_url());
		}
	}

	public function proposals_to_be_noted() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 9)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['organization']	= $this->session->organization;
			$data['chairdept']	= $this->session->department;
			
			$this->load->model('Proposal_AB');
			
			$data['assessor']=$this->Proposal_AB->validate_assessor();
			$data['proplist']=$this->Proposal_AB->LoadProposalsChair($this->session->department); 
			$this->load->view('faculty/faculty_proposals_to_be_noted', $data);
		}else{
			redirect(site_url());
		}
	}

	public function getToBeNotedProposal()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadProposalsFac($this->session->department, $this->session->organization, $this->session->user_id); 
		echo json_encode($proplist);
	}

	public function send()
	{	
		$this->load->model('Proposal_AB');
		
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 9)
		{
			//$data['email']=$this->Proposal_AB->getChairEmail($this->session->department,4);
			echo $data['email'];
			?><script> alert("yuck fou");</script><?php
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
			//$this->email->to($data['email']); 
			$this->email->to('mariaclairetan143@gmail.com');
			$this->email->subject('CES Proposal Notification');
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
		}else if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 5)
		{
			echo $_SESSION['designation_fkid'];
			
			$data['email']=$this->Proposal_AB->getDeanEmail($this->session->office,3);
			
			echo $data['email'];
			?><script> alert("yuck fou");</script><?php
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
			$this->email->subject('CES Proposal Notification');
			$this->email->message('Good day!');
			$this->email->set_newline("\r\n");   
			$result = $this->email->send();  
		  	if(!$result)
		  	{
		  		// mail sent
		  		echo "sayup";
        		redirect(site_url());
		  	}
		  	else
		  	{
		  		echo "hey";
        		redirect(site_url());
		  	}
		}
	}

	public function reports() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 9)
		{	
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['department']	= $this->session->department;
			$data['organization']	= $this->session->organization;
			$data['user_id']	= $this->session->user_id;


			$this->load->model('Reports');
			

			$data['list_d']=$this->Reports->LoadReport_d();
			$data['list_e']=$this->Reports->LoadReport_e();
			
			$this->load->view('faculty/faculty_report', $data);
		}else{
			redirect(site_url());
		}
	}

	public function create_proposal() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['organization']	= $this->session->organization;
		$data['user_id']= $this->session->user_id;

		
		$this->load->view('faculty/faculty_create_proposal', $data);
	}

	public function create_report() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;

		

		$this->load->view('faculty/faculty_create_report', $data);
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
		$this->load->view('forms/form_a', $data);
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

		$this->load->view('forms/form_c', $data);
	}
			
			



	

//for form d create report form D
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

		$this->load->view('forms/form_d', $data);
	}

public function formd_titles(){
	$this->load->model('Reports');
	$data['creator_id'] = $this->session->user_id;
    $data['titles'] = $this->Reports->get_title($data['creator_id']);
	
   // $this->template->show('title', $data);
   $this->load->view('forms/form_d', $data); 
}

//add form D report through submitting
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

			$p->report_status = 3;

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
			//echo "<br/>".$p->fd_title;

			$result=$p->AddFormD();

			$result1=$p->isreported($p->fd_id);

			if(!$result){
				$this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Faculty/reports'), "refresh");
			}
			else{
				$this->session->set_flashdata('success_msg',
					'<strong>Report Created!</strong> You have successfully created Report D.');
				
				redirect(site_url('Faculty/reports'), "refresh");
			}
			//echo "<br/>".$this->input->post('id');
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
		$data['creators_school'] = $this->session->office;
		$data['user_id'] = $this->session->user_id;

		$data['form_type'] = $this->session->form_type;

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

	


		//for form d
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

//for form e
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

//for form e create report form e
	public function form_e() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;
		$data['creator_id'] = $this->session->user_id;

		$this->load->view('forms/form_e', $data);
	}

//for form d view report
	public function viewform_d() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$this->load->model('Reports');
		// $data=array();
		$data['repaps']=$this->Reports->LoadReport_d(); 
		$this->load->view('faculty/rep_report_d', $data);
	}

//for form e view report
	public function viewform_e() {
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		$this->load->model('Reports');
		// $data=array();
		$data['repaps']=$this->Reports->LoadReport_e();
		$this->load->view('faculty/rep_report_e', $data);
	}
//add form e report throught submitting
	public function addForme() {
		$this->load->model('Reports');
		$p = new Reports();
			
		$p->title_of_program=$this->input->post('title_of_program');
		$p->unit_responsible=$this->input->post('unit_responsible');
		$p->program_duration=$this->input->post('program_duration');

		$p->report_status = 3;


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
			$p->creator_id=$this->input->post('creator_id');
			$p->creators_school=$this->input->post('creators_school');

			$result=$p->AddFormE();
			if(!$result){
			$this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Faculty/reports'), "refresh");
			}
			else{
			$this->session->set_flashdata('success_msg',
					'<strong>Report Created!</strong> You have successfully created Report E.');
				
				redirect(site_url('Faculty/reports'), "refresh");
			}

			}

		//for form e fname lname
		public function form_e_update() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_e_update', $data);
	}

//FOR form E 
		public function viewEditForme(){
			$data['fname'] = $this->session->firstname;
			$data['lname'] = $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['department'] = $this->session->department;
			$this->load->model('Reports');
	        $p= new Reports();
	        $p->id=$this->input->post('id');
	        // $data= array();
	        $data['results_e']=$p->getOneForme();
	        $this->load->view('forms/form_e_update', $data);
		}


//FOR form D 
		public function viewEditFormd(){
			$data['fname'] = $this->session->firstname;
			$data['lname'] = $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['department'] = $this->session->department;
			$data['office'] = $this->session->office;
			$this->load->model('Reports');
	        $p= new Reports();
	        $p->id=$this->input->post('id'); /*gkan ni sa id near the edit button*/
	        // $data= array();

	        $data['result_d']=$p->getOneFormd();
	        $this->load->view('forms/form_d_update', $data);
		}

		public function updateForme(){
		 	$data['fname'] = $this->session->firstname;
			$data['lname'] = $this->session->lastname;
			$data['role']	= $this->session->designation;
			$this->load->model('Reports');
			$p= new Reports();

        	$p->fe_id=$this->input->post('fe_id');
        	$p->title_of_program=$this->input->post('title_of_program');
			$p->unit_responsible=$this->input->post('unit_responsible');
			$p->program_duration=$this->input->post('program_duration');

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

			
        $result=$p->saveChanges_e();
        


        if(!$result){
            $this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Faculty/reports'), "refresh");
        }
        else{
           $this->session->set_flashdata('success_msg',
					'<strong>Report Updated!</strong> You have successfully updated Report E.');
				
				redirect(site_url('Faculty/reports'), "refresh");
            
        }
        
   }


   public function updateFormd() {
			$this->load->model('Reports');
			// $data['titles'] = $this->Reports->get_title();
			// // $datum['titles']= $this->Reports->get_title();
			// $this->load->view('forms/form_d', $data);
			// var_dump($data);
			// $this->template->show('title', $datum);

			$p = new Reports();
			$p->fd_id=$this->input->post('fd_id');
			$p->fd_title=$this->input->post('fd_title'); // para sa TITLE
			$p->fd_school=$this->input->post('fd_school'); // para sa SCHOOL
			$p->fd_dept=$this->input->post('fd_dept'); // para sa DEPARTMENT
			$p->fd_venue=$this->input->post('fd_venue'); // para sa VENUE
			$p->report_status=$this->input->post('report_status');
			$p->date_start=$this->input->post('date_start'); //INCLUSIVE DATE START
			$p->date_end=$this->input->post('date_end'); //INCLUSIVE DATE END!
			$p->introduction=$this->input->post('introduction');
			$p->participants_partners_and_beneficiaries=$this->input->post('participants_partners_and_beneficiaries');
			$p->perceived_by_beneficiaries=$this->input->post('perceived_by_beneficiaries');
			$p->perceived_by_students=$this->input->post('perceived_by_students');
			$p->perceived_by_faculty=$this->input->post('perceived_by_faculty');
			$p->challenges_encountered=$this->input->post('challenges_encountered');

			// passing the info of creator
			$p->who_created=$this->input->post('who_created');
			$p->creators_department=$this->input->post('creators_department');

			$result=$p->saveChanges_d();
		if(!$result){
            $this->session->set_flashdata('error_msg',
					'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Faculty/reports'), "refresh");
        }
        else{
        	 /* ?><script>alert("POTANGINAMO BOBO");</script><?php*/
             $this->session->set_flashdata('success_msg',
					'<strong>Report Updated!</strong> You have successfully updated Report D.');
				
				redirect(site_url('Faculty/reports'), "refresh");
            
        }
					}



   public function deleteForm_e(){
   	$this->load->model('Reports');

   $this->Reports->row_delete_e($this->input->post('id'));
   
   $this->session->set_flashdata('success_msg',
					'<strong>Report Deleted!</strong> You have successfully deleted a report.');
				
	redirect(site_url('Faculty/reports'), "refresh");
	

   }

    public function deleteForm(){
   	$this->load->model('Proposal_AB');

   $this->Proposal_AB->row_delete($this->input->post('id'));
   $this->session->set_flashdata('success_msg',
					'<strong>Report Deleted!</strong> You have successfully deleted a proposal.');
				
	redirect(site_url('Faculty/home'), "refresh");
	

   }

    public function deleteForm_d(){
   	$this->load->model('Reports');

   $this->Reports->row_delete_d($this->input->post('id'));
   $this->session->set_flashdata('success_msg',
					'<strong>Report Deleted!</strong> You have successfully deleted a report.');
				
	redirect(site_url('Faculty/reports'), "refresh");
	

   }

   public function deleteForm_proposals(){
   	$this->load->model('Reports');

   $this->Reports->row_delete_proposals($this->input->post('id'));
   $this->session->set_flashdata('success_msg',
					'<strong>Report Deleted!</strong> You have successfully deleted a proposal.');
				
	redirect(site_url('Faculty/home'), "refresh");
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

	public function sample_c() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_c', $data);
	}

	public function sample_report1() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_d', $data);
	}

	public function sample_report2() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_e', $data);
	}

	public function view_form() {

		if ($this->input->get()) {
			$form_data = $this->input->get(NULL, true);

			$this->load->model('Proposal');
			$proposal = new Proposal;

			$fd_id = $this->encryption->decrypt($form_data['proposal']);
			$proposal->proposal_header_id 	= $fd_id;
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
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 9)
		{
			$data = array();

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role'] = $this->session->designation;

			$this->load->model('User');
			$user = new User();

			$user->user_id = $this->session->user_id;
			
			$data['user'] = $user->get_user();

			$this->load->view('Faculty/faculty_setting', $data);
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
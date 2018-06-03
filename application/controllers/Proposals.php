<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* January 13, 2016
* developers: Bjarne Galendez, Leigh Mabano, 
*             Zoreck Mahusay, Amanda Quinal
*/
class Proposals extends CI_Controller
{
	public function process_forms() {

		// get proposal form values
		$form = array();
		$form = $this->input->post(NULL, TRUE);

		// pass form values to different proposal handlers
		$submit = $form['submit'];

		if($submit === 'save_a') {
			$this->save_formA($form);
		}

		if($submit === 'submit_a') {
			$this->save_formA($form);
		}

		if($submit === 'next_a') {
			$this->save_formA($form);
		}

		if($submit === 'save_b') {
			$this->save_formB($form);
		}

		if($submit === 'submit_b') {
			$this->save_formB($form);
		}

		if($submit === 'save_c') {
			$this->save_formC($form);
		}

		if($submit === 'submit_c') {
			$this->save_formC($form);
		}
	}

	private function for_proposal_header($form) {

		$status = NULL;

		// instantiate model
		$this->load->model('Proposal');
		$proposal = new Proposal();

		//get and ready form values into variables
		$proposal->user_id 									= $this->session->user_id;
		$proposal->form_type 								= $form['form_type'];
		$proposal->title 									= $form['title'];
		$proposal->school									= $form['school'];
		$proposal->department 								= $form['department'];
		$proposal->inclusive_date							= $form['inclusive_date1'] . "-" . $form['inclusive_date2'];
		$proposal->venue									= $form['venue'];
		
		if ($form['submit'] === 'save_a' || $form['submit'] === 'save_b' || 
			$form['submit'] === 'save_c' || $form['submit'] === 'next_a') {
			$proposal->form_completeness 					= 1;
		}

		if ($form['submit'] === 'submit_a' || $form['submit'] === 'submit_b' || $form['submit'] === 'submit_c') {
			$proposal->form_completeness 					= 3;
		}		

		// save proposal header
		$status = $proposal->create_proposal();

		return $status;
	}

	private function for_outline_of_activities($form) {

		// instantiate into proper propsal models
		if ($form['form_type'] === 'a') {
			$this->load->model('Proposal_A');
			$proposal = new Proposal_A();
		}

		if ($form['form_type'] === 'c') {
			$this->load->model('Proposal_A');
			$proposal = new Proposal_A();
		}


		// get proposal id
		$proposal_id = $proposal->get_last_created_proposal();

		foreach ($proposal_id as $key => $id) {
			$proposal->proposal_header_id = $id->id;
		}

		// for outline of activities
		for ($a=0; $a < count($form['activities']) ; $a++) {
			$proposal->outline_of_activities[] 	= array(
					'proposal_header_fkid'					=> $proposal->proposal_header_id,
					'tentative_date'						=> $form['tentative_date'][$a],
					'activities'							=> $form['activities'][$a],
					'participants_needed'					=> $form['participants_needed'][$a],
					'persons_incharge'						=> $form['persons_incharge'][$a]
				);
		}

		$status												= $proposal->create_outline_of_activities();

		return $status;
	}

	private function for_budgetary_requirements($form) {
		$checker					= NULL;
		$status 					= TRUE;
		$meals_and_snacks			= array();
		$transportation				= array();
		$materials					= array();

			// instantiate into proper proposal models
			if ($form['form_type'] === 'a') {
				$this->load->model('Proposal_A');
				$proposal = new Proposal_A();
			}

			if ($form['form_type'] === 'c') {
				$this->load->model('Proposal_A');
				$proposal = new Proposal_A();
			}

			// get proposal id
			$proposal_id										= $proposal->get_last_created_proposal();

			foreach ($proposal_id as $key => $id) {
				$proposal->proposal_header_id = $id->id;
			}

			// for budgetary requirements
			if (isset($form['a_particulars'], $form['a_frequency'], $form['a_quantity'], $form['a_amount'], $form['a_subtotal'])) {

				for ($a=0; $a < count($form['a_particulars']) ; $a++) {
					$proposal->meals_and_snacks[] 	= array(
						'proposal_header_fkid'					=> $proposal->proposal_header_id,
						'particulars'							=> $form['a_particulars'][$a],
						'frequency'								=> $form['a_frequency'][$a],
						'quantity'								=> $form['a_quantity'][$a],
						'amount'								=> $form['a_amount'][$a],
						'subtotal'								=> $form['a_subtotal'][$a]
					);
				}

				$checker 										= $proposal->create_meals_and_snacks();

				if ($checker === TRUE)
					$proposal->meals_and_snacks 				= $proposal->get_meals_and_snacks();

			}

			if (isset($form['b_particulars'], $form['b_frequency'], $form['b_quantity'], $form['b_amount'], $form['b_subtotal'])) {
				
				for ($b=0; $b < count($form['b_particulars']) ; $b++) {
					$proposal->transportation[] 	= array(
						'proposal_header_fkid'					=> $proposal->proposal_header_id,
						'particulars'							=> $form['b_particulars'][$b],
						'frequency'								=> $form['b_frequency'][$b],
						'quantity'								=> $form['b_quantity'][$b],
						'amount'								=> $form['b_amount'][$b],
						'subtotal'								=> $form['b_subtotal'][$b]
					);
				}

				$checker										= $proposal->create_transportation();
				
				if ($checker === TRUE)
					$proposal->transportation 					= $proposal->get_transportation();
			}

			if (isset($form['c_particulars'])) {
				
				for ($c=0; $c < count($form['c_particulars']) ; $c++) {
					$proposal->materials[] 	= array(
						'proposal_header_fkid'					=> $proposal->proposal_header_id,
						'particulars'							=> $form['c_particulars'][$c],
						'frequency'								=> $form['c_frequency'][$c],
						'quantity'								=> $form['c_quantity'][$c],
						'amount'								=> $form['c_amount'][$c],
						'subtotal'								=> $form['c_subtotal'][$c]
					);
				}

				$checker										= $proposal->create_materials();
				if ($checker === TRUE)
					$proposal->materials 						= $proposal->get_materials();
			}

			$proposal->budgetary_requirements 		= array(
						'proposal_header_fkid'					=> $proposal->proposal_header_id,
						'meals_and_snacks'						=> $proposal->meals_and_snacks,
						'transportation'						=> $proposal->transportation,
						'materials'								=> $proposal->materials,
						'grand_total'							=> $proposal->grand_total
					);

		return $status;
	}

	private function save_formA($form) {
		//declare variables
		$status 					= array();
		$outline_of_activities_ids 	= array();
		$budgetary_requirements_ids = array();

		// instantiate Proposal_A model
		$this->load->model('Proposal_A');
		$proposal = new Proposal_A();

		// create proposal header and get id
		$status[0] 											= $this->for_proposal_header($form);
		$proposal_id										= $proposal->get_last_created_proposal();

		foreach ($proposal_id as $key => $id) {
			$proposal->proposal_header_id = $id->id;
		}

		//get and ready form values into variables
		if (!empty($form['rationale_and_contextualization'])) 
			$proposal->rationale_and_contextualization			= $form['rationale_and_contextualization'];

		if (!empty($form['goal_objectives_and_outcomes'])) 
			$proposal->goal_objectives_and_outcomes				= $form['goal_objectives_and_outcomes'];

		if (!empty($form['participants_partners_and_beneficiaries'])) 
			$proposal->participants_partners_and_beneficiaries	= $form['participants_partners_and_beneficiaries'];

		
		// call functions and begin inserting form data
		if (isset($form['tentative_date']) || isset($form['activities']) || 
			isset($form['participants_needed']) || isset($form['persons_incharge'])) {
			$status[2]								= $this->for_outline_of_activities($form);
		}

		
		if (isset($form['a_particulars'], $form['a_frequency'], $form['a_quantity'], $form['a_amount'], $form['a_subtotal']) || 
			isset($form['b_particulars'], $form['b_frequency'], $form['b_quantity'], $form['b_amount'], $form['b_subtotal']) || 
			isset($form['c_particulars'], $form['c_frequency'], $form['c_quantity'], $form['c_amount'], $form['c_subtotal'])) {
			$proposal->grand_total								= $form['grand_total'];
			$status[2]								= $this->for_budgetary_requirements($form);
		}
		
		$status[3]								= $proposal->create_proposal_a();

		// for form a1 - go to next form
		if ($form['submit'] === 'next_a') {
			redirect(site_url('Representative/form_b'));
			return;
		}

		// check if proposal successfully saved and/or go back to representative home
		if (in_array(FALSE, $status, true)) {
			$this->session->set_flashdata('error_msg',
				'<strong>Warning!</strong> Something went wrong with the proposal you&#39;re trying to save.');
			redirect(site_url('Representative/home'));
			return;
		}

		$this->session->set_flashdata('success_msg',
			'<strong>Proposal Successfully Saved!</strong> You have successfully saved a proposal.');
		redirect(site_url('Representative/home'));
	}

	private function save_formB($form) {
		echo '<pre>' . print_r(get_defined_vars(), true) . '</pre>';
	}

	private function save_formC($form) {
		//declare variables
		$status 					= array();
		$outline_of_activities_ids 	= array();
		$budgetary_requirements_ids = array();
		$unit_from_usc				= array();

		// instantiate Proposal_C model
		$this->load->model('Proposal_C');
		$proposal = new Proposal_C();

		// create proposal header and get id
		$status[0] 								= $this->for_proposal_header($form);
		$proposal_id							= $proposal->get_last_created_proposal();

		foreach ($proposal_id as $key => $id) {
			$proposal->proposal_header_id = $id->id;
		}

		//get and ready form values into variables
		if (!empty($form['requester'])) {
			if (in_array('community', $form['requester'], true))
			$proposal->community		 		= $form['community'];

			if (in_array('organization', $form['requester'], true))
				$proposal->organization		 		= $form['organization'];

			if (in_array('institution', $form['requester'], true))
				$proposal->institution		 		= $form['institution'];

			if (in_array('unit from within usc', $form['requester'], true)) {
				if (in_array('ces office', $form['unit_from_usc'], true))
					array_push($unit_from_usc, "ces office");

				if (in_array('school of arts and sciences', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_arts_and_sciences']);

				if (in_array('school of architecture, fine arts and design', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_architecture_fine_arts_and_design']);

				if (in_array('school of education', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_education']);

				if (in_array('school of engineering', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_engineering']);

				if (in_array('school of business and economics', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_business_and_economics']);

				if (in_array('school of health care profession', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_health_care_profession']);

				if (in_array('school of law and governance', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['school_of_law_and_governance']);

				if (in_array('support unit', $form['unit_from_usc'], true))
					array_push($unit_from_usc, $form['support_unit']);
			}

			$proposal->unit_from_usc				= implode(',', $unit_from_usc);

			$proposal->requester 					= array(
					'community'								=> $proposal->community,
					'organization'							=> $proposal->organization,
					'institution'							=> $proposal->institution,
					'unit_from_usc'							=> $proposal->unit_from_usc
				);
		}

		if (!empty($form['mode_of_request'])) {
			$proposal->mode_of_request			 	= implode(',', $form['mode_of_request']);
			if (in_array('others', $form['mode_of_request']))
				$proposal->mode_of_request			.= ":" . $form['mode_of_request_others'];
		}
		
		if (!empty($form['nature_of_the_program'])) {
			$proposal->nature_of_the_program		= implode(',', $form['nature_of_the_program']);
			if (in_array('others', $form['nature_of_the_program']))
				$proposal->nature_of_the_program	.= ":" . $form['nature_of_the_program_others'];
		}
		
		if (!empty($form['program_area'])) 
			$proposal->program_area 				= implode(',', $form['program_area']);

		if (!empty($form['rationale_and_contextualization'])) 
			$proposal->rationale_and_contextualization			= $form['rationale_and_contextualization'];

		if (!empty($form['goal_objectives_and_outcomes'])) 
			$proposal->goal_objectives_and_outcomes				= $form['goal_objectives_and_outcomes'];

		if (!empty($form['participants_partners_and_beneficiaries'])) 
			$proposal->participants_partners_and_beneficiaries	= $form['participants_partners_and_beneficiaries'];
		
		

		// call functions and begin inserting form data
		if (!empty($proposal->requester)) {
			$status[1]								= $proposal->fill_requester();
			$requester_id							= $proposal->get_last_created_requester();
			foreach ($requester_id as $key => $id) {
				$proposal->requester_id = $id->id;
				// $proposal->requester_id=$id->proposal_header_fkid;
			}
		}
		
		if (!empty($form['tentative_date']) || !empty($form['activities']) || 
		!empty($form['participants_needed']) || !empty($form['persons_incharge'])) {
			$status[2]								= $this->for_outline_of_activities($form);
			$outline_of_activities_ids				= $proposal->get_outline_of_activities_by_proposal();
			for ($i=0; $i < count($outline_of_activities_ids); $i++) { 
				$proposal->outline_of_activities_ids .= $outline_of_activities_ids[$i]['id'] . ",";
			}
			// $proposal->outline_of_activities_ids	= implode(",", $outline_of_activities_ids);
			// var_dump($proposal->outline_of_activities_ids);
			
		}
			
		
		
		if (isset($form['a_particulars'], $form['a_frequency'], $form['a_quantity'], $form['a_amount'], $form['a_subtotal']) || 
			isset($form['b_particulars'], $form['b_frequency'], $form['b_quantity'], $form['b_amount'], $form['b_subtotal']) || 
			isset($form['c_particulars'], $form['c_frequency'], $form['c_quantity'], $form['c_amount'], $form['c_subtotal'])) {
			$status[3]								= $this->for_budgetary_requirements($form);
		}

		$status[4]										= $proposal->fill_proposal_c();

		if ($form['submit'] === 'submit_c') {
		return $status;
		}

		$this->session->set_flashdata('success_msg',
			'<strong>Proposal Successfully Saved!</strong> You have successfully saved a proposal.');
		redirect(site_url('Representative/home'));

	}

	public function update_formA() {

	}

	public function update_formB() {

	}

	public function update_formC() {

	}

	public function delete_proposal() {

	}

	public function approval_cycle() {

		// $this->load->model('Proposal');
		// $proposal

	}

	public function view_proposal_content(){
		$proposal_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;
		$data['user_id'] = $this->session->user_id;

		$this->load->model('Proposal_AB');
		$data['specprop']=$this->Proposal_AB->viewSpecificprop($proposal_id);
		$data['assessor']=$this->Proposal_AB->validate_assessor();

		$this->load->view("forms/final_form_ab", $data);
	}

	public function view_allscores(){
		$proposal_id= $this->uri->segment(3);
		$data["id"] = $this->uri->segment(3);
		$data['fname'] = $this->session->firstname;
		$data['lname'] = $this->session->lastname;
		$data['role']	= $this->session->designation;
		$data['department']	= $this->session->department;
		$data['creators_school']	= $this->session->office;
		$data['user_id'] = $this->session->user_id;

		$this->load->model('Proposal_AB');
		$data['allscores']=$this->Proposal_AB->viewAllScores2($proposal_id);
		$proposal = $this->Proposal_AB->getProposalDetails($proposal_id);
		$data['specprop'] = (object)json_decode($proposal[0]->proposal_json_format);
		$data["proposal"] = $proposal;
		//$data['prop_title']= $this->Proposal_AB->viewSpecificprop($proposal_id);
		$data['comments']=$this->Proposal_AB->LoadComments($proposal_id);
		//echo json_encode($data['allscores']);
		
		$this->load->view("forms/view_scores", $data);
	}
	
	public function save_addComs(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();

        $site_id = $this->input->post('prop_id');
        $p->proposal_header_fkid=$this->input->post('prop_id');
        $p->user_fkid=$this->input->post('user_id');
        $p->comment_category=$this->input->post('comment_category');
        $p->comment=$this->input->post('commentbox');
		
		//echo "Proposal ID:".$site_id;
		//echo "User ID:".$p->user_fkid;
		
        // $p->date_created= date('Y-m-d H:i:s');
		
        $result=$p->saveComments();

        redirect('Representative/loadspecificproposal/'.$site_id);
	}

public function approved_proposals() {
	if(isset($_SESSION['designation']))
	{
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['role']	= $this->session->designation;
		
		$this->load->model('Proposal_AB');
		//$data['proplist']=$this->Proposal_AB->LoadProposals();

		$this->load->view('forms/approved_proposals', $data);
	}else{
	    redirect(site_url());
	}
}

public function vpaaApproveProposal(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('prop_id');
       
        
		    $result=$p->approveProposal();
		
            if(!$result){ 
                echo mysqli_error($result);
            }
            else{
               redirect('Vpaa/home','refresh');
            }
	}

	public function decisionmaking(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('id');
       $p->user_id=$this->input->post('user_id');
       $p->reviewer_1=$this->input->post('reviewer_1');
       $p->reviewer_2=$this->input->post('reviewer_2');

        if($this->input->post('decision') == "DisapproveProposal") { 
			$result=$p->decisionDisapprove();
		} else {
		    $result=$p->decisionApprove();
		}
        
            if(!$result){ 
                echo mysqli_error($result);
            }
            else{
            	if ($this->input->post('role') == "Coordinator") {
            		redirect('Coordinator/home','refresh');
            	} else{
            		redirect('Director/home','refresh');
            	}
               
            }
	}

	public function soNotesProp(){
		
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('id');
       
        					//name sa button like name = "note"
        if($this->input->post('noteSo') == "ReturnProposal") { 
			$result=$p->soReturn();
		} else {
		    $result=$p->noteProposalSo();

		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('StudentOrganization/home'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Noted!</strong> You have successfully noted a proposal.');
				}
				redirect(site_url('StudentOrganization/home'), "refresh");
            }
	}

	public function chairNotesProp(){
		
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('id');
       
        					//name sa button like name = "note"
        if($this->input->post('note') == "ReturnProposal") { 
			$result=$p->chairReturn();
		} else {
		    $result=$p->noteProposal();

		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Chair/home'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Noted!</strong> You have successfully noted a proposal.');
				}
				redirect(site_url('Chair/home'), "refresh");
            }
	}

	public function chairNotesPropFaculty(){
		
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('id');
        $p->noted_by_faculty=$this->input->post('noted_by_faculty');
        $p->noted_by_stat=$this->input->post('noted_by_stat');
       
        					//name sa button like name = "note"
        if($this->input->post('notefc') == "ReturnProposal") { 
			$result=$p->chairReturn();
		} else {
			
		    $result=$p->noteProposalChair();
		    $result1=$p->noteProposalChair();
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Chair/home'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Noted!</strong> You have successfully noted a proposal.');
				}
				redirect(site_url('Chair/home'), "refresh");
            }
	}

	public function facultyNotesProp(){
		
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('id');
        $p->noted_by_faculty=$this->input->post('noted_by_faculty');
        $p->noted_by_stat=$this->input->post('noted_by_stat');
       
        					//name sa button like name = "note"
        if($this->input->post('notefac') == "ReturnProposal") { 
			$result=$p->facReturn();
		} else {

		    $result=$p->noteProposalfac();
		    $result1=$p->noteProposalfac();
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Faculty/home'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Noted!</strong> You have successfully noted a proposal.');
				}
				redirect(site_url('Faculty/home'), "refresh");
            }
	}

	public function chairNotesReport(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reportd_id=$this->input->post('reportd_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->noteReport($p->reportd_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Chair/reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Chair/reports'), "refresh");
            }
	}

	public function chairNotesReporte(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reporte_id=$this->input->post('reporte_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
			$result=$p->noteReporte($p->reporte_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Chair/reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Chair/reports'), "refresh");
            }
	}

	public function coordNotesReport(){
		//usba kay code pani sa send proposal
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reportd_id=$this->input->post('reportd_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->coordNoteReport($p->reportd_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Coordinator/reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Coordinator/reports'), "refresh");
            }
	}

	public function coordNotesReporte(){
		//usba kay code pani sa send proposal
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reporte_id=$this->input->post('reporte_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->coordNoteReporte($p->reporte_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Coordinator/reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Coordinator/reports'), "refresh");
            }
	}

	public function deanNotesReport(){
		//usba kay code pani sa send proposal
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reportd_id=$this->input->post('reportd_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->deanNoteReport($p->reportd_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Coordinator/reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Dean/reports'), "refresh");
            }
	}

	public function deanNotesReporte(){
		//usba kay code pani sa send proposal
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reporte_id=$this->input->post('reporte_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->deanNoteReporte($p->reporte_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Coordinator/reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Dean/reports'), "refresh");
            }
	}

	public function adminNotesReport(){
		//usba kay code pani sa send proposal
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reportd_id=$this->input->post('reportd_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->adminNoteReport($p->reportd_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Director/other_reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Director/other_reports'), "refresh");
            }
	}

	public function adminNotesReporte(){
		//usba kay code pani sa send proposal
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->reporte_id=$this->input->post('reporte_id');

     	if($this->input->post('notereport') == "ProceedReport") { 
		$result=$p->adminNoteReporte($p->reporte_id);
		}
        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Director/other_reports'), "refresh");
            }
            else{
				if($this->input->post('note') == "ReturnProposal")
				{
					// $this->session->set_flashdata('success_msg',
					// '<strong>Report Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Report Has Been Sent!</strong> You have successfully sent a report.');
				}
				redirect(site_url('Director/other_reports'), "refresh");
            }
	}



	public function coordRecommendsProp(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        $p->id=$this->input->post('id');
        if($this->input->post('recommend') == "ReturnProposal") { 
			$result=$p->coordReturn();
		} else {
		    $result=$p->recommendProposal();
		}

        
            if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

				redirect(site_url('Coordinator/home'), "refresh");
            }
            else{
				if($this->input->post('recommend') == "ReturnProposal")
				{
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Returned!</strong> You have successfully returned a proposal.');
				}
            	else {
					$this->session->set_flashdata('success_msg',
					'<strong>Proposal Has Been Recommended to Dean!</strong> You have successfully noted a proposal.');
				}
				redirect(site_url('Coordinator/home'), "refresh");
            }
	}


	public function vpaaEndorseProp()
	{
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        //$p->id=$this->input->post('id');
        if($this->input->post('vpaaEndorse') == "ReturnProposal") { 
			$result=$p->directorReturn($this->input->post('id'));
		} else {
		    $result=$p->vpaaEndorseProposal($this->input->post('id'));
		}

        if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

                redirect(site_url('Director/home'), "refresh");
        }
        else{
			
			if($this->input->post('vpaaEndorse') == "ReturnProposal") { 
				$this->session->set_flashdata('success_msg',
				'<strong>Proposal Has Been Returned!</strong> You have successfully Returned a proposal.');
			}else{
				$this->session->set_flashdata('success_msg',
				'<strong>Proposal Has Been Endorsed!</strong> You have successfully endorsed a proposal.');
			}
			redirect(site_url('Director/home'), "refresh");
        }
	}
	
	public function vpaaApproveProp()
	{
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        
        if($this->input->post('recommend') == "ReturnProposal") { 
			$result=$p->vpaaReturn($this->input->post('id'));
		} else {
		    $result=$p->vpaaApproveProposal($this->input->post('id'));
		}

        if(!$result){ 
            $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

            redirect(site_url('Vpaa/home'), "refresh");
        }
        else{
			
			if($this->input->post('recommend') == "ReturnProposal") { 
				$this->session->set_flashdata('success_msg',
				'<strong>Proposal Has Been Returned!</strong> You have successfully Returned a proposal.');
			}else{
				$this->session->set_flashdata('success_msg',
				'<strong>Proposal Has Been Approved!</strong> You have successfully Approved a proposal.');
			}
			redirect(site_url('Vpaa/home'), "refresh");
        }
	}
	
	public function deanEndorseProp(){
		$this->load->model('Proposal_AB');
        $p= new Proposal_AB();
        //$p->id=$this->input->post('id');
        if($this->input->post('recommend') == "ReturnProposal") { 
			$result=$p->deanReturn($this->input->post('id'));
		} else {
		    $result=$p->endorseProposal($this->input->post('id'));
		}

        if(!$result){ 
                $this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your changes.');

                redirect(site_url('Dean/home'), "refresh");
        }
        else{
            if($this->input->post('recommend') == "ReturnProposal") { 
				$this->session->set_flashdata('success_msg',
				'<strong>Proposal Has Been Returned!</strong> You have successfully Returned a proposal.');
			}else{
				$this->session->set_flashdata('success_msg',
				'<strong>Proposal Has Been Endorsed!</strong> You have successfully endorsed a proposal.');
			}
			redirect(site_url('Dean/home'), "refresh");
        }
	}

	public function proposal_log(){
		$data['fname'] 	= $this->session->firstname;
		$data['lname'] 	= $this->session->lastname;
		$data['office'] = $this->session->office;
		$data['role']	= $this->session->designation;
		$data['user_id']	= $this->session->user_id;

		$proposal_id = $this->input->post('id');
		

		$this->load->model('Proposal_AB');
     
		
		$data['cycle']=$this->Proposal_AB->proposal_log_trail($proposal_id);

		$this->load->view('forms/returned_logs', $data);
	}

	

}
?>	
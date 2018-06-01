<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Procedure_one extends CI_Controller
{

	public function addForm_A_and_B(){
		if($_POST)
		{
			$data = json_encode($_POST,JSON_UNESCAPED_SLASHES);
			echo $data;
		}
	}
	public function editFormAB(){
		$this->load->model('Proposal_AB');
        $p = new Proposal_AB();

        $p->id=$this->input->post('id');
        $p->approve_id=$this->input->post('approve_id');
        $p->unitresponsible_fkid=$this->input->post('unitresponsible_fkid');
        $p->practical_counts_fkid=$this->input->post('practical_counts_fkid');
        $p->unitpersonnel_involved_fkid=$this->input->post('unitpersonnel_involved_fkid');
        $p->verifdata_with_fkid=$this->input->post('verifdata_with_fkid');
        $p->verifdata_without_fkid=$this->input->post('verifdata_without_fkid');
        $p->social_dimension_fkid=$this->input->post('social_dimension_fkid');
        $p->partnership_linkages_profile_fkid=$this->input->post('partnership_linkages_profile_fkid');
        $p->request_area_fkid=$this->input->post('request_area_fkid');
        $p->rationale_to_beneficiaries_fkid=$this->input->post('rationale_to_beneficiaries_fkid');
        $p->Outline_of_Activities_fkid=$this->input->post('Outline_of_Activities_fkid');
        $p->budgetary_requirements_fkid=$this->input->post('budgetary_requirements_fkid');
        $p->nature_and_area_ofprogram_fkid=$this->input->post('nature_and_area_ofprogram_fkid');
        $p->timeframe_to_mou_moa_fkid=$this->input->post('timeframe_to_mou_moa_fkid');


        // start PROPOSAL header and form a
		$user_fkid = $this->input->post('user_id');  
		$form_type = $this->input->post('form_type');
		$title = $this->input->post('title');
		$school = $this->input->post('school');
		$department = $this->input->post('department');
		$organization = $this->input->post('organization');
		$datestart = $this->input->post('inclusive_date1');
		$dateend = $this->input->post('inclusive_date2');
		$venue = $this->input->post('venue');


	/*PASSING DATA*/$prophead_data = array(
	'user_fkid'=>$user_fkid, 
	'form_type'=>$form_type, 
	'title'=>$title, 
	'school'=>$school, 
	'department'=>$department, 
	'organization'=>$organization, 
	'inclusive_date1'=>$datestart, 
	'inclusive_date2'=>$dateend, 
	'venue'=>$venue,
	'form_completeness'=>1);


		$rationale_and_contextualization = $this->input->post('rationale_and_contextualization');
		$goal_objectives_and_outcomes= $this->input->post('goal_objectives_and_outcomes');
		$participants_partners_and_beneficiaries= $this->input->post('participants_partners_and_beneficiaries');

/*PASSING DATA*/	$rationale_to_beneficiaries = array(
	'rationale_and_contextualization'=>$rationale_and_contextualization, 
	'goal_objectives_and_outcomes'=>$goal_objectives_and_outcomes, 
	'participants_partnersand_beneficiaries'=>$participants_partners_and_beneficiaries);

		if(!empty($tentadate= $this->input->post('tentative_date'))){
		$tentadate= implode(" , ", $this->input->post('tentative_date'));
		} 
		if(!empty($acts_oa= $this->input->post('activities'))){	
		$acts_oa= implode(" , ", $this->input->post('activities'));
		} 
		if(!empty($partneeded= $this->input->post('participants_needed'))){	
		$partneeded= implode(" , ", $this->input->post('participants_needed'));
		}
		if(!empty($personsinch= $this->input->post('persons_incharge'))){
		$personsinch= implode(" , ", $this->input->post('persons_incharge'));
		}

/*PASSING DATA*/	$outline_of_activities = array(
	'tentativedate'=>$tentadate, 
	'activityname'=>$acts_oa, 
	'participants_needed'=>$partneeded, 
	'personincharge'=>$personsinch);

		if(!empty($ms_partic= $this->input->post('a_particulars'))){	
		$ms_partic= implode(" , ", $this->input->post('a_particulars'));
		}
		if(!empty($ms_freq= $this->input->post('a_frequency'))){
		$ms_freq= implode(" , ", $this->input->post('a_frequency'));
		}
		if(!empty($ms_quant= $this->input->post('a_quantity'))){
		$ms_quant= implode(" , ", $this->input->post('a_quantity'));
		}
		if(!empty($ms_amnt= $this->input->post('a_amount'))){
		$ms_amnt= implode(" , ", $this->input->post('a_amount')); }
		if(!empty($ms_sbtotal= $this->input->post('a_subtotal'))){
		$ms_sbtotal= implode(" , ", $this->input->post('a_subtotal')); }
		if(!empty($transpo_partic= $this->input->post('b_particulars'))){
		$transpo_partic= implode(" , ", $this->input->post('b_particulars')); }
		if(!empty($transpo_freq= $this->input->post('b_frequency'))){
		$transpo_freq= implode(" , ", $this->input->post('b_frequency')); }
		if(!empty($transpo_quant= $this->input->post('b_quantity'))){
		$transpo_quant= implode(" , ", $this->input->post('b_quantity')); }
		if(!empty($transpo_amnt= $this->input->post('b_amount'))){
		$transpo_amnt= implode(" , ", $this->input->post('b_amount')); }
		if(!empty($transpo_sbtotal= $this->input->post('b_subtotal'))){
		$transpo_sbtotal= implode(" , ", $this->input->post('b_subtotal')); }
		if(!empty($mat_partic= $this->input->post('c_particulars'))){
		$mat_partic= implode(" , ", $this->input->post('c_particulars')); }
		if(!empty($mat_freq= $this->input->post('c_frequency'))){
		$mat_freq= implode(" , ", $this->input->post('c_frequency'));
		}
		if(!empty($mat_quant= $this->input->post('c_quantity'))){
		$mat_quant= implode(" , ", $this->input->post('c_quantity'));
		}
		if(!empty($mat_amnt= $this->input->post('c_amount'))){
		$mat_amnt= implode(" , ", $this->input->post('c_amount'));
		}
		if(!empty($mat_sbtotal= $this->input->post('c_subtotal'))){
		$mat_sbtotal= implode(" , ", $this->input->post('c_subtotal'));
		}
		if(!empty($grand_total= $this->input->post('grand_total'))){
		$grand_total= $this->input->post('grand_total');
		}

/*PASSING DATA*/  $budgetary_requirements = array(
	'mealsnack_particular'=>$ms_partic, 
	'mealsnack_frequency'=>$ms_freq, 
	'mealsnack_quantity'=>$ms_quant, 
	'mealsnack_amnt'=>$ms_amnt, 
	'mealsnack_subtotal'=>$ms_sbtotal, 
	'transpo_particular'=>$transpo_partic, 
	'transpo_frequency'=>$transpo_freq, 
	'transpo_quantity'=>$transpo_quant, 
	'transpo_amnt'=>$transpo_amnt, 
	'transpo_subtotal'=>$transpo_sbtotal, 
	'materials_particular'=>$mat_partic, 
	'materials_frequency'=>$mat_freq, 
	'materials_quantity'=>$mat_quant, 
	'materials_amnt'=>$mat_amnt, 
	'materials_subtotal'=>$mat_sbtotal, 
	'grand_total'=>$grand_total);
// END of PROPOSAL header and form a

		// START of Form B
	if(!empty($unitresp_check= $this->input->post('nit_responsible'))){
		$unitresp_check = implode(" , ", $this->input->post('unit_responsible')); 
	}
			$sas = $this->input->post('school_of_arts_and_sciences');
            $safad = $this->input->post('school_of_architecture_fine_arts_and_design');
            $sed = $this->input->post('school_of_education');
            $seng = $this->input->post('school_of_engineering');
            $sbe = $this->input->post('school_of_business_and_economics');
            $shcp = $this->input->post('school_of_health_care_profession');
            $solg = $this->input->post('school_of_law_and_governance');
            $supunit = $this->input->post('support_unit');

/*PASSING DATA*/  $unitresponsible = array(
	'unitresp_chosenradio'=>$unitresp_check, 
	'SAS'=>$sas, 
	'SAFAD'=>$safad, 
	'SED'=>$sed, 
	'SOE'=>$seng, 
	'SBE'=>$sbe, 
	'SHCP'=>$shcp, 
	'SLG'=>$solg, 
	'Supunit'=>$supunit);

    

		 	if(!empty($natureprog = $this->input->post('nature_of_the_program'))){
			$natureprog = implode(" , ", $this->input->post('nature_of_the_program')); }
		
			$natprogothers= $this->input->post('nature_of_the_program_others');

			if(!empty($programarea = $this->input->post('program_area'))){
				$programarea = implode(" , ", $this->input->post('program_area'));}

/*PASSING DATA*/	$natprog_progarea = array('nature_of_program'=>$natureprog, 'specnatprog'=>$natprogothers, 'program_area'=>$programarea);

			if(!empty($unitpersinv = $this->input->post('unit_personnel_involved'))){
					$unitpersinv = implode(" , ", $this->input->post('unit_personnel_involved')); }
				
					$unitpersoninv=  $this->input->post('unit_personnel_involved_others');
/*PASSING DATA*/ $unitpersonnelinv = array(
	'upi_chosenradio'=>$unitpersinv,
	'upi_spec'=>$unitpersoninv);

			if(!empty($datasource = $this->input->post('data_sources'))){
					$datasource = implode(" , ", $this->input->post('data_sources')); }
				
					$ds_others= $this->input->post('data_sources_others');

					if(!empty($toolused = $this->input->post('tools_used_to_gather'))){
						$toolused = implode(" , ", $this->input->post('tools_used_to_gather')); }
				
						$toolsused_others= $this->input->post('tools_used_to_gather_others');

					if(!empty($meansemp = $this->input->post('means_employed_to_verify'))){
							$meansemp = implode(" , ", $this->input->post('means_employed_to_verify')); }
				
					$meansothers= $this->input->post('means_employed_to_verify_others');

					if(!empty($whocollect = $this->input->post('who_collected'))){
							$whocollect = implode(" , ", $this->input->post('who_collected')); }
				
					$who_other= $this->input->post('who_collected_others');

/*PASSING DATA*/	$verifdata_with =  array(
	'data_sources'=>$datasource, 
	'datasource_others'=>$ds_others, 
	'tools_used_to_gather_data'=>$toolused, 
	'toolsgat_others'=>$toolsused_others, 
	'means_employed_to_verify_data'=>$meansemp, 
	'meansemp_others'=>$meansothers, 
	'who_collected_the_data'=>$whocollect, 
	'whocollect_others'=>$who_other);

		$basesofproposing = $this->input->post('bases_for_proposing_ppa');
			$meansemptoensureresponse = $this->input->post('means_employed_to_ensure_responsiveness');
/*PASSING DATA*/	$verifdata_without =  array(
	'bases_for_proposing_program'=>$basesofproposing, 
	'means_employed_ensure_resposiveness'=>$meansemptoensureresponse);


	if(!empty($socialdim = $this->input->post('social_dimension'))){
				$socialdim = implode(" , ", $this->input->post('social_dimension')); }
				
					
					$householdcount= $this->input->post('social_dimension_household');
					$youthmalecount= $this->input->post('social_dimension_youth_male');
					$locgovcount= $this->input->post('social_dimension_local_government_unit');
					$youthfemcount= $this->input->post('social_dimension_youth_female');
					$orgcount= $this->input->post('social_dimension_organization');
					$childboycount= $this->input->post('social_dimension_children_boy');
					$scmalecount= $this->input->post('social_dimension_senior_citizen_male');
					$childgirlcount= $this->input->post('social_dimension_children_girl');
					$scfemcount= $this->input->post('social_dimension_senior_citizen_female');
					$infboycount= $this->input->post('social_dimension_infants_boy');
					$adultmalecount= $this->input->post('social_dimension_adults_male');
					$infgirlcount= $this->input->post('social_dimension_infants_girl');
					$adultfemcount= $this->input->post('social_dimension_adults_female');
					$socialothers= $this->input->post('social_dimension_others');
					 $socialotherscount= $this->input->post('social_dimension_others_count');
/*PASSING DATA*/	$socialdimension =  array(
	'socdim_chosenradio'=>$socialdim, 
	'household'=>$householdcount, 
	'youthmale'=>$youthmalecount, 
	'youthfemale'=>$youthfemcount, 
	'localgovunit'=>$locgovcount, 
	'orgs_assocs'=>$orgcount, 
	'childboy'=>$childboycount, 
	'childgirl'=>$childgirlcount, 
	'seniorcitizen_male'=>$scmalecount, 
	'seniorcitizen_female'=>$scfemcount, 
	'adults_male'=>$adultmalecount, 
	'adults_female'=>$adultfemcount, 
	'infants_boy'=>$infboycount, 
	'infants_girl'=>$infgirlcount, 
	'socdim_othersname'=>$socialothers, 
	'socdim_otherscount'=>$socialotherscount);

		$manhours_prepare= $this->input->post('hours_needed_to_prepare');
		$manhours_comp= $this->input->post('hours_needed_to_complete');
		$facultyinv= $this->input->post('faculty_members_involved_count');
		$coursebasedstud= $this->input->post('course_based_students_involved_count');
		$studorg= $this->input->post('student_organization_members_involved_count');
		$staffinv= $this->input->post('staff_involved_count');
		$matproduced= $this->input->post('campaign_materials_to_produce_count');
		$matimproved= $this->input->post('campaign_materials_to_improve_count');
		$curricprogdev= $this->input->post('curriculum_programs_to_develop_count');
		$curricprogimp= $this->input->post('curriculum_programs_to_improve_count');
		$propdev= $this->input->post('proposals_to_develop_count');
		$paperspres= $this->input->post('papers_presented_count');
		$paperspub= $this->input->post('papers_published_count');
		$policiesadv= $this->input->post('policies_to_advocate_count');
/*PASSING DATA*/	$practical_counts =  array(
	'manhours_prepare'=>$manhours_prepare, 
	'manhours_comp'=>$manhours_comp, 
	'facultyinv'=>$facultyinv, 
	'coursebasedstud'=>$coursebasedstud, 
	'studorg'=>$studorg, 
	'staffinv'=>$staffinv, 
	'matproduced'=>$matproduced, 
	'matimproved'=>$matimproved, 
	'curricprogdev'=>$curricprogdev, 
	'curricprogimp'=>$curricprogimp, 
	'propdev'=>$propdev, 
	'paperspres'=>$paperspres, 
	'paperspub'=>$paperspub, 
	'policiesadv'=>$policiesadv);

	


	  $timeframe=  array(
      	'term'=> $this->input->post('term'),
      	'sem'=> $this->input->post('semester')
      	// 'semothers'=> $this->input->post('semester_others')
      	);
      
      $timeframe_choice= implode(" , ", $timeframe);
      $tf_others=  $this->input->post('semester_others');

      if(!empty($locuslead = $this->input->post('locus_and_leadership'))){
		$locuslead = implode(" , ", $this->input->post('locus_and_leadership')); }
	
		$locusothers = $this->input->post('locus_and_leadership_others');

	$prelimchoice= $this->input->post('prelimasschoice_contextdimension');
	$radioverifdatachoice = $this->input->post('verifdatachoice');

		if(!empty($prodim = $this->input->post('productivity_dimension'))){
			$prodim = implode(" , ", $this->input->post('productivity_dimension')); }
		$prodimothers= $this->input->post('productivity_dimension_others');

		if(!empty($econdim = $this->input->post('economic_dimension'))){
				$econdim = implode(" , ", $this->input->post('economic_dimension')); }
	
	$econ_empart= $this->input->post('employability_of_partners');
	$econdim_others= $this->input->post('economic_dimension_others');

	

		if(!empty($envidim = $this->input->post('environment_dimension'))){
				$envidim = implode(" , ", $this->input->post('environment_dimension')); }

		$envidim_others= $this->input->post('environment_dimension_others');

		if(!empty($govdim = $this->input->post('government_dimension'))){
					$govdim = implode(" , ", $this->input->post('government_dimension')); }
	
		$govdim_others= $this->input->post('government_dimension_others'); 

	
	


	$facmem_prep_expertiseneeded = $this->input->post('preparation_expertise_needed_faculty_members');
	$facmem_prep_roles = $this->input->post('preparation_roles_faculty_members');
	$stud_prep_expertiseneeded = $this->input->post('preparation_expertise_needed_students');
	$stud_prep_roles = $this->input->post('preparation_roles_students');

	$facmem_imp_expertiseneeded = $this->input->post('implementation_expertise_needed_faculty_members');
	$facmem_imp_roles = $this->input->post('implementation_roles_faculty_members');
	$stud_imp_expertiseneeded = $this->input->post('implementation_expertise_needed_students');
	$stud_imp_roles = $this->input->post('implementation_roles_students');



$mou_moa_choice = $this->input->post('moa');

$date_signed = $this->input->post('date_signed');
$signatories_for_usc = $this->input->post('signatories_for_usc');
$signatories_for_partner = $this->input->post('signatories_for_partner');
$major_duties_of_usc_unit = $this->input->post('major_duties_of_usc_unit');
$major_duties_of_partner = $this->input->post('major_duties_of_partner');
$date_linkage_started = $this->input->post('date_linkage_started');
$who_initiated_linkage = $this->input->post('who_initiated_linkage');
$opportunities_identified = $this->input->post('opportunities_identified');
$challenges_encountered = $this->input->post('challenges_encountered');
$activities_done = $this->input->post('activities_done');

// $procedure_num= $this->input->post('procedure_num');

/*PASSING DATA*/	$timeframe_to_mou =  array(
	'timeframe'=>$timeframe_choice, 
	'timeframe_others'=>$tf_others, 
	'locus_and_lead'=>$locuslead, 
	'locus_and_lead_spec'=>$locusothers, 
	'prelimneedassess_choice'=>$prelimchoice, 
	'verifdata_choice'=>$radioverifdatachoice, 
	'productivity_dimension'=>$prodim, 
	'productivity_dimension_spec'=>$prodimothers, 
	'economic_dimension'=>$econdim, 
	'econdim_employpart'=>$econ_empart, 
	'economic_dimension_spec'=>$econdim_others, 
	'environmental_dimension'=>$envidim, 
	'environmental_dimension_spec'=>$envidim_others, 
	'governance_dimension'=>$govdim, 
	'governance_dimension_spec'=>$govdim_others, 
	'preparation_expertise_needed_faculty'=>$facmem_prep_expertiseneeded,
	'preparation_expertise_needed_students'=>$stud_prep_expertiseneeded, 
	'preparation_expertise_needed_students'=>$facmem_prep_roles, 
	'preparation_roles_students'=>$stud_prep_roles, 
	'implementation_expertise_needed_faculty'=>$facmem_imp_expertiseneeded, 
	'implementation_expertise_needed_students'=>$stud_imp_expertiseneeded,
	'implementation_roles_faculty'=>$facmem_imp_roles, 
	'implementation_roles_students'=>$stud_imp_roles, 
	'moa_mou_choice'=>$mou_moa_choice, 
	'date_signed'=>$date_signed, 
	'signatories_for_usc'=>$signatories_for_usc, 
	'signatories_for_partner'=>$signatories_for_partner, 
	'major_duties_of_usc_unit'=>$major_duties_of_usc_unit, 
	'major_duties_of_partners'=>$major_duties_of_partner, 
	'when_is_linkage'=>$date_linkage_started, 
	'who_initiated_linkage'=>$who_initiated_linkage, 
	'opportunities_identified'=>$opportunities_identified, 
	'challenges_encountered'=>$challenges_encountered, 
	'activities_already_done'=>$activities_done);

	$date_director_checked = $this->input->post('date_director_checked');
	$date_reviewer_1_checked = $this->input->post('date_reviewer_1_checked');
	$date_reviewer_2_checked = $this->input->post('date_reviewer_2_checked');

	if (is_null($date_director_checked) == false && is_null($date_reviewer_1_checked) == false && is_null($date_reviewer_2_checked) == false ) {
		/*PASSING DATA*/$approve_cycle = array(
	'department_chair'=>NULL,
	'school_coordinator'=>NULL,
	'school_dean'=>NULL,
	'director'=>NULL,
	'revisions'=>1 
	);
	} else{
		/*PASSING DATA*/$approve_cycle = array(
	'department_chair'=>NULL,
	'school_coordinator'=>NULL,
	'school_dean'=>NULL,
	'director'=>NULL 
	);
	}

	 
		
		
		$result=$p->editFormAB($prophead_data, $rationale_to_beneficiaries, $outline_of_activities, $budgetary_requirements, $unitresponsible, $natprog_progarea, $unitpersonnelinv, $verifdata_with, $verifdata_without, $socialdimension, $practical_counts, $timeframe_to_mou, $approve_cycle);

		if(!$result){
				$this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your proposal.');
				
				redirect(site_url('Representative/home'), "refresh");
			}
			else{
				$this->session->set_flashdata('success_msg',
					'<strong>Proposal Edited!</strong> You have successfully edited Form A & B.');
				
				redirect(site_url('Representative/home'), "refresh");
			}

	}


	public function addForm_A(){
		$this->load->model('Proposal_AB');
        $a = new Proposal_AB();

        // start PROPOSAL header and form a
		$user_fkid = $this->input->post('user_id');  
		$form_type = $this->input->post('form_type');
		$title = $this->input->post('title');
		$school = $this->input->post('school');
		$department = $this->input->post('department');
		$organization = $this->input->post('organization');
		$datestart = $this->input->post('inclusive_date1');
		$dateend = $this->input->post('inclusive_date2');
		$venue = $this->input->post('venue');

/*PASSING DATA*/$prophead_data = array(
	$user_fkid, 
	$form_type, 
	$title, 
	$school, 
	$department, 
	$organization, 
	$datestart, 
	$dateend, 
	$venue);
		
		$rationale_and_contextualization = $this->input->post('rationale_and_contextualization');
		$goal_objectives_and_outcomes= $this->input->post('goal_objectives_and_outcomes');
		$participants_partners_and_beneficiaries= $this->input->post('participants_partners_and_beneficiaries');

/*PASSING DATA*/	$rationale_to_beneficiaries = array($rationale_and_contextualization, $goal_objectives_and_outcomes, $participants_partners_and_beneficiaries);

		if(!empty($tentadate= $this->input->post('tentative_date'))){
		$tentadate= implode(" , ", $this->input->post('tentative_date'));
		} 
		if(!empty($acts_oa= $this->input->post('activities'))){	
		$acts_oa= implode(" , ", $this->input->post('activities'));
		} 
		if(!empty($partneeded= $this->input->post('participants_needed'))){	
		$partneeded= implode(" , ", $this->input->post('participants_needed'));
		}
		if(!empty($personsinch= $this->input->post('persons_incharge'))){
		$personsinch= implode(" , ", $this->input->post('persons_incharge'));
		}

/*PASSING DATA*/	$outline_of_activities = array($tentadate, $acts_oa, $partneeded, $personsinch);

		if(!empty($ms_partic= $this->input->post('a_particulars'))){	
		$ms_partic= implode(" , ", $this->input->post('a_particulars'));
		}
		if(!empty($ms_freq= $this->input->post('a_frequency'))){
		$ms_freq= implode(" , ", $this->input->post('a_frequency'));
		}
		if(!empty($ms_quant= $this->input->post('a_quantity'))){
		$ms_quant= implode(" , ", $this->input->post('a_quantity'));
		}
		if(!empty($ms_amnt= $this->input->post('a_amount'))){
		$ms_amnt= implode(" , ", $this->input->post('a_amount')); }
		if(!empty($ms_sbtotal= $this->input->post('a_subtotal'))){
		$ms_sbtotal= implode(" , ", $this->input->post('a_subtotal')); }
		if(!empty($transpo_partic= $this->input->post('b_particulars'))){
		$transpo_partic= implode(" , ", $this->input->post('b_particulars')); }
		if(!empty($transpo_freq= $this->input->post('b_frequency'))){
		$transpo_freq= implode(" , ", $this->input->post('b_frequency')); }
		if(!empty($transpo_quant= $this->input->post('b_quantity'))){
		$transpo_quant= implode(" , ", $this->input->post('b_quantity')); }
		if(!empty($transpo_amnt= $this->input->post('b_amount'))){
		$transpo_amnt= implode(" , ", $this->input->post('b_amount')); }
		if(!empty($transpo_sbtotal= $this->input->post('b_subtotal'))){
		$transpo_sbtotal= implode(" , ", $this->input->post('b_subtotal')); }
		if(!empty($mat_partic= $this->input->post('c_particulars'))){
		$mat_partic= implode(" , ", $this->input->post('c_particulars')); }
		if(!empty($mat_freq= $this->input->post('c_frequency'))){
		$mat_freq= implode(" , ", $this->input->post('c_frequency'));
		}
		if(!empty($mat_quant= $this->input->post('c_quantity'))){
		$mat_quant= implode(" , ", $this->input->post('c_quantity'));
		}
		if(!empty($mat_amnt= $this->input->post('c_amount'))){
		$mat_amnt= implode(" , ", $this->input->post('c_amount'));
		}
		if(!empty($mat_sbtotal= $this->input->post('c_subtotal'))){
		$mat_sbtotal= implode(" , ", $this->input->post('c_subtotal'));
		}
		if(!empty($grand_total= $this->input->post('grand_total'))){
		$grand_total= $this->input->post('grand_total');
		}

/*PASSING DATA*/  $budgetary_requirements = array($ms_partic, $ms_freq, $ms_quant, $ms_amnt, $ms_sbtotal, $transpo_partic, $transpo_freq, $transpo_quant, $transpo_amnt, $transpo_sbtotal, $mat_partic, $mat_freq, $mat_quant, $mat_amnt, $mat_sbtotal, $grand_total);
// END of PROPOSAL header and form a

		$result=$a->addFormA($prophead_data, $rationale_to_beneficiaries, $outline_of_activities, $budgetary_requirements);
		
		if(!$result){
				$this->session->set_flashdata('error_msg',
					'<strong>Something Happened!</strong> An error occured while saving your proposal.');
				
				redirect(site_url('Representative/home'), "refresh");
			}
			else{
				$this->session->set_flashdata('success_msg','<strong>Proposal Created!</strong> You have successfully added Form A');
				
				redirect(site_url('Representative/home'), "refresh");
			}

    }
	/*Newly added method for the design change to JSON oriented system*/
	public function insertDraftProposal()
	{
		$this->load->model('Proposal_AB');

		$form = new Proposal_AB();
		$form_type = $this->input->post('form_type');
		if($_POST){
			if(isset($_POST['proposal_id']) && $_POST["button_type"] === "save_prop"){
				$data = json_encode($_POST,JSON_UNESCAPED_SLASHES);
				$response = $form->updateProposalDetails($_POST["proposal_id"],$data,0);
			}else if(!isset($_POST['proposal_id']) && $_POST["button_type"] === "save_prop"){
				$data = json_encode($_POST,JSON_UNESCAPED_SLASHES);
				$form->insertProposalJSON($_POST["user_id"],$data,0,$form_type);
				//echo "SUCCESSFUL IN CREATING PPA DRAFT";
			}else if( !isset($_POST['proposal_id']) && $_POST["button_type"] === "submit_prop"){
				$data = json_encode($_POST,JSON_UNESCAPED_SLASHES);
				$response = $form->insertProposalJSON($_POST["user_id"],$data,1,$form_type);
				echo "Successful in creating PPA form";
			}else if( !isset($_POST['proposal_id']) && $_POST["button_type"] === "submit_prop_coord"){
				$data = json_encode($_POST,JSON_UNESCAPED_SLASHES);
				$response = $form->insertProposalJSON($_POST["user_id"],$data,4,$form_type);
				echo "Successful in creating PPA form (Coordinator)";
			}else if(isset($_POST['proposal_id']) && $_POST["button_type"] === "submit_prop"){
				$data = json_encode($_POST,JSON_UNESCAPED_SLASHES);
				$response = $form->updateProposalDetails($_POST["proposal_id"],$data,1,$form_type);
				echo "Draft proposal is now on the review process";
			}else{
				echo "Exception 101";
			}
		}else{
			echo "Exception 404";
		}
		//echo $_POST["button_type"];
	}
	public function getDraftProposal()
	{
		$this->load->model('Proposal_AB');
		$data = $this->Proposal_AB->loadDraftProposal($this->session->user_id);
		$arr = array();
		foreach($data as $obj)
		{
			$obj->proposal_json_format = json_decode($obj->proposal_json_format);
			array_push($arr,$obj);
			//echo json_encode($obj->proposal_json_format,JSON_UNESCAPED_SLASHES);
		}
		echo json_encode($arr,JSON_UNESCAPED_SLASHES);
	}
	public function getSubmittedProposal()
	{
		$this->load->model('Proposal_AB');
		$data = $this->Proposal_AB->loadSubmittedProposal($this->session->user_id);
		$arr = array();
		foreach($data as $obj)
		{
			$obj->proposal_json_format = json_decode($obj->proposal_json_format);
			array_push($arr,$obj);
			//echo json_encode($obj->proposal_json_format,JSON_UNESCAPED_SLASHES);
		}
		echo json_encode($arr,JSON_UNESCAPED_SLASHES);
	}
	public function getReturnedProposal()
	{
		$this->load->model('Proposal_AB');
		$data = $this->Proposal_AB->loadReturnedProposal($this->session->user_id);
		$arr = array();
		foreach($data as $obj)
		{
			$obj->proposal_json_format = json_decode($obj->proposal_json_format);
			array_push($arr,$obj);
			//echo json_encode($obj->proposal_json_format,JSON_UNESCAPED_SLASHES);
		}
		echo json_encode($arr,JSON_UNESCAPED_SLASHES);
	}
}
?>


	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('ETC/GMT+8');
/**
* for transactions of proposal form A and B as one
*/
class Proposal_AB extends CI_Model
{

    public function addFormAB($prophead_data, $rationale_to_beneficiaries, $outline_of_activities, $budgetary_requirements, $unitresponsible, $natprog_progarea, $unitpersonnelinv, $verifdata_with, $verifdata_without, $socialdimension, $practical_counts, $timeframe_to_mou){

       $this->db->trans_start();
      $sql_ratbenef = "INSERT INTO rationale_to_beneficiaries(rationale_and_contextualization, goal_objectives_and_outcomes, participants_partnersand_beneficiaries) 
            VALUES (?, ?, ?)";
            $this->db->query($sql_ratbenef, $rationale_to_beneficiaries); 
            $ratbenef_id = $this->db->insert_id(); 


             $sql_oa="INSERT INTO Outline_of_Activities(tentativedate, activityname, participants_needed, personincharge) VALUES (?,?,?,?)";
             $this->db->query($sql_oa, $outline_of_activities); 
            $oa_id = $this->db->insert_id(); 

        $sql_budreq="INSERT INTO budgetary_requirements(mealsnack_particular,mealsnack_frequency,mealsnack_quantity,mealsnack_amnt,mealsnack_subtotal,transpo_particular,transpo_frequency,transpo_quantity,transpo_amnt,transpo_subtotal,materials_particular,materials_frequency,materials_quantity,materials_amnt,materials_subtotal, grand_total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $this->db->query($sql_budreq, $budgetary_requirements); 
            $budreq_id = $this->db->insert_id(); 

        $sql_unitresp="INSERT INTO unitresponsible(unitresp_chosenradio,SAS,SAFAD, SED ,SOE ,SBE ,SHCP ,SLG ,Supunit ) VALUES (?,?,?,?,?,?,?,?,?)";
             $this->db->query($sql_unitresp, $unitresponsible); 
            $unitresp_id = $this->db->insert_id(); 

            $sql_natprog_progarea="INSERT INTO nature_and_area_ofprogram(nature_of_program ,specnatprog ,program_area ) VALUES (?,?,?)";
             $this->db->query($sql_natprog_progarea, $natprog_progarea); 
            $natprog_progarea_id = $this->db->insert_id();

        $sql_unitpersonnelinv = "INSERT INTO unitpersonnel_involved(upi_chosenradio, upi_spec) VALUES (?,?)";
             $this->db->query($sql_unitpersonnelinv, $unitpersonnelinv); 
            $personnelinv_id = $this->db->insert_id();

            $sql_verifdata_with = "INSERT INTO verifdata_with(
            data_sources, datasource_others,
            tools_used_to_gather_data, toolsgat_others,
            means_employed_to_verify_data, meansemp_others,
            who_collected_the_data,whocollect_others) VALUES (?,?,?,?,?,?,?,?)";
             $this->db->query($sql_verifdata_with, $verifdata_with); 
            $verifdatawith_id = $this->db->insert_id();

            $sql_verifdata_without = "INSERT INTO verifdata_without(bases_for_proposing_program, means_employed_ensure_resposiveness) VALUES (?,?)";
             $this->db->query($sql_verifdata_without, $verifdata_without); 
            $verifdatawithout_id = $this->db->insert_id();

            $sql_socdim =  "INSERT INTO social_dimension(
            socdim_chosenradio,
            household,
            youthmale,
            youthfemale,
            localgovunit,
            orgs_assocs,
            childboy,
            childgirl,
            seniorcitizen_male,
            seniorcitizen_female,
            adults_male,
            adults_female,
            infants_boy ,
            infants_girl,
            socdim_othersname,
            socdim_otherscount) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $this->db->query($sql_socdim, $socialdimension); 
            $socdim_id = $this->db->insert_id();

$sql_pracounts =  "INSERT INTO practical_counts( manhours_prepare,manhours_comp,facultyinv,coursebasedstud,studorg,staffinv,matproduced,matimproved,curricprogdev,curricprogimp,propdev,paperspres,paperspub,policiesadv
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $this->db->query($sql_pracounts, $practical_counts); 
            $pracounts_id = $this->db->insert_id();


            $sql_tf_to_mou =  "INSERT INTO timeframe_to_mou_moa(
            timeframe, 
            timeframe_others,
            locus_and_lead, 
            locus_and_lead_spec,
            prelimneedassess_choice,
            verifdata_choice,
            productivity_dimension,
            productivity_dimension_spec,
            economic_dimension,
            econdim_employpart,
            economic_dimension_spec,
            environmental_dimension,
            environmental_dimension_spec,
            governance_dimension,
            governance_dimension_spec,
            preparation_expertise_needed_faculty ,
            preparation_expertise_needed_students ,
            preparation_roles_faculty,
            preparation_roles_students ,
            implementation_expertise_needed_faculty ,
            implementation_expertise_needed_students ,
            implementation_roles_faculty,
            implementation_roles_students,
            moa_mou_choice ,
            date_signed ,
            signatories_for_usc ,
            signatories_for_partner ,
            major_duties_of_usc_unit ,
            major_duties_of_partners ,
            when_is_linkage,
            who_initiated_linkage ,
            opportunities_identified ,
            challenges_encountered ,
            activities_already_done ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $this->db->query($sql_tf_to_mou, $timeframe_to_mou); 
            $tf_to_mou_id = $this->db->insert_id();

            
           if($this->input->post('submit') == "submit_prop") { 
            $sql_prophead = "INSERT INTO proposal_header(
                user_fkid,
                form_type,
                title,
                school,
                department,
                organization,
                inclusive_date1,
                inclusive_date2,
                venue,
                
                rationale_to_beneficiaries_fkid,
                Outline_of_Activities_fkid,
                budgetary_requirements_fkid,
                unitresponsible_fkid,
                nature_and_area_ofprogram_fkid,
                unitpersonnel_involved_fkid,
                verifdata_with_fkid,
                verifdata_without_fkid,
                social_dimension_fkid,
                practical_counts_fkid,
                timeframe_to_mou_moa_fkid,
                form_completeness
             ) 
            VALUES (?,?,?,?,?,?,?,?,?,$ratbenef_id,$oa_id,$budreq_id,$unitresp_id,$natprog_progarea_id,$personnelinv_id,$verifdatawith_id,$verifdatawithout_id, $socdim_id,$pracounts_id,$tf_to_mou_id, 1)"; 
        } else {
            $sql_prophead = "INSERT INTO proposal_header(
                user_fkid,
                form_type,
                title,
                school,
                department,
                organization,
                inclusive_date1,
                inclusive_date2,
                venue,
                
                rationale_to_beneficiaries_fkid,
                Outline_of_Activities_fkid,
                budgetary_requirements_fkid,
                unitresponsible_fkid,
                nature_and_area_ofprogram_fkid,
                unitpersonnel_involved_fkid,
                verifdata_with_fkid,
                verifdata_without_fkid,
                social_dimension_fkid,
                practical_counts_fkid,
                timeframe_to_mou_moa_fkid,
                form_completeness
             ) 
            VALUES (?,?,?,?,?,?,?,?,?,$ratbenef_id,$oa_id,$budreq_id,$unitresp_id,$natprog_progarea_id,$personnelinv_id,$verifdatawith_id,$verifdatawithout_id, $socdim_id,$pracounts_id,$tf_to_mou_id, 0)"; 
        }

             
            
            $query = $this->db->query($sql_prophead, $prophead_data);
            $prophead_id= $this->db->insert_id();

            $approve_cycle= "INSERT INTO approval_cycle(proposal_header_fkid) VALUES ($prophead_id)";
            $query2 = $this->db->query($approve_cycle);
         
     $this->db->trans_complete();
     return $query;
          
    }
 
    public function LoadProposals($department){
        $results = array();

        $this->db->select('*');

        $this->db->from('proposal_json_full_info');
		$this->db->where('department',$department);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$results = $query->result();
		}
        return $results;
    }

    public function LoadProposals_forcoordinators(){
        $results = array();
    

        $this->db->select('*');

        $this->db->from('proposal_header');


         $this->db->join('user_account', 'user_account.user_id = proposal_header.user_fkid', 'left');
         $this->db->join('approval_cycle', 'approval_cycle.proposal_header_fkid = proposal_header.id', 'left');
         
        

        $this->db->order_by("proposal_header.datetime_created", "desc");
        $query = $this->db->get();

            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;
    }


    public function LoadComments($proposal_id){
        $results = array();
    

        $this->db->select('*');
        $this->db->from('comments');
        $this->db->join('user_account', 'user_account.user_id = comments.user_fkid', 'left');
        $this->db->join('user_designation', 'user_designation.id = user_account.designation_fkid', 'left');

        $this->db->where('comments.proposal_header_fkid', $proposal_id);
        $query = $this->db->get();

      
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }


    public function LoadAllCoordinator(){
        $results = array();
    

        $this->db->select('*');
        $this->db->from('user_account');
        // $this->db->join('proposal_header', 'proposal_header.user_fkid = user_account.user_id', 'left');
        // $this->db->join('approval_cycle', 'approval_cycle.proposal_header_fkid = proposal_header.id', 'right');

        $this->db->where('designation_fkid', 5);
     

       $query = $this->db->get();

            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;
    }


    public function editFormAB($prophead_data, $rationale_to_beneficiaries, $outline_of_activities, $budgetary_requirements, $unitresponsible, $natprog_progarea, $unitpersonnelinv, $verifdata_with, $verifdata_without, $socialdimension, $practical_counts, $timeframe_to_mou, $approve_cycle){
            
    $this->db->where('id',$this->id);
    $query=$this->db->update('proposal_header',$prophead_data);

    $this->db->where('id',$this->rationale_to_beneficiaries_fkid);
    $this->db->update('rationale_to_beneficiaries',$rationale_to_beneficiaries);

    $this->db->where('id',$this->Outline_of_Activities_fkid);
    $this->db->update('outline_of_activities',$outline_of_activities);

    $this->db->where('id',$this->budgetary_requirements_fkid);
    $this->db->update(' budgetary_requirements',$budgetary_requirements);

    $this->db->where('id',$this->unitresponsible_fkid);
    $this->db->update(' unitresponsible',$unitresponsible);

    $this->db->where('id',$this->nature_and_area_ofprogram_fkid);
    $this->db->update('nature_and_area_ofprogram',$natprog_progarea);

    $this->db->where('id',$this->unitpersonnel_involved_fkid);
    $this->db->update(' unitpersonnel_involved',$unitpersonnelinv);

    $this->db->where('id',$this->verifdata_with_fkid);
    $this->db->update(' verifdata_with',$verifdata_with);

    $this->db->where('id',$this->verifdata_without_fkid);
    $this->db->update('verifdata_without',$verifdata_without);

    $this->db->where('id',$this->social_dimension_fkid);
    $this->db->update('  social_dimension',$socialdimension);

    $this->db->where('id',$this->practical_counts_fkid);
    $this->db->update('practical_counts',$practical_counts);

    $this->db->where('id',$this->timeframe_to_mou_moa_fkid);
    $this->db->update('timeframe_to_mou_moa',$timeframe_to_mou);

    $this->db->where('approve_id',$this->approve_id);
    $this->db->update('approval_cycle',$approve_cycle);

    return $query;
        }

    public function proposal_log_trail($proposal_id){
        $this->db->select('*');
        $this->db->from('approval_cycle');

        $this->db->join('proposal_header', 'proposal_header.id = approval_cycle.proposal_header_fkid', 'left');
        $this->db->join('user_account', 'user_account.user_id = proposal_header.user_fkid', 'left');

        $this->db->where('approval_cycle.proposal_header_fkid', $proposal_id);
     
$results=array();
       $query = $this->db->get();

            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;
    }




    public function viewSpecificprop($proposal_id){
         $this->db->select('*');
        $this->db->from('proposal_header');
       
        $this->db->join('unitresponsible', 'unitresponsible.id = proposal_header.unitresponsible_fkid', 'left');
        $this->db->join('practical_counts', 'practical_counts.id = proposal_header.practical_counts_fkid', 'left');
        $this->db->join('unitpersonnel_involved', 'unitpersonnel_involved.id = proposal_header.unitpersonnel_involved_fkid', 'left');
        $this->db->join('verifdata_with', 'verifdata_with.id = proposal_header.verifdata_with_fkid', 'left');
        $this->db->join('verifdata_without', 'verifdata_without.id = proposal_header.   verifdata_without_fkid', 'left');


        $this->db->join('social_dimension', 'social_dimension.id = proposal_header.social_dimension_fkid', 'left');
        
        
        $this->db->join('rationale_to_beneficiaries', 'rationale_to_beneficiaries.id = proposal_header.rationale_to_beneficiaries_fkid');
        $this->db->join('outline_of_activities', 'outline_of_activities.id = proposal_header.Outline_of_Activities_fkid');
        $this->db->join('budgetary_requirements', 'budgetary_requirements.id = proposal_header.budgetary_requirements_fkid');
        $this->db->join('nature_and_area_ofprogram', 'nature_and_area_ofprogram.id = proposal_header.nature_and_area_ofprogram_fkid');
         $this->db->join('timeframe_to_mou_moa', 'timeframe_to_mou_moa.id = proposal_header.timeframe_to_mou_moa_fkid');
       
         $this->db->join('user_account', 'user_account.user_id = proposal_header.user_fkid', 'left');
         $this->db->join('approval_cycle', 'approval_cycle.proposal_header_fkid = proposal_header.id');


        $this->db->where('proposal_header.id', $proposal_id);

        $results= array();
         $query = $this->db->get();

            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;

    }

    public function viewSpecificprop_a($proposal_id){
         $this->db->select('*');
        $this->db->from('proposal_header');
       
        $this->db->join('rationale_to_beneficiaries', 'rationale_to_beneficiaries.id = proposal_header.rationale_to_beneficiaries_fkid');
        $this->db->join('outline_of_activities', 'outline_of_activities.id = proposal_header.Outline_of_Activities_fkid');
        $this->db->join('budgetary_requirements', 'budgetary_requirements.id = proposal_header.budgetary_requirements_fkid');
       
       
         $this->db->join('user_account', 'user_account.user_id = proposal_header.user_fkid', 'left');
         $this->db->join('approval_cycle', 'approval_cycle.proposal_header_fkid = proposal_header.id');


        $this->db->where('proposal_header.id', $proposal_id);

        $results= array();
         $query = $this->db->get();

            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;

    }

   

public function decisionApprove(){
    if($this->user_id == $this->reviewer_1){
        $data=array('reviewer1_decision'=>"Approve");
        $this->db->set('reviewer1_decision_date', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->id);
        $query=$this->db->update('approval_cycle',$data);
        return $query;
    }
    elseif($this->user_id == $this->reviewer_2){
        $data=array('reviewer2_decision'=>"Approve");
        $this->db->set('reviewer2_decision_date', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->id);
        $query=$this->db->update('approval_cycle',$data);
        return $query;
    } else{
        $data=array('director_decision'=>"Approve");
        $this->db->set('director_decision_date', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->id);
        $query=$this->db->update('approval_cycle',$data);
        return $query;
    }
    return $query;
    }

    public function decisionDisapprove(){
    if($this->user_id == $this->reviewer_1){
        $data=array('reviewer1_decision'=>"Disapprove");
        $this->db->set('reviewer1_decision_date', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->id);
        $query=$this->db->update('approval_cycle',$data);
        return $query;
    }
    elseif($this->user_id == $this->reviewer_2){
        $data=array('reviewer2_decision'=>"Disapprove");
        $this->db->set('reviewer2_decision_date', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->id);
        $query=$this->db->update('approval_cycle',$data);
        return $query;
    } else{
        $data=array('director_decision'=>"Disapprove");
        $this->db->set('director_decision_date', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->id);
        $query=$this->db->update('approval_cycle',$data);
        return $query;
    }
    
    }

    public function approveProposal(){
    $data=array('vpaa'=>1);
    $this->db->set('date_vpaa_checked', 'NOW()', FALSE);
    $this->db->where('proposal_header_fkid',$this->id);
    $query=$this->db->update('approval_cycle',$data);
    return $query;
     
    }

    public function noteProposalSo(){
        $data = array(
                        'status'=>'5',
                        'noted_by_stat'=>'2'
                    );

        $this->db->where('proposal_id', $this->id);
        $this->db->update('proposal_json', $data); 
        return TRUE;
    }

    public function noteProposal(){

		$data = array(
						'status'=>'3',
						'noted_by_stat'=>'1'
					);

		$this->db->where('proposal_id', $this->id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
    }


// HIS IS THE REAL HARD

    public function noteProposalChair(){

        if($this->noted_by_stat == 0){
            $data = array(
                            'noted_by_stat'=>'1'
                        );
        }

        

        $this->db->where('proposal_id', $this->id);
        $this->db->update('proposal_json', $data); 
        return TRUE;
    }

     public function noteProposalfac(){
        
       if($this->noted_by_faculty == 0){

            $data = array(
                            'noted_by_faculty'=>'1'

                        );

        //$this->db->set('status', 'status' + 20);
        }

        $this->db->where('proposal_id', $this->id);
        $this->db->update('proposal_json', $data); 

        return TRUE;
    }

    // public function FUCKYOUYAWA(){
    //     $data = array(
    //                         'status'=>'1'
    //                     );   

    //    if ($this->noted_by_stat == 1 || $this->noted_by_faculty == 1){
    //         $data = array(
    //                         'status'=>'3'
    //                     );   
    //         }

    //     $this->db->where('proposal_id', $this->id);
    //     $this->db->update('proposal_json', $data); 

    //     return TRUE;
    // }

// THIS IS THE REAL HARD END

    public function noteReport($fd_id){

        $data = array(
                        'report_status'=>'3',
                        'isSubmittedByChair' => 1,
                    );

        $this->db->where('fd_id', $fd_id);
        $this->db->update('report_d', $data); 
        return TRUE;
    }

    public function SOnoteReport($fd_id){

        $data = array(
                        'report_status'=>'6'
                    );

        $this->db->where('fd_id', $fd_id);
        $this->db->update('report_d', $data); 
        return TRUE;
    }

     public function SOnoteReporte($fe_id){

        $data = array(
                        'report_status'=>'6'
                    );

        $this->db->where('fe_id', $fe_id);
        $this->db->update('report_e', $data); 
        return TRUE;
    }

    public function noteOtherReportFaculty($fd_id){

        $data = array(
                        'isSubmittedByFaculty' => '1'
                    );

        $this->db->where('fd_id', $fd_id);
        $this->db->update('report_d', $data); 
        return TRUE;
    }

    public function noteReporte($fe_id){

        $data = array(
                        'report_status'=>'3',
                        'isSubmittedByChair' => '1'
                    );

        $this->db->where('fe_id', $fe_id);
        $this->db->update('report_e', $data); 
        return TRUE;
    }

    public function coordNoteReport($fd_id){

        $data = array(
                        'report_status'=>'5',
                    );

        $this->db->where('fd_id', $fd_id);
        $this->db->update('report_d', $data); 
        return TRUE;
    }

    public function coordNoteReporte($fe_id){

        $data = array(
                        'report_status'=>'5',
                    );

        $this->db->where('fe_id', $fe_id);
        $this->db->update('report_e', $data); 
        return TRUE;
    }


     public function deanNoteReport($fd_id){

        $data = array(
                        'report_status'=>'6',
                    );

        $this->db->where('fd_id', $fd_id);
        $this->db->update('report_d', $data); 
        return TRUE;
    }

    public function deanNoteReporte($fe_id){

        $data = array(
                        'report_status'=>'6',
                    );

        $this->db->where('fe_id', $fe_id);
        $this->db->update('report_e', $data); 
        return TRUE;
    }


    public function adminNoteReport($fd_id){

        $data = array(
                        'report_status'=>'7',
                    );

        $this->db->where('fd_id', $fd_id);
        $this->db->update('report_d', $data); 
        return TRUE;
    }

    public function adminNoteReporte($fe_id){

        $data = array(
                        'report_status'=>'7',
                    );

        $this->db->where('fe_id', $fe_id);
        $this->db->update('report_e', $data); 
        return TRUE;
    }

    public function chairReturn(){
		$data = array(
						'status'=>'2',
						'noted_by_stat'=>'0'
					); 

		$this->db->where('proposal_id', $this->id);
		$this->db->update('proposal_json', $data);
		return TRUE;		
    }


     public function facReturn(){
        $data = array(
                        'status'=>'2',
                        'noted_by_stat'=>'0'
                    ); 

        $this->db->where('proposal_id', $this->id);
        $this->db->update('proposal_json', $data);
        return TRUE;    
     }

    public function soReturn(){

        $data = array(
                        'status'=>'2',
                        'noted_by_stat'=>'0'
                    ); 

        $this->db->where('proposal_id', $this->id);
        $this->db->update('proposal_json', $data);
        return TRUE;        
    }


    public function recommendProposal(){
		$data = array(
			'status'=>'4',
			'coordinator_stat'=>'1'
		);
		$this->db->where('proposal_id', $this->id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
    }

    public function coordrecommendownproposal(){
        $data = array(
            'status'=>'4',
        );
        $this->db->where('proposal_id', $this->id);
        $this->db->update('proposal_json', $data); 
        return TRUE;
    }

    public function coordReturn(){
		$data = array(
					'status'=>'2',
					'coordinator_stat'=>'0'
				);

		$this->db->where('proposal_id', $this->id);
		$this->db->update('proposal_json', $data);
		return TRUE;    
    }

    public function endorseProposal($proposal_id){
        
		$data = array(
			'status'=>'5',
		);
		$this->db->where('proposal_id', $proposal_id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
     
    }
	
	public function vpaaEndorseProposal($proposal_id){
        
		$data = array(
			'status'=>'11',
		);
		$this->db->where('proposal_id', $proposal_id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
     
    }
	
	public function vpaaApproveProposal($proposal_id){
		$data = array(
			'status'=>'12',
		);
		$this->db->where('proposal_id', $proposal_id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
	}
	

	/* 10 denotes the review is completed by two reviewers*/
	public function doneReviewProposal($proposal_id){
        
		$data = array(
			'status'=>'10',
		);
		$this->db->where('proposal_id',$proposal_id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
     
    }
	
    public function deanReturn($proposal_id){
       
		$data=array(
			'status'=>'2'
		);	
		$this->db->where('proposal_id',$proposal_id);
		
		$query=$this->db->update('proposal_json',$data);
		
		return $query;
     
    }
	
	public function directorReturn($proposal_id)
	{
		$data=array(
			'status'=>'2'
		);	
		$this->db->where('proposal_id',$proposal_id);
		
		$query=$this->db->update('proposal_json',$data);
		
        $data=array(
            'review_status'=>'3'
        );  
        $this->db->where('proposal_id',$proposal_id);
        
        $query=$this->db->update('reviewers',$data);
        

		return $query;
	}
	
	public function vpaaReturn($proposal_id)
	{
		$data=array(
			'status'=>'30'
		);	
		$this->db->where('proposal_id',$proposal_id);
		
		$query=$this->db->update('proposal_json',$data);
		
		return $query;
	}

	public function isReviewDone($proposal_id)
	{
		$this->db->select('*');
		$this->db->where('proposal_id',$proposal_id);
		$this->db->where('review_status','0');
		$this->db->from('reviewers');
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
    public function addReviewer($proposal_id,$reviewer1,$reviewer2){
        $this->load->helper('date');
       
        $data=array(
            'reviewer_id'=>$reviewer1,
			'proposal_id'=>$proposal_id,
			'review_status'=>'0'
        );
			
        $query=$this->db->insert('reviewers',$data);
		
		$data=array(
            'reviewer_id'=>$reviewer2,
			'proposal_id'=>$proposal_id,
			'review_status'=>'0'
        );

		$query=$this->db->insert('reviewers',$data);
		
		/*update the status to 6 to denote that it is done for reviewing*/
	    $data2 = array(
			'status'=>'6'
		);
		$this->db->where('proposal_id', $proposal_id);
		$this->db->update('proposal_json', $data2);
		
		return $query;
    }
	
    public function directorApproveReview(){
        $this->load->helper('date');
       
        $data=array(
            'reviewer_1'=>$this->reviewer_1,
            'reviewer_2'=>$this->reviewer_2
        );
			
        $this->db->where('proposal_header_fkid',$this->prop_id);
        $query=$this->db->update('approval_cycle',$data);
        
		return $query;
    }

     public function saveComments() {
     
        $query = $this->db->insert('comments', $this);
        return $query;
    }

    public function saveReviewScores($review_id) {

     $this->db->set('date_reviewed', 'NOW()', FALSE);
	 $this->db->set('review_status', '1');
	 $this->db->where('review_id',$review_id);
     $query = $this->db->update('reviewers', $this);

        return $query;
    }

    public function addDateReview1($reviewer1){

        if ($this->input->post('user_id') == $reviewer1) {
        $this->db->set('date_reviewer_1_checked', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->proposal_header_fkid);
        $query=$this->db->update('approval_cycle');
        }
    
    else{
        $this->db->set('date_director_checked', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->proposal_header_fkid);
        $query=$this->db->update('approval_cycle');
    }

    return $query;

    }

    public function addDateReview2($reviewer2){

      
    if ($this->input->post('user_id') == $reviewer2) {
        $this->db->set('date_reviewer_2_checked', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->proposal_header_fkid);
        $query=$this->db->update('approval_cycle');
        }
    else{
        $this->db->set('date_director_checked', 'NOW()', FALSE);
        $this->db->where('proposal_header_fkid',$this->proposal_header_fkid);
        $query=$this->db->update('approval_cycle');
    }
    return $query;

    }

    public function viewScores($proposal_id) {
      $results = array();
    

        $this->db->select('*');
        $this->db->from('review_scores');
        $this->db->join('user_account', 'user_account.user_id = review_scores.user_fkid', 'left');
        
        

        $this->db->where('review_scores.proposal_header_fkid', $proposal_id);
        $query = $this->db->get();

      
            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;
    }

	public function viewAllScores2($proposal_id)
	{
		$results = array();
		$this->db->select('*');
		$this->db->from('reviewers');
		$this->db->join('user_account','user_account.user_id = reviewers.reviewer_id');
		$this->db->where('proposal_id',$proposal_id);
        $this->db->where('review_status!=',"3");
		
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
            $results = $query->result();
        }
		
        return $results;
	}
	
    public function validate_assessor(){
        $results = array();
        $this->db->select('*');
        $this->db->from('review_scores');
        $query = $this->db->get();

      
            if($query->num_rows() > 0) {
                $results = $query->result();
            }
            return $results;
    }

    public function getOneFormAB(){
        $this->db->select('*');
        $this->db->from('proposal_header');
       
        $this->db->join('unitresponsible', 'unitresponsible.id = proposal_header.unitresponsible_fkid', 'left');
        $this->db->join('practical_counts', 'practical_counts.id = proposal_header.practical_counts_fkid', 'left');
        $this->db->join('unitpersonnel_involved', 'unitpersonnel_involved.id = proposal_header.unitpersonnel_involved_fkid', 'left');
        $this->db->join('verifdata_with', 'verifdata_with.id = proposal_header.verifdata_with_fkid', 'left');
        $this->db->join('verifdata_without', 'verifdata_without.id = proposal_header.   verifdata_without_fkid', 'left');


        $this->db->join('social_dimension', 'social_dimension.id = proposal_header.social_dimension_fkid', 'left');
        
        
        $this->db->join('rationale_to_beneficiaries', 'rationale_to_beneficiaries.id = proposal_header.rationale_to_beneficiaries_fkid');
        $this->db->join('outline_of_activities', 'outline_of_activities.id = proposal_header.Outline_of_Activities_fkid');
        $this->db->join('budgetary_requirements', 'budgetary_requirements.id = proposal_header.budgetary_requirements_fkid');
        $this->db->join('nature_and_area_ofprogram', 'nature_and_area_ofprogram.id = proposal_header.nature_and_area_ofprogram_fkid');
        $this->db->join('timeframe_to_mou_moa', 'timeframe_to_mou_moa.id = proposal_header.timeframe_to_mou_moa_fkid');
       
         $this->db->join('user_account', 'user_account.user_id = proposal_header.user_fkid', 'left');
         $this->db->join('approval_cycle', 'approval_cycle.proposal_header_fkid = proposal_header.id');


        $this->db->where('proposal_header.id', $this->id);

         $query = $this->db->get();
        return $query->row_array();
    }

    public function row_delete($id){
     $this->db->select('*');
        $this->db->from('proposal_header');
       
        $this->db->join('proposal_a', 'proposal_a.id = proposal_header.forma_fkid', 'left');
        $this->db->join('proposal_b', 'proposal_b.id = proposal_header.formb_fkid', 'left');
         
         $this->db->join('approval_cycle', 'approval_cycle.proposal_header_fkid = proposal_header.id', 'left');


        $this->db->where('proposal_header.id', $id);
        $this->db->where('approval_cycle.proposal_header_fkid', $id);
         $this->db->delete('proposal_header', 'approval_cycle ' , 'proposal_a ', 'proposal_b ');
        return true;
  }


  public function addFormA($prophead_data, $rationale_to_beneficiaries, $outline_of_activities, $budgetary_requirements){

       $this->db->trans_start();
      $sql_ratbenef = "INSERT INTO rationale_to_beneficiaries(rationale_and_contextualization, goal_objectives_and_outcomes, participants_partnersand_beneficiaries) 
            VALUES (?, ?, ?)";
            $this->db->query($sql_ratbenef, $rationale_to_beneficiaries); 
            $ratbenef_id = $this->db->insert_id(); 


             $sql_oa="INSERT INTO Outline_of_Activities(tentativedate, activityname, participants_needed, personincharge) VALUES (?,?,?,?)";
             $this->db->query($sql_oa, $outline_of_activities); 
            $oa_id = $this->db->insert_id(); 

        $sql_budreq="INSERT INTO budgetary_requirements(mealsnack_particular,mealsnack_frequency,mealsnack_quantity,mealsnack_amnt,mealsnack_subtotal,transpo_particular,transpo_frequency,transpo_quantity,transpo_amnt,transpo_subtotal,materials_particular,materials_frequency,materials_quantity,materials_amnt,materials_subtotal, grand_total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $this->db->query($sql_budreq, $budgetary_requirements); 
            $budreq_id = $this->db->insert_id(); 

             if($this->input->post('submit') == "submit_a") { 
            $sql_prophead = "INSERT INTO proposal_header(
                user_fkid,
                form_type,
                title,
                school,
                department,
                organization,
                inclusive_date1,
                inclusive_date2,
                venue,
                
                rationale_to_beneficiaries_fkid,
                Outline_of_Activities_fkid,
                budgetary_requirements_fkid,
                
                form_completeness
             ) 
            VALUES (?,?,?,?,?,?,?,?,?,$ratbenef_id,$oa_id,$budreq_id, 1)"; 
        } else {
            $sql_prophead = "INSERT INTO proposal_header(
                user_fkid,
                form_type,
                title,
                school,
                department,
                organization,
                inclusive_date1,
                inclusive_date2,
                venue,
                
                rationale_to_beneficiaries_fkid,
                Outline_of_Activities_fkid,
                budgetary_requirements_fkid,
                unitresponsible_fkid,
                nature_and_area_ofprogram_fkid,
                unitpersonnel_involved_fkid,
                verifdata_with_fkid,
                verifdata_without_fkid,
                social_dimension_fkid,
                practical_counts_fkid,
                timeframe_to_mou_moa_fkid,
                form_completeness
             ) 
            VALUES (?,?,?,?,?,?,?,?,?,$ratbenef_id,$oa_id,$budreq_id, 0)"; 
        }

             
            
            $query = $this->db->query($sql_prophead, $prophead_data);
            $prophead_id= $this->db->insert_id();

            $approve_cycle= "INSERT INTO approval_cycle(proposal_header_fkid) VALUES ($prophead_id)";
            $query2 = $this->db->query($approve_cycle);
         
     $this->db->trans_complete();
     return $query;
    }
	
	/*function introduced by ken*/
	public function insertProposalJSON($user_id,$dataJSON,$status,$form_type)
	{
		$data = array(
		   'user_id' => $user_id ,
		   'proposal_json_format' => $dataJSON ,
           'form_type'=>$form_type,
		   'status' => $status
		);

		$this->db->insert('proposal_json', $data); 
		return $this->db->affected_rows();
	}
    
	public function loadDraftProposal($user_id)
	{
		$results = array();
		$this->db->select("*");
		$this->db->where('status','0');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('proposal_json');
		
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}

	public function loadSubmittedProposal($user_id)
	{
		$this->db->select("*");
        $where = "(status='1' OR status='3' OR status='4' OR status='5' OR status='6' OR status='10' OR status='11' OR status='12')" ;
		$this->db->where($where);
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('proposal_json');
		$results = array();
        if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}


	public function loadReturnedProposal($user_id)
	{
		$this->db->select("*");
		$this->db->where('status','2');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('proposal_json');
		$results = array();
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
		
        return $results;
	}
	
	public function getProposalDetails($id)
	{
		$this->db->select("*");
		$this->db->where('proposal_id',$id);
		$query = $this->db->get('proposal_json');
		$results = array();
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}
	public function getCommitteePair($proposal_id,$user_id)
	{
		$this->db->select("user_account.firstname,user_account.lastname,reviewers.reviewer_id");
		$this->db->from("user_account");
		$this->db->join("reviewers","user_account.user_id=reviewers.reviewer_id");
		$this->db->join("proposal_json","proposal_json.proposal_id=reviewers.proposal_id");
		$this->db->where("reviewers.reviewer_id !=",$user_id);
		$this->db->where("reviewers.proposal_id",$proposal_id);
		
		$query= $this->db->get();
		
		$results = array();
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}
	
	public function getCommittee($proposal_id)
	{
		$this->db->select("user_account.firstname,user_account.lastname,reviewers.reviewer_id");
		$this->db->from("user_account");
		$this->db->join("reviewers","user_account.user_id=reviewers.reviewer_id");
		$this->db->join("proposal_json","proposal_json.proposal_id=reviewers.proposal_id");
		$this->db->where("reviewers.proposal_id",$proposal_id);
		
		$query= $this->db->get();
		
		$results = array();
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}
	
	public function getForReviewProposals($user_id)
	{
		$this->db->select("proposal_json.proposal_id,reviewers.review_id,user_account.firstname,user_account.lastname,proposal_json.proposal_json_format,proposal_json.date_created,proposal_json.user_id");
		$this->db->from("proposal_json");
		$this->db->join("reviewers","proposal_json.proposal_id=reviewers.proposal_id");
		$this->db->join("user_account","user_account.user_id=reviewers.reviewer_id");
		$this->db->where("user_account.user_id",$user_id);
		$this->db->where("reviewers.review_status",0);
        $this->db->group_by('proposal_json.proposal_id');
		$query= $this->db->get();
		
		$results = array();
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}
	
	public function getUser($user_id)
	{
		$this->db->select("*");
		$this->db->from("user_account");
		$this->db->where('user_id',$user_id);
		$query= $this->db->get();
		
		$results = array();
		if($query->num_rows() > 0) 
		{
            $results = $query->result();
        }
        return $results;
	}
	
	public function updateProposalDetails($id,$proposal_json,$status)
	{
		$data = array(
						'proposal_json_format' => $proposal_json,
						'status'=>$status
					);

		$this->db->where('proposal_id', $id);
		$this->db->update('proposal_json', $data); 
	}

	public function LoadProposalsChair($department){
        $results = array();
    
        $where = "(status='1' or status='20' or status = '40') ";  

        $this->db->select('*');

        $this->db->from('proposal_json_full_info');
		$this->db->where($where);
        $this->db->where('noted_by_stat','0');
		$this->db->where('department',$department);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$results = $query->result();
		}
        return $results;
    }

    public function LoadProposalsSo($organization){
        $results = array();
    

        $this->db->select('*');

        $this->db->from('proposal_json_full_info');
        $this->db->where('status','1');
        $this->db->where('organization',$organization);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $results = $query->result();
        }
        return $results;
    }

    public function LoadProposalsFac($department, $organization,$user_id){


        $results = array();
    
        $where = "(status='1' or status='20' or status = '40') ";   

        $this->db->select('*');

        $this->db->from('propsal_json_full_info');
        $this->db->where($where);
        $this->db->where('noted_by_faculty','0');
        $this->db->where('department',$department);
        $this->db->where_not_in('user_id', $user_id);
        $this->db->where('organization',$organization);

        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $results = $query->result();
        }
        return $results;
    }
	
	public function LoadProposalsCoordinator($office){
        $results = array();
    
        $this->db->select('*');

        $where = "(status ='1' and noted_by_stat = '1' and noted_by_faculty='1')";

        $this->db->from('propsal_json_full_info');
		$this->db->where('status','3');
        $this->db->where('office',$office);
        $this->db->or_where($where);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$results = $query->result();
		}
        return $results;
    }

    public function LoadReportECoordinator($office){
        $results = array();
    
        $this->db->select('*');

        $this->db->from('report_d');
        $this->db->where('report_status','3');
        $this->db->where('fd_school',$office);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $results = $query->result();
        }
        return $results;
    }

    public function LoadProposalsDean($office){
        $results = array();

        $this->db->select('*');

        $this->db->where('status','4');
        $this->db->where('office', $office);
        $query = $this->db->get('proposal_json_full_info');

        if($query->num_rows()){
            $results = $query->result();
        }

        return $results;
    }

    public function LoadProposalsDirector(){
        $results = array();

        $this->db->select('*');
		$this->db->join('user_account','user_account.user_id=proposal_json.user_id');
		$this->db->where('proposal_json.status','5');
        $query = $this->db->get('proposal_json');

        if($query->num_rows()){
            $results = $query->result();
        }

        return $results;
    }
	
	public function LoadProposalsVpaa(){
        $results = array();

        $this->db->select('*');
		$this->db->join('user_account','user_account.user_id=proposal_json.user_id');
		$this->db->where('proposal_json.status','11');
        $query = $this->db->get('proposal_json');

        if($query->num_rows()){
            $results = $query->result();
        }

        return $results;
    }
	
	public function LoadApproveProposals(){
		$results = array();

        $this->db->select('*');

		$this->db->join('user_account','user_account.user_id=proposal_json.user_id');
		$this->db->where('proposal_json.status','12');
        $query = $this->db->get('proposal_json');

        if($query->num_rows()){
            $results = $query->result();
        }

        return $results;
	}
	
	
	public function LoadProposalsDoneReview(){
        $results = array();

        $this->db->select('*');
		$this->db->from('proposal_json');
		$this->db->join('user_account','proposal_json.user_id=user_account.user_id');
        $this->db->where('proposal_json.status','10');
        $query = $this->db->get();

        if($query->num_rows()){
            $results = $query->result();
        }

        return $results;
    }

//Send Email to the Chair
    public function getChairEmail($department,$fkid){
    
        $conditions = array('user_account.department' => $department, 
                        'user_account.designation_fkid' => $fkid 
                    );
        $this->db->select('*');
        $this->db->from('user_account');
        $this->db->where($conditions);
        $query = $this->db->get();
        foreach($query->result_array() as $row){}
        return $row['email'];
    }

    public function getDeanEmail($office,$fkid){
    
        $conditions = array('user_account.office' => $office, 
                        'user_account.designation_fkid' => $fkid 
                    );
        $this->db->select('*');
        $this->db->from('user_account');
        $this->db->where($conditions);
        $query = $this->db->get();
        foreach($query->result_array() as $row){}
        return $row['email'];
    }

    public function getReviewerEmail1($proposal_id,$reviewer1,$reviewer2){
        $conditions = array('reviewer_id' => $reviewer1,
                            'proposal_id' => $proposal_id
                    );

        $this->db->select('*');
        $this->db->from('reviewers');
        $this->db->join('user_account', 'user_account.user_id = reviewer_id');
        $this->db->where($conditions);
        $query = $this->db->get();

        foreach($query->result_array() as $row){}
        return $row['email'];
    }

    public function getReviewerEmail2($proposal_id,$reviewer1,$reviewer2){

        $condition2 = array('reviewer_id' => $reviewer2,
                            'proposal_id' => $proposal_id
                    );

        $this->db->select('*');
        $this->db->from('reviewers');
        $this->db->join('user_account', 'user_account.user_id = reviewer_id');
        $this->db->where($condition2);
        $result = $this->db->get();

        foreach($result->result_array() as $rows){}
        return $rows['email'];
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Reports extends CI_Model
{
	

	public function LoadReport_d(){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 

		//$this->db->order_by("datecreated");
		//$this->db->join('user_account', 'user_account.user_id = report_d.creator_id', 'inner');
		//$this->db->where('who_created', '$completename');

		 // $query = $this->db->get_where('who_created =', $completename);
		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_dCHAIR($dept){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 
		//$this->db->where('report_status',3);
		$this->db->where('creators_department',$dept);
		$this->db->where('report_status', 3);

		//$this->db->order_by("datecreated");
		//$this->db->join('user_account', 'user_account.user_id = report_d.creator_id', 'inner');
		//$this->db->where('who_created', '$completename');

		 // $query = $this->db->get_where('who_created =', $completename);
		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		return $results;
	}

	public function LoadReport_eCHAIR($dept){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_e'); 
		//$this->db->where('report_status',3);
		$this->db->where('creators_department',$dept);
		$this->db->where('report_status', 3);

		//$this->db->order_by("datecreated");
		//$this->db->join('user_account', 'user_account.user_id = report_d.creator_id', 'inner');
		//$this->db->where('who_created', '$completename');

		 // $query = $this->db->get_where('who_created =', $completename);
		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		return $results;
	}

	public function LoadReport_dCOORD($office){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 
		$this->db->where('creators_school',$office);
		$this->db->where('report_status', 4);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_dmyCOORD($office, $coord_id){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 
		$this->db->where('creators_school',$office);
		$this->db->where('creator_id',$coord_id);
		$this->db->where('report_status', 4);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_eCOORD($office){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_e'); 
		$this->db->where('creators_school',$office);
		$this->db->where('report_status', 4);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_emyCOORD($office, $coord_id){
			$results = array();

			$this->db->select('*');
			$this->db->from('report_e'); 
			$this->db->where('creators_school',$office);
			$this->db->where('creator_id',$coord_id);
			$this->db->where('report_status', 4);

			$query = $this->db->get();	

			    if($query->num_rows() > 0) {
			        $results = $query->result();
			    }
			    return $results;
		}

	public function LoadReport_dDEAN($office){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 
		$this->db->where('creators_school',$office);
		$this->db->where('report_status', 5);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_eDEAN($office){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_e'); 
		$this->db->where('creators_school',$office);
		$this->db->where('report_status', 5);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_dADMIN(){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 
		$this->db->where('report_status', 6);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_eADMIN(){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_e'); 
		$this->db->where('report_status', 6);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_dVPAA(){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_d'); 
		$this->db->where('report_status', 7);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function LoadReport_eVPAA(){
		$results = array();

		$this->db->select('*');
		$this->db->from('report_e'); 
		$this->db->where('report_status', 7);

		$query = $this->db->get();	

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	function get_title($idsauser) {
 		 $where = "(status='12')";
 		 $this->db->where($where);
 		 $this->db->where('user_id', $idsauser);
 		 $this->db->where('isreported', 0);

 		 
		 $q = $this->db->get('proposal_json');

    	if ($q->num_rows() > 0)
    	{
        	foreach($q->result() as $row) {     
          		$data[] = $row;
        	}
        	return $data;
    	}
  }

	


	public function LoadReport_e(){
		$results = array();
		// Query #1
		$this->db->select('*');
		$this->db->from('report_e');
		//$this->db->join('user_account', 'user_account.user_id = report_d.creator_id', 'inner');

		 $query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
		
	}

	public function viewReport_e($reporte_id){
		$this->db->select('*');
		$this->db->from('report_e');

		$this->db->where('fe_id', $reporte_id);	

		 $query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;

	}

	public function viewReport_d($reportd_id){
		$this->db->select('*');
		$this->db->from('report_d');

		$this->db->where('fd_id', $reportd_id);

		 $query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;

	}

	 

 	public function AddFormE() {
 	 
        $query = $this->db->insert('report_e', $this);
        return $query;
    }
	
	public function AddFormD() {
		// $this->db->select('*');
		// $this->db->from('proposal_header');


        $query = $this->db->insert('report_d', $this);

        return $query;
    }

    public function isreported($report_id) {
	    $data = array( 
			    'isreported' => 1,
			);	

			$this->db->where('user_id', $this->creator_id);
			$this->db->where('proposal_id', $report_id);
			$query = $this->db->update('proposal_json', $data);

			return $query;
	}

public function updateform_e(){
 
    $this->db->where('fe_id',$this->fe_id);
    $query=$this->db->update('report_e',$this);
    return $query;

	}

public function updateform_d(){
 
    $this->db->where('fd_id',$this->fd_id);
    $query=$this->db->update('report_d',$this);
   /*  ?><script>alert("POTANGINAMORIN");</script><?php*/
    return $query;
}


//for FORM E
 public function saveChanges_e(){
        if(isset($this->fe_id)){
            $query=$this->updateform_e();
          /*  ?><script>alert("POTANGINAMORIN");</script><?php*/
        }else{
            $query=$this->AddFormE();
        }
        return $query;
         }

//for FORM D
         public function saveChanges_d(){
        if(isset($this->fd_id)){
            $query=$this->updateform_d();
           /* ?><script>alert("POTANGINAMO");</script><?php*/
         }else{
         	 /* ?><script>alert("FUCK");</script><?php*/
            $query=$this->AddFormD();

         }
        return $query;
         }
//for FORM E
	public function getOneForme(){
        $query=$this->db->get_where('report_e', array('fe_id'=>$this->id));
        return $query->row_array();
    }
//for FORM D
    public function getOneFormd(){
        $query=$this->db->get_where('report_d', array('fd_id'=>$this->id));
        return $query->row_array();
    }

  public function row_delete_e($id){
  	 $this->db->where('fe_id', $id);
   $this->db->delete('report_e'); 
  }

  public function row_delete_d($id){
  	 $this->db->where('fd_id', $id);
   	 $this->db->delete('report_d'); 
  }

  public function ezeronishabai($proposal_id){
  	$data = array(
			'isreported'=>'0',
		);
		$this->db->where('proposal_id', $proposal_id);
		$this->db->update('proposal_json', $data); 
		return TRUE;
  }

  public function row_delete_proposals($id){
  	$this->db->where('fd_id', $id);
   	$this->db->delete('proposal_header'); 
  }

}


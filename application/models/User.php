<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Model
{
	private $record = array();
	public $user_id;
	public $firstname;
	public $lastname;
	public $email;
	public $contact_num;
	public $designation_fkid;
	public $office;
	public $department;
	public $organization;
	public $username;
	public $password;

	public function addNewRep(){
		  $query = $this->db->insert('user_account', $this);
        return $query;
	}

	public function check_accounts() {
		$exist = FALSE;
		$record = array('username' => $this->username, 'password' => $this->password, 'status' => 1);

		$query = $this->db->get_where('user_account', $record);

		if($query->num_rows() === 1)
			$exist = TRUE;

		return $exist;
	}

	public function load_user() {
		$record = array('username' => $this->username, 'password' => $this->password);

		$this->db->select('*')->from('user_account AS ua')->where($record);
		$this->db->join('user_designation AS ud', 'ud.id = ua.designation_fkid', 'left');

		$query = $this->db->get();

		return $query->row_array();
	}

	public function approve_user() {
		$sql = "SELECT * FROM user_account WHERE user_id = ? AND status = 0";
	}

	public function add_user() {
		$record = array(
				'firstname'			=> $this->firstname, 
				'lastname'			=> $this->lastname, 
				'email'				=> $this->email, 
				'contact_num'		=> $this->contact_num, 
				'designation_fkid'	=> $this->designation, 
				'office'			=> $this->office, 
				'department'		=> $this->department, 
				'organization'		=> $this->organization, 
				'username'			=> $this->username, 
				'password'			=> $this->password, 
				'status'			=> FALSE
			);

		$this->db->insert('user_account', $record);

		return $this->db->affected_rows() > 0;
	}

	public function get_user() {
		$query = $this->db->get_where('user_account', array('user_id' => $this->user_id));
		
		return $query->row_array();
	}

	public function update_user() {
		$record = array(
				'firstname' 		=> $this->firstname,
				'lastname'			=> $this->lastname,
				'email'				=> $this->email,
				'contact_num'		=> $this->contact_num,
				//'office'			=> $this->office,
				//'department'		=> $this->department,
				'username'			=> $this->username,
				'password'			=> $this->password,
				'updated_by'		=> $this->updated_by
			);

		$this->db->update('user_account', $record, array('user_id' => $this->user_id));
	    
		return ($this->db->affected_rows() > 0)?TRUE:FALSE;
	}

	public function get_active_users() {
		$this->db->select('user.user_id, user.lastname, user.firstname, designation.designation, user.office');
		$this->db->join('user_designation AS designation', 'user.designation_fkid = designation.id');
		$this->db->where(array('status' => FALSE));

		$query = $this->db->get('user_account AS user');
		
		return $query;
	}

	public function get_applying_users() {
		$query = $this->db->get_where('user_account', array('status' => '2'));
		
		return $query;
	}

	

	public function get_one_user() {
		$query = $this->db->get_where('user_account', array('user_id' => $this->user_id));
		
		return $query->result();
	}

	public function edit_user_profile() {
		$record = array(
				'firstname'		=> $this->firstname,
				'lastname'		=> $this->lastname,
				'office'		=> $this->office,
				'department'	=> $this->department,
				'organization'	=> $this->organization,
				'username'		=> $this->username,
				'password' 		=> $this->password,
				'updated_by' 		=> $this->addedbyfirstname." ".$this->addedbylastname
			);
		
		$query = $this->db->update('user_account', $record, array('user_id' => $this->user_id));

		return $query;
	}

	public function delete_user_profile() {
		$record = array('status' => 0);

		$query = $this->db->update('user_account', $record, array('user_id' => $this->user_id));

		return $query;
	}

	public function accept_user_application() {
		$record = array('status' => 1,
						'added_by' => $this->firstname." ".$this->lastname
						);

		$query = $this->db->update('user_account', $record, array('user_id' => $this->user_id));

		return $query;
	}

	public function deny_user_application() {

		$query = $this->db->delete('user_account', array('user_id' => $this->user_id));

		return $query;
	}
}
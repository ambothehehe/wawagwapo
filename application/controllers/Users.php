<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* January 13, 2016
* developers: Bjarne Galendez, Leigh Mabano, 
*             Zoreck Mahusay, Amanda Quinal
* Revision History:
* 2017-11-26 - Added designation_fkid in setuserprofile
* to avoid string comparison for the session checking per
* user account.
*/
class Users extends CI_Controller
{

	public function __construct() {
		parent::__construct();
	}

	public function process_reg() {
		$this->load->model('User_process');
		$user = new User_process();

		$user->firstname = $this->input->post('firstname');
		$user->lastname = $this->input->post('lastname');
		$user->office = $this->input->post('office');
		$user->department = $this->input->post('department');
		$user->organization = $this->input->post('organization');
		$user->email = $this->input->post('email');
		$user->contact_num = $this->input->post('contact_num');
		$user->username = $this->input->post('username');
		$user->designation_fkid = $this->input->post('designation');
		

		if ($this->input->post('register') == 'register') {
			$user->status = '2';
		}

		if ($this->input->post('director_registration') == 'register') {
			$user->status = '1';
		}

		if ($this->input->post('password') == $this->input->post('password_confirmation')) {
			$user->password = $this->input->post('password');
		}

			$result=$user->addNewRep();
			if(!$result){
			echo mysqli_error($result);
			}
			else{
			redirect('Main','refresh');
			}
		

		// else{
		// 	echo "<meta http-equiv='refresh' content='3; url=".site_url()."'>";
		//       echo "<h3>Wrong username or password</h3>";
		//       echo "<h5> redirecting to homepage ... </h5>";
		//       return;
		// }

	}

	public function login() {
		if($this->input->post('login')) {
		  
		  $log = $this->input->post(NULL, TRUE);
		  
		  if($this->form_validation->run() === FALSE) {
		  	echo "Sorry. You cannot login for the following reason/s:";
		    echo validation_errors();
		    return;
		  } 

		  	$this->load->model('User');
		    $user = new User();
		    
		    $user->username = $log['username'];
		    $user->password = $log['password'];
		    
		    $check = $user->check_accounts();
		    
		    if ($check === TRUE) {
		   	  $this->setuser($user->username, $user->password);
		    } 

		    if ($check === FALSE) {
		    	?><script>alert("Invalid username or password");</script><?php
		      redirect('', 'refresh');
		    }
		  
		}
		else{
			echo "Invalid Access";
		}
	}

	private function setuser($username,$password) {
		$this->load->model('User');
		$user = new User();
		
		$user->username = $username;
		$user->password = $password;
		
		$query = $user->load_user();

		$data = array(
		  	'session_id'	=> session_id(),
		  	'ip_address'	=> $_SERVER['REMOTE_ADDR'],
		  	'user_id' 		=> $query['user_id'],
		  	'firstname' 	=> $query['firstname'],
		  	'lastname' 		=> $query['lastname'],
		  	'email' 		=> $query['email'],
		  	'contact_num' 	=> $query['contact_num'],
		  	'designation' 	=> $query['designation'],
			'designation_fkid'=>$query['designation_fkid'],
		  	'office' 		=> $query['office'],
		  	'department'	=> $query['department'],
		  	'organization'	=> $query['organization'],
		  	'logged_in' 	=> TRUE
		);
		
		  $this->session->set_userdata($data);
		
		  $this->setprofile();
	}

	public function setprofile() {
		$designation = $this->session->designation;
		
		if($designation === 'Vice-President for Academic Affairs')
			redirect(site_url('Vpaa/home'));
		
		if ($designation === 'CES Director') 
		   redirect(site_url('Director/home'));

		if ($designation === 'School Dean')
		   redirect(site_url('Dean/home'));

		if ($designation === 'Department Chair')
		   redirect(site_url('Chair/home'));

		if ($designation === 'Coordinator') 
		   redirect(site_url('Coordinator/home')); 

		if ($designation === 'Representative')
		   redirect(site_url('Representative/home'));

		if ($designation === 'Co-Curricular Organization')
		   redirect(site_url('CoCurricular/home'));

		if ($designation === 'Extra-Curricular Organization')
			redirect(site_url('ExtraCurricular/home'));

		if ($designation === 'Faculty')
		   redirect(site_url('Faculty/home'));

		if ($designation === 'Office of Student Affairs')
		   redirect(site_url('OSA/home'));

		if ($designation === 'Support Unit')
		   redirect(site_url('Support_unit/home'));

		if ($designation === 'Student Organization Adviser')
		   redirect(site_url('StudentOrganization/home'));
		
	}

	public function getUserData() {
		$this->load->model('User');
		$user = new User();
		
		$user->user_id = $this->session->user_id;
		
		$query = $user->get_user();
		
		foreach ($query->result() as $user) {
		  $data = array(
		  	'user_id' 		=> $user->user_id,
		  	'firstname' 	=> $user->firstname,
		  	'lastname' 		=> $user->lastname,
		  	'email' 		=> $user->email,
		  	'contact_num' 	=> $user->contact_num,
		  	'school' 		=> $user->office,
		  	'department'	=> $user->department
		  );
		}
	}

	public function logout() {
		$data = array('session_id','ip_address','user_id','firstname','mname','lastname','email','contact_num','designation','office','logged_in');
		
		$this->session->unset_userdata($data);
		
		$this->session->sess_destroy();
		session_destroy();
		redirect(site_url());
	}

	

	public function getUserInfo() {
		$this->load->model('User');
		$user = new User();
		
		$user->user_id = $this->input->post('id', TRUE);
		
		$data = $user->get_one_user();
		
		echo json_encode($data);
	}

	public function editUserProfile() {
		$this->load->model('User');
		$user = new User();
		
		$user->user_id = $this->input->post('user_id', TRUE);
		$user->firstname = $this->input->post('firstname', TRUE);
		$user->lastname = $this->input->post('lastname', TRUE);
		$user->office = $this->input->post('office', TRUE);
		$user->department = $this->input->post('department', TRUE);
		$user->organization = $this->input->post('organization', TRUE);
		$user->username = $this->input->post('username', TRUE);
		$old_password = $this->input->post('old_password', TRUE);
		$user->password = $old_password;
		$status = $user->edit_user_profile();

		echo json_encode($status);
	}
	public function editPersonalProfile() {
		
		if($this->input->post('firstname')) {
		  	$data = $this->input->post("edit_profile",TRUE);

		  	$this->load->model('User');
		  	$user = new User();

		  	$user->user_id 		= $this->session->user_id;
		  	$user->firstname 	= $this->input->post('firstname');
			$user->lastname 	= $this->input->post('lastname');
			$user->email 		= $this->input->post('email');
			$user->contact_num  = $this->input->post('contact_num');
			//$user->office 		= $this->input->post('school');
			//$user->deparment 	= $this->input->post('deparment');
			$user->username 	= $this->input->post('username');
			$user->password 	= $this->input->post('password');
		  	$state = $user->update_user();

		  	if ($state == TRUE) {
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
                echo "Success";
		  	} else {
				echo "Error";
		  	}
			
		}else{
			echo $this->session->user_id;
		}
	}
	public function deleteUserProfile() {
		$this->load->model('User');
		$user = new User();

		$user->user_id = $this->input->post('id', TRUE);

		$status = $user->delete_user_profile();

		echo json_encode($status);
	}

	public function addAnotherUserProfile() {
		if($this->input->post('lastname')) {
			$this->load->model('User');
			$user = new User();

			$user->lastname = $this->input->post('lastname', TRUE);
			$user->firstname = $this->input->post('firstname', TRUE);
			$user->designation_fkid = $this->input->post('designation', TRUE);
			$user->office = $this->input->post('office', TRUE);
			$user->department = $this->input->post('department', TRUE);
			$user->email = $this->input->post('email', TRUE);
			$user->organization = $this->input->post('organization', TRUE);
			$user->contact_num = $this->input->post('contact_num', TRUE);
			$user->username = $this->input->post('username', TRUE);
			$user->password = $this->input->post('password', TRUE);

			$status = $user->addNewRep();

			if ($status) {
				$this->session->set_flashdata('success_msg',
						'<strong>You Have Added Another Account!</strong> You have successfully added another account into the system.');

				redirect(site_url('Director/manage_accounts'), "refresh");
			}

			if (!$status) {
				$this->session->set_flashdata('error_msg',
						'<strong>Something Went Wrong!</strong> An Error occured while saving your report.');

				redirect(site_url('Director/manage_accounts'), "refresh");
			}
		}else{
			echo "Gwapo si ken";
		}
	}

	public function acceptUserApplication() {
		$this->load->model('User');
		$user = new User();

		$user->user_id = $this->input->post('id', TRUE);
		
		$status = $user->accept_user_application();

		echo json_encode($status);

	}

	public function send()
	{
		$this->load->model('Proposal_AB');
		$user_id = $this->input->post('senderId');

		$data['email'] = $this->Proposal_AB->getPendingEmail($user_id);
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
			$this->email->to($data['email']);
			$this->email->subject('CES Proposal Notification From Representative');
			$this->email->message('Good day! Your account has been approved by the Director. You can now use your account. Just login your account with your credentials');
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

	public function denyUserApplication() {
		$this->load->model('User');
		$user = new User();

		$user->user_id = $this->input->post('id', TRUE);

		$status = $user->deny_user_application();

		echo json_encode($status);
	}
}
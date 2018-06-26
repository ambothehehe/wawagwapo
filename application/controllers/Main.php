<?php
/**
* Main controller
* November 7, 2015
* Developers: Amanda Quinal, Leigh Mabano, Zoreck Mahusay
*/
class Main extends CI_Controller
{

	public function index() {
		$designation = $this->session->designation;
		if($designation === 'Vice-President for Academic Affairs')
			redirect(site_url('Vpaa/home'));


		else if ($designation === 'Student Organization Adviser')
		   redirect(site_url('StudentOrganization/home'));

		else if ($designation === 'CES Director')
		   redirect(site_url('Director/home'));

		else if ($designation === 'School Dean')
		   redirect(site_url('Dean/home'));

		else if ($designation === 'Department Chair')
		   redirect(site_url('Chair/home'));

		else if ($designation === 'Coordinator')
		   redirect(site_url('Coordinator/home'));

		else if ($designation === 'Representative')
		   redirect(site_url('Representative/home'));

		else if ($designation === 'Co-Curricular Organization')
		   redirect(site_url('CoCurricular/home'));

		else if ($designation === 'Extra-Curricular Organization')
		   redirect(site_url('ExtraCurricular/home'));

		else if ($designation === 'Faculty')
		   redirect(site_url('Faculty/home'));

		else if ($designation === 'Office of Student Affairs')
		   redirect(site_url('OSA/home'));

		else if ($designation === 'Support Unit')
		   redirect(site_url('Support_unit/home'));
	    else
		   $this->load->view('Homepage');
	}

	public function signup() {
		$this->load->view('register');
	}

}

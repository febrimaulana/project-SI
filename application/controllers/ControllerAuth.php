<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAuth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
	}


	public function index()
	{
		$data['title'] = "Login E-Report TA/KP";
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function signup()
	{
		$data['title'] = "Sign Up E-Report TA/KP";
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/signup');
		$this->load->view('templates/auth_footer');
	}
}

/* End of file ControllerDashboard.php */

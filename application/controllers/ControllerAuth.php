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
		$data['title'] = "Login";
		$lokasi = 'auth/login';
		templates($lokasi, $data);
	}

	public function signup()
	{
		$data['title'] = "Sign Up";
		$lokasi = 'auth/signup';
		templates($lokasi, $data);
	}
}

/* End of file ControllerDashboard.php */

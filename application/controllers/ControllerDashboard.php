<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
		aksessistem();
	}


	public function index()
	{
		$data['title'] = "Dashboard E-Report TA/KP";
		$lokasi = 'dashboard/index';
		templates($lokasi, $data);
	}
}

/* End of file ControllerDashboard.php */

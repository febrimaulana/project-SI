<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
	}


	public function index()
	{
		$data['title'] = "Dashboard";
		$lokasi = 'dashboard/index';
		templates($lokasi, $data);
	}
}

/* End of file ControllerDashboard.php */

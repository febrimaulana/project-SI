<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTitleMenu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
	}


	public function index()
	{
		$data['title'] = "Menu Title";
		$data['menu'] = $this->menu->GetAllTitleMenu();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('menu/title', $data);
		$this->load->view('templates/footer', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$data = [
				"nama_title_menu" => $this->input->post('nama')
			];
			$this->menu->TambahTitleMenu($data);
			redirect('menu/title');
		}
	}

	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->menu->HapusTitleMenu($id);
		redirect('menu/title');
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$id = $this->input->post('id');
			$data = [
				"nama_title_menu" => $this->input->post('nama')
			];
			$this->menu->UbahTitleMenu($id, $data);
			redirect('menu/title');
		}
	}
}

/* End of file ControllerTitleMenu.php */

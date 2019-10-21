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
		$lokasi = 'menu/title';
		$data['menu'] = $this->menu->GetAllTitleMenu();
		templates($lokasi, $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Title Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$data = [
				"nama_title_menu" => $this->input->post('nama')
			];
			$this->menu->TambahTitleMenu($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('menu/title');
		} else {
			$formnama =  strip_tags(form_error('nama'));
			$this->session->set_flashdata('gagal', $formnama);
			redirect('menu/title');
		}
	}

	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->menu->HapusTitleMenu($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('menu/title');
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Title Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$id = $this->input->post('id');
			$data = [
				"nama_title_menu" => $this->input->post('nama')
			];
			$this->menu->UbahTitleMenu($id, $data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
			redirect('menu/title');
		} else {
			$formnama =  strip_tags(form_error('nama'));
			$this->session->set_flashdata('gagal', $formnama);
			redirect('menu/title');
		}
	}
}

/* End of file ControllerTitleMenu.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDosen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
		aksessistem();
	}


	public function index()
	{
		$data['title'] = "Master List Dosen";
		$lokasi = 'dosen/masterlist';
		$data['dosen'] = $this->menu->GetAllDosen();
		templates($lokasi, $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Dosen Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$data = [
				"id_dosen" => $this->input->post('id'),
				"nama_dosen" => $this->input->post('nama')
			];
			$this->menu->TambahDosen($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('dosen/list');
		} else {
			$formnama =  strip_tags(form_error('nama'));
			$this->session->set_flashdata('gagal', $formnama);
			redirect('dosen/list');
		}
	}

	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->menu->HapusDosen($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('dosen/list');
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Dosen Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$id = $this->input->post('id');
			$data = [
				"nama_dosen" => $this->input->post('nama')
			];
			$this->menu->UbahDosen($id, $data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
			redirect('dosen/list');
		} else {
			$formnama =  strip_tags(form_error('nama'));
			$this->session->set_flashdata('gagal', $formnama);
			redirect('dosen/list');
		}
	}
}

/* End of file ControllerTitleMenu.php */

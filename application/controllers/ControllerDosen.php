<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDosen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
		$this->load->model('ModelDosen', 'dosen');
		$this->load->model('ModelAuth', 'auth');
		$this->load->model('ModelJurusan', 'jurusan');
		$akses = "Dosen Pembiming";
		aksessistem($akses);
	}


	public function HalamanDosenPembimbing()
	{
		$this->form_validation->set_rules('id', 'ID', 'trim|required|numeric', [
			"required" => "ID Dosen Harus Diisi",
			"numeric" => "Input Harus Number"
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Dosen Harus Diisi"
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			"required" => "Email Dosen Harus Diisi",
			"valid_email" => "Email Tidak Valid"
		]);
		$this->form_validation->set_rules('notelp', 'No HP', 'trim|required|numeric', [
			"required" => "NO HP Dosen Harus Diisi",
			"numeric" => "Input Harus Number"
		]);
		$this->form_validation->set_rules('alamat', 'Email', 'trim|required', [
			"required" => "Alamat Dosen Harus Diisi"
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Dosen Pembiming";
			$lokasi = 'dosen/pembimbing';
			$data['dosen'] = $this->dosen->GetAllDosenPembimbing();

			templates($lokasi, $data);
		} else {
			$this->TambahDosenPembimbing();
		}
	}

	public function TambahDosenPembimbing()
	{
		$cekdata = $this->dosen->CekData($this->input->post('id'));
		if (empty($cekdata)) {
			$data1 = [
				"id_dosen" => $this->input->post('id'),
				"nama_dosen" => $this->input->post('nama'),
				"email_dosen" => data_hash($this->input->post('email')),
				"no_telp_dosen" => $this->input->post('notelp'),
				"alamat_dosen" => $this->input->post('alamat')
			];

			$data2 = [
				"username" => $this->input->post('id'),
				"aktor_id" => 3,
			];
			$this->dosen->TambahDosen($data1);
			$this->auth->TambahAksesLogin($data2);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('dosen/pembimbing');
		} else {
			$this->session->set_flashdata('gagal', 'NID sudh terdaftar!');
			redirect('dosen/pembimbing');
		}
	}

	public function HapusDosenPembimbing()
	{
		$id = $this->uri->segment(4);
		$this->dosen->HapusDosen($id);
		$this->auth->HapusAksesSistem($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('dosen/pembimbing');
	}

	public function UbahDosenPembimbing()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Dosen Harus Diisi"
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			"required" => "Email Dosen Harus Diisi",
			"valid_email" => "Email Tidak Valid"
		]);
		$this->form_validation->set_rules('notelp', 'No HP', 'trim|required|numeric', [
			"required" => "NO HP Dosen Harus Diisi",
			"numeric" => "Input Harus Number"
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', [
			"required" => "Alamat Dosen Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$id = $this->input->post('id');
			$data = [
				"nama_dosen" => $this->input->post('nama'),
				"email_dosen" => data_hash($this->input->post('email')),
				"no_telp_dosen" => $this->input->post('notelp'),
				"alamat_dosen" => $this->input->post('alamat')
			];

			$this->dosen->UbahDosen($id, $data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
			redirect('dosen/pembimbing');
		} else {
			$this->session->set_flashdata('gagal', 'Gagal Input Data');
			redirect('dosen/pembimbing');
		}
	}

	public function HalamanDosenJurusan()
	{
		$this->form_validation->set_rules('id', 'ID', 'trim|required|numeric', [
			"required" => "ID Dosen Harus Diisi",
			"numeric" => "Input Harus Number"
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Dosen Harus Diisi"
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			"required" => "Email Dosen Harus Diisi",
			"valid_email" => "Email Tidak Valid"
		]);
		$this->form_validation->set_rules('notelp', 'No HP', 'trim|required|numeric', [
			"required" => "NO HP Dosen Harus Diisi",
			"numeric" => "Input Harus Number"
		]);
		$this->form_validation->set_rules('alamat', 'Email', 'trim|required', [
			"required" => "Alamat Dosen Harus Diisi"
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Dosen Jurusan";
			$lokasi = 'dosen/jurusan';
			$data['dosen'] = $this->dosen->GetAllDosenJurusan();
			$data['jurusan'] = $this->jurusan->GetDataAllJurusan();

			templates($lokasi, $data);
		} else {
			$this->TambahDosenJurusan();
		}
	}

	public function TambahDosenJurusan()
	{
		$cekdata = $this->dosen->CekData($this->input->post('id'));
		if (empty($cekdata)) {
			$data1 = [
				"id_dosen" => $this->input->post('id'),
				"nama_dosen" => $this->input->post('nama'),
				"email_dosen" => data_hash($this->input->post('email')),
				"no_telp_dosen" => $this->input->post('notelp'),
				"alamat_dosen" => $this->input->post('alamat')
			];

			$data2 = [
				"username" => $this->input->post('id'),
				"jurusan_id" => $this->input->post('jurusan'),
				"aktor_id" => 2
			];

			$this->dosen->TambahDosen($data1);
			$this->auth->TambahAksesLogin($data2);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('dosen/jurusan');
		} else {
			$this->session->set_flashdata('gagal', 'NID sudh terdaftar!');
			redirect('dosen/jurusan');
		}
	}

	public function HapusDosenJurusan()
	{
		$id = $this->uri->segment(4);
		$this->dosen->HapusDosen($id);
		$this->auth->HapusAksesSistem($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('dosen/jurusan');
	}

	public function UbahDosenJurusan()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Dosen Harus Diisi"
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			"required" => "Email Dosen Harus Diisi",
			"valid_email" => "Email Tidak Valid"
		]);
		$this->form_validation->set_rules('notelp', 'No HP', 'trim|required|numeric', [
			"required" => "NO HP Dosen Harus Diisi",
			"numeric" => "Input Harus Number"
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', [
			"required" => "Alamat Dosen Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$id = $this->input->post('id');
			$data = [
				"nama_dosen" => $this->input->post('nama'),
				"email_dosen" => data_hash($this->input->post('email')),
				"no_telp_dosen" => $this->input->post('notelp'),
				"alamat_dosen" => $this->input->post('alamat')
			];

			$this->dosen->UbahDosen($id, $data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
			redirect('dosen/jurusan');
		} else {
			$this->session->set_flashdata('gagal', 'Gagal Input Data');
			redirect('dosen/jurusan');
		}
	}
}

/* End of file ControllerTitledosen.php */

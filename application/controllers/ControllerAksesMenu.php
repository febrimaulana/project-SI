<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAksesMenu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
		$akses = "Akses Menu";
		aksessistem($akses);
	}

	public function index()
	{
		$data['title'] = "Akses Menu";
		$lokasi = 'menu/akses';
		$data['aktor'] = $this->menu->GetAllAktor();

		templates($lokasi, $data);
	}

	public function tambahaktor()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Aktor Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$data = [
				"nama_aktor" => $this->input->post('nama')
			];
			$this->menu->TambahAktor($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
			redirect('menu/aktor');
		} else {
			$formnama =  strip_tags(form_error('nama'));
			$this->session->set_flashdata('gagal', $formnama);
			redirect('menu/aktor');
		}
	}

	public function hapusaktor()
	{
		$id = $this->uri->segment(4);
		$this->menu->HapusAktor($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
		redirect('menu/aktor');
	}

	public function ubahaktor()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			"required" => "Nama Aktor Harus Diisi"
		]);

		if ($this->form_validation->run() == TRUE) {
			$id = $this->input->post('id');
			$data = [
				"nama_aktor" => $this->input->post('nama')
			];
			$this->menu->UbahAktor($id, $data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
			redirect('menu/aktor');
		} else {
			$formnama =  strip_tags(form_error('nama'));
			$this->session->set_flashdata('gagal', $formnama);
			redirect('menu/aktor');
		}
	}

	public function dataakses()
	{
		$data['title'] = "Data Akses";
		$lokasi = 'menu/dataakses';
		$data['idaktor'] = $this->uri->segment(4);
		$data['akses'] = $this->menu->GetSatuDataAktor($data['idaktor']);
		$data['titlemenu'] = $this->menu->GetAllTitleMenu();

		templates($lokasi, $data);
	}

	public function ubahakses()
	{
		$idaktor = $this->input->post('idaktor');
		$idtitle = $this->input->post('idtitle');

		$data = [
			"aktor_id" => $idaktor,
			"title_menu_id" => $idtitle
		];

		$result = $this->db->get_where('tbl_akses_menu', $data)->num_rows();

		if ($result < 1) {
			$this->db->insert('tbl_akses_menu', $data);
		} else {
			$this->db->delete('tbl_akses_menu', $data);
		}

		$this->session->set_flashdata('pesan', 'Akses Berhasil Diubah!');
	}
}

/* End of file ControllerAksesMenu.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerSubMenu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMenu', 'menu');
		$akses = "Sub Menu";
		aksessistem($akses);
	}

	public function index()
	{
		$this->form_validation->set_rules('submenu', 'Sub Menu', 'trim|required', [
			"required" => "Sub Menu Harus Di isi"
		]);
		$this->form_validation->set_rules('url', 'URL', 'trim|required', [
			"required" => "URL Harus Di isi"
		]);
		$this->form_validation->set_rules('icon', 'Icon', 'trim|required', [
			"required" => "Icon Harus Di isi"
		]);


		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Sub Menu";
			$lokasi = 'menu/submenu';
			$data['submenu'] = $this->menu->GetAllSubMenu();
			$data['titlemenu'] = $this->menu->GetAllTitleMenu();

			templates($lokasi, $data);
		} else {
			$this->tambah();
		}
	}

	public function tambah()
	{
		$data = [
			"title_menu_id" => $this->input->post('title'),
			"nama_sub_menu" => $this->input->post('submenu'),
			"url_sub_menu" => $this->input->post('url'),
			"icon_sub_menu" => $this->input->post('icon'),
			"status_sub_menu" => $this->input->post('status')
		];
		$this->menu->TambahDataSubMenu($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('menu/submenu');
	}

	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->menu->HapusDataSubMenu($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('menu/submenu');
	}

	public function ubah()
	{
		$this->form_validation->set_rules('submenu', 'Sub Menu', 'trim|required', [
			"required" => "Sub Menu Harus Di isi"
		]);
		$this->form_validation->set_rules('url', 'URL', 'trim|required', [
			"required" => "URL Harus Di isi"
		]);
		$this->form_validation->set_rules('icon', 'Icon', 'trim|required', [
			"required" => "Icon Harus Di isi"
		]);

		$id = $this->uri->segment(4);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Sub Menu";
			$lokasi = 'menu/ubahsubmenu';
			$data['submenu'] = $this->menu->GetSatuDataSubMenu($id);
			$data['titlemenu'] = $this->menu->GetAllTitleMenu();

			templates($lokasi, $data);
		} else {
			$data = [
				"title_menu_id" => $this->input->post('title'),
				"nama_sub_menu" => $this->input->post('submenu'),
				"url_sub_menu" => $this->input->post('url'),
				"icon_sub_menu" => $this->input->post('icon'),
				"status_sub_menu" => $this->input->post('status')
			];
			$this->menu->UbahSubMenu($id, $data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
			redirect('menu/submenu');
		}
	}
}

/* End of file ControllerSubMenu.php */

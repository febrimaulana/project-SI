<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $akses = 'Admin';
        $this->load->model('ModelMenu', 'menu');
        $this->load->model('ModelAdmin', 'admin');
        $this->load->model('ModelAuth', 'auth');
        aksessistem($akses);
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            "required" => "Username admin tidak boleh kosong"
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            "required" => "Nama admin tidak boleh kosong"
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            "required" => "Email admin tidak boleh kosong",
            "valid_email" => "Email tidak valid"
        ]);
        $this->form_validation->set_rules('notelp', 'No Telpon', 'trim|required|numeric', [
            "required" => "No telpon admin tidak boleh kosong",
            "numeric" => "Input harus number"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Admin';
            $data['admin'] = $this->admin->GetDataAllAdmin();
            $lokasi = 'admin/index';

            templates($lokasi, $data);
        } else {
            $this->tambah();
        }
    }

    public function tambah()
    {
        $validasi = $this->admin->GetSatuDataAdmin($this->input->post('username'));
        if (empty($validasi)) {
            $data1 = [
                "username_admin" => $this->input->post('username'),
                "nama_admin" => $this->input->post('nama'),
                "email_admin" => data_hash($this->input->post('email')),
                "no_telp_admin" => $this->input->post('notelp')
            ];

            $data2 = [
                "username" => $this->input->post('username'),
                "aktor_id" => 1,
            ];

            $this->admin->TambahDataAdmin($data1);
            $this->auth->TambahAksesLogin($data2);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
            redirect('admin');
        } else {
            $this->session->set_flashdata('gagal', 'Username sudah terpakai');
            redirect('admin');
        }
    }

    public function hapus()
    {
        $username = $this->uri->segment(3);
        $this->admin->HapusDataAdmin($username);
        $this->auth->HapusAksesSistem($username);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
        redirect('admin');
    }

    public function ubah()
    {
        $username = $this->input->post('username');
        $data = [
            "nama_admin" => $this->input->post('nama'),
            "email_admin" => data_hash($this->input->post('email')),
            "no_telp_admin" => $this->input->post('notelp')
        ];
        $this->admin->UbahDataAdmin($username, $data);
        $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
        redirect('admin');
    }
}

/* End of file ControllerAdmin.php */

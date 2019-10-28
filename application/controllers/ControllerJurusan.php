<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerJurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMenu', 'menu');
        $this->load->model('ModelJurusan', 'jurusan');
        $akses = "Jurusan";
        aksessistem($akses);
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            "required" => "Nama jurusan harus diisi"
        ]);


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Jurusan";
            $data['jurusan'] = $this->jurusan->GetDataAllJurusan();
            $lokasi = "jurusan/index";

            templates($lokasi, $data);
        } else {
            $this->tambah();
        }
    }

    public function tambah()
    {
        $data = [
            "nama_jurusan" => $this->input->post('nama')
        ];
        $this->jurusan->TambahDataJurusan($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('jurusan');
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            "required" => "Nama Aktor Harus Diisi"
        ]);

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = [
                "nama_jurusan" => $this->input->post('nama')
            ];
            $this->jurusan->UbahDataJurusan($id, $data);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
            redirect('jurusan');
        } else {
            $formnama =  strip_tags(form_error('nama'));
            $this->session->set_flashdata('gagal', $formnama);
            redirect('jurusan');
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->jurusan->HapusDataJurusan($id);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
        redirect('jurusan');
    }
}

/* End of file Controllername.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelJurusan extends CI_Model
{

    public function GetDataAllJurusan()
    {
        return $this->db->get('tbl_jurusan')->result_array();
    }

    public function TambahDataJurusan($data)
    {
        $this->db->insert('tbl_jurusan', $data);
    }

    public function HapusDataJurusan($id)
    {
        $this->db->where('id_jurusan', $id);
        $this->db->delete('tbl_jurusan');
    }

    public function UbahDataJurusan($id, $data)
    {
        $this->db->where('id_jurusan', $id);
        $this->db->update('tbl_jurusan', $data);
    }
}

/* End of file ModelJurusan.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAdmin extends CI_Model
{

    public function GetDataAllAdmin()
    {
        return $this->db->get('tbl_admin')->result_array();
    }

    public function GetSatuDataAdmin($username)
    {
        return $this->db->get_where('tbl_admin', ['username_admin' => $username])->row_array();
    }

    public function TambahDataAdmin($data)
    {
        $this->db->insert('tbl_admin', $data);
    }

    public function HapusDataAdmin($username)
    {
        $this->db->where('username_admin', $username);
        $this->db->delete('tbl_admin');
    }

    public function UbahDataAdmin($username, $data)
    {
        $this->db->where('username_admin', $username);
        $this->db->update('tbl_admin', $data);
    }
}

/* End of file ModelAdmin.php */

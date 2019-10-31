<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDosen extends CI_Model
{
	// tbl_dosen
	public function GetAllDosenPembimbing()
	{
		$this->db->select('tbl_dosen.*, tbl_akses_login.aktor_id');
		$this->db->from('tbl_dosen');
		$this->db->join('tbl_akses_login', 'tbl_akses_login.username = tbl_dosen.id_dosen');
		$this->db->where('aktor_id', 3);
		return $this->db->get('')->result_array();
	}

	public function GetAllDosenJurusan()
	{
		$this->db->select('tbl_dosen.*, tbl_akses_login.aktor_id');
		$this->db->from('tbl_dosen');
		$this->db->join('tbl_akses_login', 'tbl_akses_login.username = tbl_dosen.id_dosen');
		$this->db->where('aktor_id', 2);
		return $this->db->get('')->result_array();
	}

	public function CekData($id)
	{
		return $this->db->get_where('tbl_dosen', ['id_dosen' => $id])->row_array();
	}

	public function TambahDosen($data)
	{
		$this->db->insert('tbl_dosen', $data);
	}

	public function HapusDosen($id)
	{
		$this->db->where('id_dosen', $id);
		$this->db->delete('tbl_dosen');
	}

	public function UbahDosen($id, $data)
	{
		$this->db->where('id_dosen', $id);
		$this->db->update('tbl_dosen', $data);
	}
	// end tbl_title_menu
}

/* End of file ModelMenu.php */

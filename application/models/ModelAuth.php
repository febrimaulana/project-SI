<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAuth extends CI_Model
{

	public function UbahOtp($username, $data)
	{
		$this->db->where('username', $username);
		$this->db->update('tbl_akses_login', $data);
	}

	public function GetDataDosen($username)
	{
		$this->db->select('tbl_akses_login.*, tbl_dosen.email_dosen');
		$this->db->from('tbl_akses_login');
		$this->db->join('tbl_dosen', 'tbl_dosen.id_dosen = tbl_akses_login.username');
		$this->db->where('tbl_akses_login.username', $username);
		return $this->db->get()->row_array();
	}

	public function GetDataMahasiswa($username)
	{
		$this->db->select('tbl_akses_login.*, tbl_mahasiswa.email_mahasiswa');
		$this->db->from('tbl_akses_login');
		$this->db->join('tbl_mahasiswa', 'tbl_mahasiswa.id_mahasiswa = tbl_akses_login.username');
		$this->db->where('tbl_akses_login.username', $username);
		return $this->db->get()->row_array();
	}

	public function GetDataAdmin($username)
	{
		$this->db->select('tbl_akses_login.*, tbl_admin.email_admin');
		$this->db->from('tbl_akses_login');
		$this->db->join('tbl_admin', 'tbl_admin.username_admin = tbl_akses_login.username');
		$this->db->where('tbl_akses_login.username', $username);
		return $this->db->get()->row_array();
	}

	public function GetSatuDataLogin($username)
	{
		return $this->db->get_where('tbl_akses_login', ['username' => $username])->row_array();
	}

	public function TambahAksesLogin($data)
	{
		$this->db->insert('tbl_akses_login', $data);
	}

	public function HapusAksesSistem($username)
	{
		$this->db->where('username', $username);
		$this->db->delete('tbl_akses_login');
	}
}

/* End of file ModelAuth.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMenu extends CI_Model
{

	public function GetTitleMenu($aktor)
	{
		$this->db->select('id_title_menu, nama_title_menu');
		$this->db->from('tbl_title_menu');
		$this->db->join('tbl_akses_menu', 'tbl_akses_menu.title_menu_id = tbl_title_menu.id_title_menu');
		$this->db->where('tbl_akses_menu.aktor_id', $aktor);
		return $this->db->get('')->result_array();
	}

	public function GetSubMenu($menu)
	{
		$this->db->select('*');
		$this->db->from('tbl_sub_menu');
		$this->db->join('tbl_title_menu', 'tbl_title_menu.id_title_menu = tbl_sub_menu.title_menu_id');
		$this->db->where('tbl_sub_menu.title_menu_id', $menu);
		$this->db->where('tbl_sub_menu.status_sub_menu', '1');
		return $this->db->get('')->result_array();
	}

	public function GetAllTitleMenu()
	{
		return $this->db->get('tbl_title_menu')->result_array();
	}

	public function TambahTitleMenu($data)
	{
		$this->db->insert('tbl_title_menu', $data);
	}

	public function HapusTitleMenu($id)
	{
		$this->db->where('id_title_menu', $id);
		$this->db->delete('tbl_title_menu');
	}

	public function UbahTitleMenu($id, $data)
	{
		$this->db->where('id_title_menu', $id);
		$this->db->update('tbl_title_menu', $data);
	}
}

/* End of file ModelMenu.php */

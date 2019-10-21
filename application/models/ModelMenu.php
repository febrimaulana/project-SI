<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMenu extends CI_Model
{
	// sidebar model
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
	// end sidebar model

	// tbl_title_menu
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
	// end tbl_title_menu

	// tbl_sub_menu
	public function GetAllSubMenu()
	{
		$this->db->select('tbl_sub_menu.*, tbl_title_menu.nama_title_menu');
		$this->db->from('tbl_sub_menu');
		$this->db->join('tbl_title_menu', 'tbl_title_menu.id_title_menu = tbl_sub_menu.title_menu_id');
		return $this->db->get()->result_array();
	}

	public function GetSatuDataSubMenu($id)
	{
		return $this->db->get_where('tbl_sub_menu', ['id_sub_menu' => $id])->row_array();
	}

	public function TambahDataSubMenu($data)
	{
		$this->db->insert('tbl_sub_menu', $data);
	}

	public function HapusDataSubMenu($id)
	{
		$this->db->where('id_sub_menu', $id);
		$this->db->delete('tbl_sub_menu');
	}

	public function UbahSubMenu($id, $data)
	{
		$this->db->where('id_sub_menu', $id);
		$this->db->update('tbl_sub_menu', $data);
	}
	// end tbl_sub_menu

	// akses menu
	public function GetAllAktor()
	{
		return $this->db->get('tbl_aktor')->result_array();
	}

	public function GetSatuDataAktor($id)
	{
		return $this->db->get_where('tbl_aktor', ['id_aktor' => $id])->row_array();
	}

	public function TambahAktor($data)
	{
		$this->db->insert('tbl_aktor', $data);
	}

	public function HapusAktor($id)
	{
		$this->db->where('id_aktor', $id);
		$this->db->delete('tbl_aktor');
	}

	public function UbahAktor($id, $data)
	{
		$this->db->where('id_aktor', $id);
		$this->db->update('tbl_aktor', $data);
	}
}

/* End of file ModelMenu.php */

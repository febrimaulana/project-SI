<?php
function templates($lokasi, $data)
{
	$ci = get_instance();
	$ci->load->view("templates/header", $data);
	$ci->load->view("templates/sidebar", $data);
	$ci->load->view("$lokasi", $data);
	$ci->load->view("templates/footer", $data);
}

function check_access($aktor, $title)
{
	$ci = get_instance();

	$ci->db->where('aktor_id', $aktor);
	$ci->db->where('title_menu_id', $title);
	$reslut = $ci->db->get('tbl_akses_menu');

	if ($reslut->num_rows() > 0) {
		return "checked = 'checked'";
	}
}

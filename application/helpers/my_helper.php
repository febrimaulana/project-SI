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

function send_email_otp($otp, $sendmail)
{
	// Konfigurasi email
	$ci = get_instance();
	$config['protocol'] = "smtp";
	$config['smtp_host'] = "ssl://smtp.gmail.com";
	$config['smtp_port'] = "465";
	$config['smtp_user'] = "febrimaulana0224@gmail.com";
	$config['smtp_pass'] = "febriaja11";
	$config['charset'] = "utf-8";
	$config['mailtype'] = "html";
	$config['newline'] = "\r\n";
	$ci->email->initialize($config);
	$ci->email->from('no-replay@gmail.com', 'E-Report TA/KP');
	$ci->email->to($sendmail);
	$ci->email->subject('E-Report TA/KP OTP');
	$ci->email->message("Kode OTP Anda Adalah: $otp");
	$ci->email->send();
}

function aksessistem()
{
	$ci = get_instance();
	if (!$ci->session->userdata('username') && !$ci->session->userdata('id_aktor')) {
		$ci->session->set_flashdata('pesan', 'Silahkan Login Terlebih Dahulu');
		redirect('');
	}
	// } else {
	// 	$roleId = $ci->session->userdata('role_id');
	// 	$url = $ci->uri->segment(1);

	// 	$menu = $ci->db->get_where('admin_sub_menu', ['url' => $url])->row_array();
	// 	$menuId = $menu['menu_id'];

	// 	$menuakses = $ci->db->get_where('admin_akses_menu', [
	// 		"role_id" => $roleId,
	// 		"menu_id" => $menuId
	// 	]);

	// 	if ($menuakses->num_rows() < 1) {
	// 		redirect('auth/blocked');
	// 	}
	// }
}

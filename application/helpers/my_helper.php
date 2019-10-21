<?php
function templates($lokasi, $data)
{
	$ci = get_instance();
	$ci->load->view("templates/header", $data);
	$ci->load->view("templates/sidebar", $data);
	$ci->load->view("$lokasi", $data);
	$ci->load->view("templates/footer", $data);
}

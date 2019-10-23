<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAuth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelAuth', 'auth');
	}


	public function index()
	{
		$data['title'] = "Login E-Report TA/KP";
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function otp()
	{
		if ($this->session->userdata('aksesotp') == 1) {
			$data['title'] = "Login E-Report TA/KP";
			$data['username'] = $this->uri->segment(3);

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/otp', $data);
			$this->load->view('templates/auth_footer', $data);
		} else {
			$this->session->set_flashdata('gagal', 'Silahkan Masukan Username Anda!');
			redirect('');
		}
	}

	public function verifikasiotp()
	{
		$otp = $this->input->post('otp');
		$username = $this->uri->segment(4);
		$data = $this->auth->GetSatuDataLogin($username);

		$datasession = [
			"username" => $data['username'],
			"id_aktor" => $data['aktor_id']
		];

		$dataubah = [
			"otp_akses_login" => $otp
		];

		if (password_verify($otp, $data['otp_akses_login'])) {
			$this->session->set_userdata($datasession);
			$this->session->unset_userdata('aksesotp');
			$this->auth->UbahOtp($username, $dataubah);
			$this->session->set_flashdata('pesan', 'Anda Berhasil Login');
			redirect("dashboard");
		} else {
			$this->session->set_flashdata('gagal', 'Kode OTP Anda Salah!');
			redirect("auth/otp/$username");
		}
	}

	public function login()
	{
		if ($this->uri->segment(3)) {
			$username = $this->uri->segment(3);
		} else {
			$username = $this->input->get('username');
		}
		$dosen = $this->auth->GetDataDosen($username);
		$mahasiswa = $this->auth->GetDataMahasiswa($username);

		if (!empty($dosen)) {
			$username = $username;
			$otp = random_string('alnum', 6);
			$data = [
				"otp_akses_login" => password_hash($otp, PASSWORD_DEFAULT)
			];
			$this->auth->UbahOtp($username, $data);
			send_email_otp($otp, $dosen['email_dosen']);
			$this->session->set_flashdata('pesan', 'OTP Berhasil Dikirim Cek Email Anda');
			$this->session->set_userdata(['aksesotp' => TRUE]);
			redirect("auth/otp/$username");
		} else if (!empty($mahasiswa)) {
			$username = $username;
			$otp = random_string('alnum', 6);
			$data = [
				"otp_akses_login" => password_hash($otp, PASSWORD_DEFAULT)
			];
			$this->auth->UbahOtp($username, $data);
			send_email_otp($otp, $mahasiswa['email_mahasiswa']);
			$this->session->set_userdata(['aksesotp' => TRUE]);
			$this->session->set_flashdata('pesan', 'OTP Berhasil Dikirim Cek Email Anda');
			redirect("auth/otp/$username");
		} else {
			$this->session->set_flashdata('gagal', 'Username Anda Tiak Terdaftar!');
			redirect('auth');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('');
	}
}

/* End of file ControllerDashboard.php */

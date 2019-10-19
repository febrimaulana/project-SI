<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTitleMenu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMenu', 'menu');
    }


    public function index()
    {
        $data['title'] = "Title & Akses Menu";
        $data['menu'] = $this->menu->GetAllTitleMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/title', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file ControllerTitleMenu.php */

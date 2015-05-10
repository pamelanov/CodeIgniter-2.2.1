<?php

class Dashboard extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Riwayat Status";
        $data['main'] = 'ops/home';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
}
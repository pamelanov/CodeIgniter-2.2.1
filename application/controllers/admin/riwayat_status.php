<?php

class Dashboard extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Riwayat Status";
        $data['main'] = 'admin/home';
        $this->load->vars($data);
        $this->load->view('admin/dashboard');
    }
}
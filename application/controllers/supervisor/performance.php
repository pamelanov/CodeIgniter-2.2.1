<?php

class Performance extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
         if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create";
        $data['main'] = 'supervisor/performance';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
}
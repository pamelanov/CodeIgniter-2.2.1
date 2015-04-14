<?php

class Summary extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Summary List";
        $data['main'] = 'admin/searchStudent';
        $this->load->vars($data);
        $this->load->view('admin/dashboard');
    }
    
    function searchStudent() {
        $u = new Student();
        $u->Id_murid = $this->input->post('idMurid');
        
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'admin/hasil_search';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('admin/dashboard');
            
        
            
            
        }
        
        else {
            $data['judul'] = "Summary list";
            $data['main'] = "admin/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('admin/dashboard', $data);
        }
    }
}

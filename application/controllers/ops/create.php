<?php

class Create extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Summary List";
        $data['main'] = 'ops/searchStudent';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    
    function searchStudentStatus() {
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        
    
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'create';
            $data['student'] = $u->hasilSearch();
            //$data['riwayat'] = $n->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = "ops/hasil_search";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }

}
    
    
?>
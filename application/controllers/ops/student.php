<?php

class Student extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Create";
        $data['main'] = 'ops/update_status';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function searchSummary() {
        $data['judul'] = "Search student";
        $data['main'] = 'ops/student_summary';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

        
      function createstatus() {
        $n = new Beginning_number();
        
        $n->Id_murid = $this->input->post('idMurid');
        $n->Jam = $this->input->post('jam');
        $n->Tanggal = $this->input->post('tanggal');
        $n->Id_sales = $this->input->post('idSales');
        $n->No = $this->input->post('status');
        
        /*
        $data['judul'] = "Keluarin isian";
            $data['main'] = "create";
            $data['students'] = $n;

            $this->load->view('dashboard', $data);
    
        if ($n->updateStatus() {
            echo $n->No;
            
        }
        
        
        else {
            $data['judul'] = "Summary list";
            $data['main'] = "ops/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        */
    }


    
    function riwayatStatus(){
        $s = new Beginning_number();
        $s->Id_murid = $this->input->post('idMurid');
        
            $data['judul'] = "Tes haha";
            $data['main'] = 'ops/riwayat_status';
            $data['status'] = $s->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
        
    }
}

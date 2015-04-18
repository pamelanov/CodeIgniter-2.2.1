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

        
      function createStatus() {
        $n = new Beginning_number();
        /*
        $n->id_murid = $this->input->post('id_murid');
        $n->jam = $this->input->post('jam');
        $n->tanggal = $this->input->post('tanggal');
        $n->id_sales = $this->input->post('id_sales');
        $n->no = $this->input->post('status');
        */
        if ($n->updateStatus()){
            
            echo "berhasil";
            }
        
        
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

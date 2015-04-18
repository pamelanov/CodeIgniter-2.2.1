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
    function searchStudent() {
        $u = new Student();
        $u->Id_murid = $this->input->post('idMurid');
        
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'ops/hasil_search';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
    }
        
      function createStatus() {
        $n = new Beginning_number();
        
        $n->Id_murid = $this->input->post('idMurid');
        $n->Jam = $this->input->post('jam');
        $n->Tanggal = $this->input->post('tanggal');
        $n->Id_sales = $this->input->post('idSales');
        $n->No = $this->input->post('status');
        var_dump($this->input->post('idMurid'));
	exit;
        if ($n->updateStatus($n)) {
            echo $n->No;
            
        }
        
        
        else {
            $data['judul'] = "Summary list";
            $data['main'] = "ops/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }


    
    function riwayatStatus(){
        $u = new Student();
        $s = new Beginning_number();
        $u->Id_murid = $this->input->post('idMurid');
        
            $data['judul'] = "Riwayat Status";
            $data['main'] = 'ops/riwayat_status';
            $data['status'] = $s->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
        
    }
}

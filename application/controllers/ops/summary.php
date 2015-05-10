<?php

class Summary extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Summary List";
        $data['main'] = 'ops/searchStudent';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    function searchStudent() {
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        

          
        if ($u->findStudent()) {
            
            $b = new Beginning_number();
            $b->id_murid = $u->id_murid;
            $e = new End_number();
            $e->id_murid = $u->id_murid;

            $data['judul'] = "Student Summary";
            $data['main'] = 'summary';
            $data['students'] = $b->summary();
            $data['students2'] = $e->summary();
           // $data['invoices'] = $
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = "ops/gagal_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
    
    
    
    function searchStatusStudent() {
      $u = new Student();
        $u->Id_murid = $this->input->post('idMurid');
        
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'ops/status_hasil_search';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('dashboard');
        
        }
        
        else {
            $data['judul'] = "Summary list";
            $data['main'] = "ops/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
    function riwayatStatus(){
        $u = new Beginning_number();
        $u->Id_murid = $this->input->post('idMurid');
        
            
            $data['judul'] = "Riwayat Status";
            $data['main'] = 'ops/riwayat_status';
            $data['status'] = $u->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
    }
    
    function searchFeedback() {
    	$u = new Feedback();
    	$u->id_murid = $this->input->post('idMurid');
    	$u->id_guru = $this->input->post('idGuru');
    
    	// $n = new Beginning_number();
    	// $n->Id_murid = $this->input->post('idMurid');
    
    	if ($u->findFeedback()) {
    
    		$data['judul'] = "Isi Feedback";
    		$data['main'] = 'ops/hasil_search_feedback';
    		$data['feedback'] = $u->hasilSearch();
    		//$data['riwayat'] = $n->ambilStatus();
    		$this->load->vars($data);
    		$this->load->view('dashboard');
    	}
    	else {
    		$data['judul'] = "Isi Feedback";
    		$data['main'] = "ops/hasil_search_feedback";
    		$data['aktif'] = 'class="active"';
    
    		$this->load->view('dashboard', $data);
    	}
    
    }
}

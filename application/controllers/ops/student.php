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
        
        $n->id_murid = $this->input->post('id_murid');
        $n->jam = $this->input->post('jam');
        $n->tanggal = $this->input->post('tanggal');
        $n->id_sales = $this->input->post('id_sales');
        $n->status = $this->input->post('status');
        
        $a = new Beginning_number;
        $a = $n->updateStatus();
        echo $a->id_murid;
        echo $a->id_sales;
       
        
        
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

    function createFeedback() {
    	$n = new Feedback();
    
    	$n->id_murid = $this->input->post('id_murid');
    	$n->id_guru = $this->input->post('id_guru');
    	$n->tanggal = $this->input->post('tanggal');
    	$n->rating = $this->input->post('rating');
    	$n->isi = $this->input->post('isi');
    
    	$a = new Feedback;
    	$a = $n->addFeedbacks();
    	echo $a->id_murid;
    	echo $a->id_guru;
    }
    
    function readFeedback(){
    	$data['judul'] = "Feedback";
    	$data['main'] = 'createFeedback';
    	$data['feedback'] = $this->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
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

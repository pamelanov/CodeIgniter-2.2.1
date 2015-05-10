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
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Search student";
        $data['main'] = 'ops/student_summary';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    
      function createData() {
           if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Status";
        $data['main'] = 'create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
        
      function createStatus() {
           if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
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
    
    }
    
    

    function createFeedback() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
    	$n = new Feedback();
    
    	$n->id_murid = $this->input->post('id_murid');
    	$n->id_guru = $this->input->post('id_guru');
    	$n->tanggal = $this->input->post('tanggal');
    	$n->rating = $this->input->post('rating');
    	$n->isi = $this->input->post('isi');
    	$n->id_sales = $this->input->post('id_sales');
    
    	$a = new Feedback;
    	$a = $n->addFeedbacks();
		
    	$data['judul'] = "Feedback";
    	$data['main'] = 'createFeedback1';
    	echo '<br><br>Feedback berhasil disimpan!';
    	//$data['feedback'] = $this->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function readFeedback(){
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
    	$data['judul'] = "Feedback";
    	$data['main'] = 'createFeedback';
    	$data['feedback'] = $this->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function riwayatStatus(){
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $s = new Beginning_number();
        $s->Id_murid = $this->input->post('idMurid');
        
            $data['judul'] = "Tes haha";
            $data['main'] = 'ops/riwayat_status';
            $data['status'] = $s->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
        
    }
}

<?php

class Performance extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
         if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        
        $a = new Account();
        
        $data['judul'] = "Create Performance Target";
        $data['main'] = 'supervisor/performance';
        $data['ops'] = $a->getAllOps();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function create(){
              if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $n = new Target();
        
        $n->id_sales = $this->input->post('id_sales');
        $n->periode = $this->input->post('periode');
        $n->id_supervisor = $this->input->post('id_supervisor');
        $n->target = $this->input->post('target');

        if ($n->valid()){
        $data['judul'] = "Target Berhasil Disimpan";
	$data['main'] = 'supervisor/created';
        $data['targets'] = $n->createTarget();
	$this->load->vars($data);
	$this->load->view('dashboard');  
        }
        else {
        $data['judul'] = "Target Gagal Disimpan";
        $data['main'] = 'supervisor/failed';
        $this->load->vars($data);
        $this->load->view('dashboard'); 
        }
    }
    
    function showEdit() {
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $a = new Account();
        
        $data['judul'] = "Edit Sales Target";
	$data['main'] = 'supervisor/edit_performance';
        $data['ops'] = $a->getAllOps();
        $this->load->vars($data);
	$this->load->view('dashboard');
    }
    
    function findTarget(){
if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $a = new Target();
        $a->id_sales = $this->input->post('id_sales');
        $a->periode = $this->input->post('periode');
    
        if ($a->findTarget()) {

		
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'supervisor/hasil_search_target';
            $data['target'] = $a->hasilSearch();
            // $data['id_sales'] = $o->
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Edit Sales Target";
            $data['main'] = "supervisor/error_hasil_search";
            $data['aktif'] = 'class="active"';
            $this->load->vars($data);
            $this->load->view('dashboard', $data);
        }
    }
    
    function edit(){
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $n = new Target();
        
        $n->id_sales = $this->input->post('id_sales');
        $n->periode = $this->input->post('periode');
        $n->id_supervisor = $this->input->post('id_supervisor');
        $n->target = $this->input->post('target');
        
        $data['judul'] = "Update Berhasil";
	$data['main'] = 'supervisor/updated';
        $data['targets'] = $n->updateTarget();
	$this->load->vars($data);
	$this->load->view('dashboard');  
    }
    
    function overall(){
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();
        
	$data['judul'] = "Overall Performance";
	$data['main'] = 'supervisor/overall_performance';
        $data['targets'] = $t->rank();
	$this->load->vars($data);
	$this->load->view('dashboard');  
    }
}
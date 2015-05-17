<?php

class Performance extends Ci_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

  function index(){
        
	$data['judul'] = "Performance";
	$data['main'] = 'supervisor/performance';
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  
  function overall(){
      if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	$data['judul'] = "Overall Performance";
	$data['main'] = 'supervisor/overall_performance';
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
    
  }
  
  function lihatRincian(){
    if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	$data['judul'] = "Rincian Performa";
	$data['main'] = 'ops/rincian_performa';
	$this->load->vars($data);
	$this->load->view('dashboard');  
  }
}
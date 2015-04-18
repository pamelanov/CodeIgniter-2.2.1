<?php

class Performance extends Ci_Controller {
  function __construct(){
	parent::__construct();
    }
  }
  
  function index(){
        
	$data['judul'] = "Performance";
	$data['main'] = 'supervisor/performance';
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  
?>
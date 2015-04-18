<?php

class Performance extends Ci_Controller {
  function __construct(){
	parent::__construct();
    }
  }
  
  function index(){
        $t = new Target();
        
	$data['judul'] = "Performance";
	$data['main'] = 'ops/performance_ops';
        $data['target'] = $t->rank();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  
?>
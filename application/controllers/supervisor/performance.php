<?php

class Performance extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Create";
        $data['main'] = 'supervisor/performance';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function create(){
              
        $n = new Target();
        
        $n->id_sales = $this->input->post('id_sales');
        $n->periode = $this->input->post('periode');
        $n->id_supervisor = $this->input->post('id_supervisor');
        $n->target = $this->input->post('target');
        
        $a = new Target;
        $a = $n->createTarget();
        echo $a->id_sales;
        echo "<br/>";
        echo $a->target;
    
    
    }
    
    function overall(){
        $t = new Target();
        
	$data['judul'] = "Performance";
	$data['main'] = 'supervisor/overall_performance';
        $data['targets'] = $t->rank();
	$this->load->vars($data);
	$this->load->view('dashboard');  
    }
}
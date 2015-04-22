<?php

<<<<<<< HEAD
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

=======
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
  
  function overall(){
	$data['judul'] = "Overall Performance";
	$data['main'] = 'supervisor/overall_performance';
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
    
  }
  
?>
>>>>>>> punya-pamela

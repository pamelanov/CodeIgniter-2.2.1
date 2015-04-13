<?php

class Refund extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
   // session_start();
    
	if ($_SESSION['userid'] < 1){
    	redirect('template/login','refresh');
    }
  }
  
  function index(){
	$data['judul'] = "Refund Summary";
	$data['main'] = 'admin/refund_home';
	$data['refund'] = $this->mrefund->getAllRefunds();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
  function create(){
  	$this->load->library('encrypt');
   	if ($this->input->post('id')){
  		$this->mrefund->addRefund();
  		$this->session->set_flashdata('message','Refund created');
  		redirect('admin/refund/index','refresh');
  	}else{
		$data['judul'] = "Create Refund";
		$data['main'] = 'admin/refund_create';
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} 
  }
  
  function edit($id=0){
  	$this->load->library('encrypt');
  	if ($this->input->post('jam_hilang')){
  		$this->mrefund->updateRefund();
  		$this->session->set_flashdata('message','User updated');
  		redirect('admin/refund/index','refresh');
  	}else{
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit Refund";
		$data['main'] = 'admin/refund_edit';
		$data['refund'] = $this->mrefund->getRefund($id);
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
  }
  
  function delete($id){
	$this->mrefund->deleteRefund($id);
	$this->session->set_flashdata('message','User deleted');
	redirect('admin/refund/index','refresh');
  }
  
}


?>
<?php

class User extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
   // session_start();
    
	if ($_SESSION['userid'] < 1){
    	redirect('template/login','refresh');
    }
  }
  
  function index(){
	$data['judul'] = "Overall Summary";
	$data['main'] = 'admin/overall_home';
	$data['overall'] = $this->moverall->getAllOverall();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
 
  
  function edit($id=0){
  	$this->load->library('encrypt');
  	if ($this->input->post('username')){
  		$this->madmins->updateUser();
  		$this->session->set_flashdata('message','User updated');
  		redirect('admin/admins/index','refresh');
  	}else{
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit User";
		$data['main'] = 'admin/overall_edit';
		$data['admin'] = $this->madmins->getUser($id);
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
  }
  
  function delete($id){
	$this->madmins->deleteUser($id);
	$this->session->set_flashdata('message','User deleted');
	redirect('admin/admins/index','refresh');
  }
  
}


?>
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
	$data['judul'] = "Manage Users";
	$data['main'] = 'admin/user_home';
	$data['admins'] = $this->madmins->getAllUsers();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
  function create(){
  	$this->load->library('encrypt');
   	if ($this->input->post('username')){
  		$this->madmins->addUser();
  		$this->session->set_flashdata('message','User created');
  		redirect('admin/admins/index','refresh');
  	}else{
		$data['judul'] = "Create User";
		$data['main'] = 'admin/user_create';
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} 
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
		$data['main'] = 'admin/user_edit';
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
  
  function filterTodaySum(){
	$a = new Account();
	$b = new Beginning_number();
	$e = new End_number();
	$s = new Student();
	$a->where('id', $this->input->post('id'))->get();
	
	
	$data['judul'] = "Dashboard Home";
	$data['main'] = 'admin/today_sum_filter';
	$data['statusAwal'] = $b->forTodaySumFilter();
	$data['statusAkhir'] = $e->forTodaySumFilter();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');    
  }
}


?>
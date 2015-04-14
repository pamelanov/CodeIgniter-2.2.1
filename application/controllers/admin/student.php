<?php

class Student extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
   // session_start();
    
                
  }
  
  function index(){
	$data['judul'] = "Student Summary";
	$data['main'] = 'admin/student_home';
	$data['student'] = $this->mstudent->getAllStudents();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
  function create(){
  	$this->load->library('encrypt');
   	if ($this->input->post('id_murid')){
  		$this->mstudent->addStudent();
  		$this->session->set_flashdata('message','Student created');
  		redirect('admin/student/index','refresh');
  	}else{
		$data['judul'] = "Create Student";
		$data['main'] = 'admin/student_create';
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} 
  }
  
  function edit($id=0){
  	$this->load->library('encrypt');
  	if ($this->input->post('Id_murid')){
  		$this->mstudent->updateStudent();
  		$this->session->set_flashdata('message','Student updated');
  		redirect('admin/student/index','refresh');
  	}else{
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit Student";
		$data['main'] = 'admin/student_edit';
		$data['student'] = $this->mstudent->getStudent($id);
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
  }
  
  function delete($id){
	$this->mstudent->deleteStudent($id);
	$this->session->set_flashdata('message','User deleted');
	redirect('admin/student/index','refresh');
  }
  
}


?>
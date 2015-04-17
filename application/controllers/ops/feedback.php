<?php

class Feedback extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
  //session_start();
    
	if ($_SESSION['userid'] < 1){
    	redirect('template/login','refresh');
    }
  }
  
  function index(){
	$data['judul'] = "Feedback Summary";
	$data['main'] = 'admin/feedback_home';
	$data['feedback'] = $this->mfeedback->getAllFeedbacks();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
  function addFeedbacksCtrl(){
  	$f = new Feedback();
  	$f->Id_murid = $this->input->post('idMurid');
  	$f->Id_guru = $this->input->post('idGuru');
  	$f->Tanggal = $this->input->post('tanggal');
  	$f->Rating = $this->input->post('rating');
  	$f->Isi = $this->input->post('isi');
  	
  	
   	/*if ($this->input->post('id')){
  		$this->mfeedback->addFeedback();
  		$this->session->set_flashdata('message','Feedback created');
  		redirect('admin/refund/index','refresh');
  	}else{
		$data['judul'] = "Create Feedback";
		$data['main'] = 'admin/feedback_create';
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} */
  }
  
  function edit($id=0){
  	$this->load->library('encrypt');
  	if ($this->input->post('id')){
  		$this->mfeedback->updateFeedback();
  		$this->session->set_flashdata('message','Feedback updated');
  		redirect('admin/feedback/index','refresh');
  	}else{
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit Feedback";
		$data['main'] = 'admin/feedback_edit';
		$data['feedback'] = $this->mfeedback->getFeedback($id);
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
  }
  
  function delete($id){
	$this->mfeedback->deleteFeedback($id);
	$this->session->set_flashdata('message','feedback deleted');
	redirect('admin/feedback/index','refresh');
  }
  
}


?>
<?php

class Feedback extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
  //session_start();
    
	
  }
  
  function index(){
	$data['judul'] = "Feedback Summary";
	$data['main'] = 'createFeedback';
	//$data['feedback'] = $this->mfeedback->getAllFeedbacks();
	$this->load->vars($data);
	$this->load->view('dashboard');  
  }
  
  function searchFeedback() {
  	$data['judul'] = "Search Feedback";
  	$data['main'] = 'ops/feedback_summary';
  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function addFeedbacksCtrl(){
  	$f = new Feedback();
  	$f->Id_murid = $this->input->post('idMurid');
  	$f->Id_guru = $this->input->post('idGuru');
  	$f->Tanggal = $this->input->post('tanggal');
  	$f->Rating = $this->input->post('rating');
  	$f->Isi = $this->input->post('isi');
  	
  	if ($f -> addFeedbacks()) {
  		$f->get_by_Id_murid($this->input->post('idMurid'));
  		$f->get_by_Id_guru($this->input->post('idGuru'));
  		$data['role'] = $u->Role;
  		$data['id'] = $u->Id;
  		$data['email'] = $u->Email;
  		$this->session->set_userdata($data);
  		redirect('dashboard', 'refresh');
  	} else {
  		$data['judul'] = "Add Feedback";
  		$data['main'] = "home/error_login";
  		$data['aktif'] = 'class="active"';
  	
  		$this->load->view('home/template', $data);
  	}
  	
  	
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
  
  function createFeedback() {
  	$n = new Feedback();
  
  	$n->id_murid = $this->input->post('id_murid');
  	$n->id_guru = $this->input->post('id_guru');
  	$n->tanggal = $this->input->post('tanggal');
  	$n->rating = $this->input->post('rating');
  	$n->isi = $this->input->post('isi');
  
  	$a = new Feedback;
  	$a = $n->addFeedbacks();
  	echo $a->id_murid;
  	echo $a->id_guru;
  }
  
  function readFeedback(){
  	$data['judul'] = "Feedback";
  	$data['main'] = 'createFeedback';
  	$data['feedback'] = $this->getAllFeedbacks();
  	$this->load->vars($data);
  	$this->load->view('dashboard');
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
<?php

class feedbackCtrl extends Ci_Controller {
  	function __construct(){
		parent::__construct();
  	//session_start();
    
	 	if($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
           redirect('template/login', 'refresh');
   		}
	}
  
  function formCreateFeedback() {
  	$data['judul'] = "Create Feedback";
  
  	$data['main'] = 'ops/formCreateFeedback';
  
  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function createFeedback() {
  	if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
  		redirect('dashboard', 'refresh');
  	}
  	$f = new Feedback();
  
  	$f->id = $this->input->post('id');
  	$f->id_murid = $this->input->post('id_murid');
  	$f->id_guru = $this->input->post('id_guru');
  	$f->tanggal = $this->input->post('tanggal');
  	$f->rating = $this->input->post('rating');
  	$f->isi = $this->input->post('isi');
  	$f->status = $this->input->post('status');
  	$f->total_skor = $f->hitungTotalSkor();
  	$f->id_sales = $this->input->post('id_sales');
  
  	$data['judul'] = "Feedback berhasi disimpan";
  	$data['main'] = 'ops/createFeedbackBerhasil';
  	$data['feedback'] = $f->createFeedbackModel();
  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function readFeedback($id) {
  	$u = new Feedback();
  	$u->where('id', $id);
  	$u->get();
  
  	if ($u->findFeedback()) {
  
  		$data['judul'] = "Isi Feedback";
  		$data['main'] = 'ops/readFeedback';
  		$data['feedback'] = $u->hasilSearch();
  		$this->load->vars($data);
  		$this->load->view('dashboard');
  	}
  	else {
  		$data['judul'] = "Isi Feedback";
  		$data['main'] = "ops/readFeedback";
  		$data['aktif'] = 'class="active"';
  		$this->load->view('dashboard', $data);
  	}  
  }
  
  function formUpdateFeedback($id) {
  	$u = new Feedback();
  	$u->where('id', $id);
  	$u->get();
  	
  	$data['judul'] = "Update Feedback";
  	$data['main'] = 'ops/formUpdateFeedback';
  	$data['feedback'] = $u;
  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function updateFeedback(){
  	$f = new Feedback();
  	
  	$f->where('id', $this->input->post('id'))->get();
  	$f->isi = $this->input->post('isi');
  	$f->rating = $this->input->post('rating');
  	$f->total_skor = $f->hitungTotalSkor();
  	
  	$f->save();
  	
  	$f1 = new Feedback();
  	$f1->where('id_murid', $f->id_murid);
  	$f1->where('id_guru', $f->id_guru);
  	$f1->get();
  	foreach($f1 as $list){
  		$list->total_skor = $f->total_skor;
  		$list->save();
  	}
  	
  	$data['judul'] = "Feedback berhasil disimpan";
  	$data['main'] = 'ops/updateFeedbackBerhasil';
  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function countFeedback(){
  	$f = new Feedback();
  	
  	$f->group_by(id_sales);
  	$data['feedback'] = $u->hasilSearch();
  	
  	$f->where('id_sales', $this->input->post('id_sales'))->get();
  	$f->count();
  }
}

?>
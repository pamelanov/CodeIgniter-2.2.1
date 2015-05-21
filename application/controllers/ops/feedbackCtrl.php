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
	$s = new Student();
	$s->get();
	$t = new Teacher();
	$t->get();
	
  	$data['judul'] = "Create Feedback";
  	$data['main'] = 'ops/formCreateFeedback';
	$data['students'] = $s;
	$data['teachers'] = $t;
  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function createFeedback() {
  	if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
  		redirect('dashboard', 'refresh');
  	}
  	$a = new Account();
	$a->where('id_acc', $this->input->post('id_sales'))->get();
	
	$f = new Feedback();
  	$f->id_murid = $this->input->post('id_murid');
  	$f->id_guru = $this->input->post('id_guru');
  	$f->tanggal = $this->input->post('tanggal');
  	$f->rating = $this->input->post('rating');
  	$f->isi = $this->input->post('isi');
  	$f->status = 1;
  	$f->total_skor = $f->hitungTotalSkor();
  	$f->id_sales = $a->id;
	$f->save_as_new();

  	$data['judul'] = "Feedback berhasil disimpan";
  	$data['main'] = 'ops/createFeedbackBerhasil';
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
  
      function feedbackSummary(){
	if ($this->session->userdata('role') == 3) {
		$r = new Account();
		$data['judul'] = "Feedback Summary";
		$data['main'] = 'supervisor/search_feedback_sum';
		$data['ops'] = $r->get();
		$this->load->vars($data);
		$this->load->view('dashboard');
	}
	
	else if ($this->session->userdata('role') == 2) {
		$data['judul'] = "Rangkuman Feedback";
		$data['main'] = 'ops/feedback_summary';
		$data['feedbacks'] = $r->getAllFeedbacks();
		$this->load->vars($data);
		$this->load->view('dashboard');
	}
	
	else {
		redirect('template/login', 'refresh');
	}
	/*
    	$r = new Feedback();
    	$f = new Feedback();
    	$jumlahFeedback = 0;
    	 
    	$f->group_by('id_sales');
    	$f->get();
    	$data['feedback1'] = $f;
    	
    	$data['judul'] = "Feedback Summary";
    	$data['main'] = 'feedbackSummary';
    	$data['feedback'] = $r->getAllFeedbacks();
    	*.
    	$this->load->vars($data);
    	$this->load->view('dashboard');
	*/

    }
    
    function searchPeriode(){
	$f = new Feedback();
	$e = new Feedback();
        $f->tanggal_awal = $this->input->post('tanggal-awal');
        $f->tanggal_akhir = $this->input->post('tanggal-akhir');
	$f->id_sales = $this->input->post('id_ops');
	
	$data['judul'] = "Rangkuman Feedback";
	$data['main'] = 'supervisor/feedback_sum';
	$data['tanggal_awal'] = $f->tanggal_awal;
	$data['tanggal_akhir'] = $f->tanggal_akhir;
	
	if($f->id_sales == 'semua') {
		$data['feedbacks'] = $f->hasilSearch1();
		$data['semua_ops'] = $e->getCounts();
	}
	
	else {
		if ($f->findFeedbackSum() ){
			$data['feedbacks'] = $f->ambilFeedbackSum();
		}
	}
	$this->load->vars($data);
    	$this->load->view('dashboard');
        
    }
}

?>
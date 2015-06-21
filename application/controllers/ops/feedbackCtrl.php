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
	$c = new Course();
	$c->get();
	
  	$data['judul'] = "Create Feedback";
  	$data['main'] = 'ops/formCreateFeedback';
	$data['courses'] = $c;
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
  	$f->id_kelas = $this->input->post('id_kelas');
  	$f->tanggal = $this->input->post('tanggal');
  	$f->rating = $this->input->post('rating');
  	$f->isi = $this->input->post('isi');
  	$f->status = 1;
  	$f->total_skor = 20;
  	$f->id_sales = $a->id;
	$success = $f->save_as_new();
	
	if($success){
		$data['judul'] = "Create Feedback";
		$data['main'] = 'ops/createFeedbackBerhasil';	
	}
	else{	$f->check_last_query();
		$data['judul'] = "Create Feedback";
		$data['main'] = 'ops/feedback_gagal';		
	}


  	$this->load->vars($data);
  	$this->load->view('dashboard');
  }
  
  function readFeedback($id) {
  	$u = new Feedback();
  	$u->where('id', $id);
  	$u->get();
  
  	if ($u->findFeedback()) {
  
  		$data['judul'] = "Detail Feedback";
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
  	
  	$success = $f->save();
  	if ($success) {
		$data['judul'] = "Feedback berhasil disimpan";
		$data['main'] = 'ops/updateFeedbackBerhasil';
		$this->load->vars($data);
		$this->load->view('dashboard');
	}
	else{
		$data['judul'] = "Feedback tidak berhasil disimpan";
		$data['main'] = 'ops/updateFeedbackGagal';
		$this->load->vars($data);
		$this->load->view('dashboard');		
	}
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

    }
    
    function oFeedbackSummary(){
        $f = new Feedback();
        $u = new Account();
	$s = new Student();
	$t = new Teacher();
        
        $u->where('id_acc', $this->session->userdata('id'))->get();
        $f->where('id_sales', $u->id)->get();
	
	foreach ($f as $x){
		$s->where('id', $x->id_murid)->get();
		$t->where('id', $x->id_guru)->get();
		$x->id_murid = $s->id_murid;
		$x->id_guru = $t->id_guru;
	}
        
        $data['judul'] = "Rangkuman Feedback";
	$data['main'] = 'ops/feedback_sum';
        $data['feedback'] = $f;
        $this->load->vars($data);
    	$this->load->view('dashboard');
        
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
	$data['id_sales'] = $f->id_sales;
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
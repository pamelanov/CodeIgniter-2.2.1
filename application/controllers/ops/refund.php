<?php

class Refund extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
   // session_start();
    
	
  }
  function index(){
	$data['judul'] = "RefundSummary";
	$data['main'] = 'createRefund';
	//$data['feedback'] = $this->mfeedback->getAllFeedbacks();
	$this->load->vars($data);
	$this->load->view('dashboard');  
  }
  
  function refund_sum(){
	 $r = new Refund();
        
        $data['judul'] = "Refund Summary";
        $data['main'] = 'admin/refund_sum';
        $data['admins'] = $r->getAllRefunds();
        $this->load->vars($data);
        $this->load->view('admin/dashboard'); 
  }
  

  
  function addRefundsCtrl(){
  	$f = new Refund();
        $f->Tanggal = $this->input->post('tanggal');
  	$f->Id_murid = $this->input->post('idMurid');
  	$f->Id_guru = $this->input->post('idGuru');
  	$f->Jam_hilang = $this->input->post('jamHilang');
  	$f->Harga_jam = $this->input->post('harga');
  	$f->Alasan = $this->input->post('alasan');
  	
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
  
  function createRefund() {
  	$n = new Refund();
  
  	$n->Tanggal = $this->input->post('tanggal');
  	$n->Id_murid = $this->input->post('idMurid');
  	$n->Id_guru = $this->input->post('idGuru');
  	$n->Jam_hilang = $this->input->post('jamHilang');
  	$n->Harga_jam = $this->input->post('harga');
        $n->Alasan = $this->input->post('alasan');
  
  	$a = new Refund;
  	$a = $n->addRefunds();
//  	echo $a->id_murid;
//  	echo $a->id_guru;
  }
  
  function edit($id=0){
  	$this->load->library('encrypt');
  	$r = new Refund();
        if ($r->updateRefund()){
  		
  		$this->session->set_flashdata('message','User updated');
  		redirect('ops/refund/index','refresh');
  	}else{
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit Refund";
		$data['main'] = 'ops/refund_edit';
		$data['refund'] = $r->getRefund($id);
		$this->load->vars($data);
		$this->load->view('dashboard');    
	}
  }
  
  function delete($id){
	$this->mrefund->deleteRefund($id);
	$this->session->set_flashdata('message','User deleted');
	redirect('admin/refund/index','refresh');
  }
  
}


?>
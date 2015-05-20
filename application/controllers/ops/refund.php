<?php

class Refund extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
   // session_start();
    if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	
  }
  
  function index(){
	$data['judul'] = "RefundSummary";
	$data['main'] = 'createRefund';
	//$data['feedback'] = $this->mfeedback->getAllFeedbacks();
	$this->load->vars($data);
	$this->load->view('dashboard');  
  }
  
  function refund_sum(){
      if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	 $r = new Refund();
        
        $data['judul'] = "Refund Summary";
        $data['main'] = 'admin/refund_sum';
        $data['admins'] = $r->getAllRefunds();
        $this->load->vars($data);
        $this->load->view('admin/dashboard'); 
  }
  

  
  function addRefundsCtrl(){
      if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
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
  
  function cRefund() {
      if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	
	$i = new Invoice();
        
        $data['judul'] = "Create Refund";
        $data['main'] = 'ops/refund_create';
	$data['invoices'] = $i->get();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    
    function createRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        

        $r = new Refund();
        

        //$r->id_murid = $this->input->post('id_murid');
       //$r->id_guru = $this->input->post('id_guru');
        $r->tanggal = $this->input->post('tanggal');
        $r->no_invoice = $this->input->post('no_invoice');
        //$r->id_kelas = $this->input->post('id_kelas');
        //$r->hargaPerJam = $this->input->post('hargaPerJam');
        $r->jam_hilang = $this->input->post('jam_hilang');
        $r->alasan = $this->input->post('alasan');
        $r->action = $this->input->post('action');
        //$r->selisih = $this->input->post('selisih');
        $r->id_sales = $this->input->post('id_sales');
       $r->save();
        
        $data['judul'] = "Refund Berhasil Disimpan";
  	//$data['main'] = 'ops/createRefund';
//  	 $data['refunds'] = $r->createRefundModel();
  	//echo '<br><br>Refund berhasil disimpan!';
  	$this->load->vars($data);
  	$this->load->view('dashboard');
    }
    
    
  
  function edit(){
  	$r2 = new Refund();
$r2->where('name', 'Administrators')->get();
// You only need to select the ID column, however the select() is optional.
$r2->user->select('id')->get();
$r2->user->update_all('is_all_powerful', TRUE);
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit Refund";
		$data['main'] = 'ops/refund_edit';
		$data['refund'] = $r->getRefund($id);
		$this->load->vars($data);
		$this->load->view('dashboard');    
	}
  }
  
  function showEditRefund(){
      $data['judul'] = "Edit Refund";
      $data['main'] = 'ops/refund_edit';
      
      $this->load->vars($data);
      $this->load->view('dashboard');
  }
  
  function delete($id){
	$this->refund->delete();
	$this->session->set_flashdata('message','User deleted');
	redirect('ops/refund/index','refresh');
  }
  



?>
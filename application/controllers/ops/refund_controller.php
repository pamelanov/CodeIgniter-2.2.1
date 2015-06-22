<?php

class Refund_controller extends Ci_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

    function index() {

        $data['judul'] = "Dashboard Home";
        $data['main'] = 'home';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function searchPeriode() {
        $f = new Refund();
        $f->tanggal_awal = $this->input->post('tanggal-awal');
        $f->tanggal_akhir = $this->input->post('tanggal-akhir');
        $o = new Account();

        $data['refund'] = $f->ambilRefundSum();
        $data['tanggal_awal'] = $f->tanggal_awal;
        $data['tanggal_akhir'] = $f->tanggal_akhir;
        $data['ops'] = $o->getAllOpSv();
        $data['judul'] = "Rangkuman Refund";
        $data['main'] = 'ops/refund_sum';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function tanggalDesc($awal, $akhir){
        $f = new Refund();
        $f->tanggal_awal = $awal;
        $f->tanggal_akhir = $akhir;
        $o = new Account();
        $k = new Refund();
        $k->where_between('tanggal', "'" . $awal . "'", "'" . $akhir . "'");
        $k->order_by("tanggal", "desc");
        $k->get();
        
        $i = new Invoice();
	$a = new Account();
	foreach($k as $x){
		$i->where('id', $x->no_invoice)->get();
		$a->where('id', $x->id_sales)->get();
		$x->no_invoice = $i->no_invoice;
		$x->id_sales = $a->id_acc;
	}
        
        $data['refund'] = $k;
        $data['tanggal_awal'] = $awal;
        $data['tanggal_akhir'] = $akhir;
        $data['ops'] = $o->getAllOpSv();
        $data['judul'] = "Rangkuman Refund";
        $data['main'] = 'ops/refund_sum';
        $this->load->vars($data);
        $this->load->view('dashboard');
        
    }
    
    function tanggalAsc($awal, $akhir){
        $f = new Refund();
        $f->tanggal_awal = $awal;
        $f->tanggal_akhir = $akhir;
        $o = new Account();
        $k = new Refund();
        $k->where_between('tanggal', "'" . $awal . "'", "'" . $akhir . "'");
        $k->order_by("tanggal", "asc");
        $k->get();
        
        $i = new Invoice();
	$a = new Account();
	foreach($k as $x){
		$i->where('id', $x->no_invoice)->get();
		$a->where('id', $x->id_sales)->get();
		$x->no_invoice = $i->no_invoice;
		$x->id_sales = $a->id_acc;
	}
        
        $data['refund'] = $k;
        $data['tanggal_awal'] = $awal;
        $data['tanggal_akhir'] = $akhir;
        $data['ops'] = $o->getAllOpSv();
        $data['judul'] = "Rangkuman Refund";
        $data['main'] = 'ops/refund_sum';
        $this->load->vars($data);
        $this->load->view('dashboard');
        
    }
    
    function showChangeRefund($id){
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Refund();
        $u->where('id', $id)->get();
        $data['judul'] = "Edit Refund";
        $data['main'] = 'ops/refund_edit';
        $data['refunds']=$u;
         $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function filterOps(){
        $ref = new Refund();
        $ref->where('id_sales', $this->input->post('id_ops'));
        $ref->where_between('tanggal', "'" . $this->input->post('tanggal_awal') . "'", "'" . $this->input->post('tanggal_akhir') . "'");
        $i = new Invoice();
	$a = new Account();
        $ref->get();
	foreach($ref as $x){
		$i->where('id', $x->no_invoice)->get();
		$a->where('id', $x->id_sales)->get();
		$x->no_invoice = $i->no_invoice;
		$x->id_sales = $a->id_acc;
        }
        
        $o = new Account();
        
        $data['refund'] = $ref;
        $data['tanggal_awal'] = $this->input->post('tanggal_awal');
        $data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
        $data['ops'] = $o->getAllOpSv();
        $data['judul'] = "Rangkuman Refund";
        $data['main'] = 'ops/refund_sum';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function changeRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Refund();
        $u->where('no_invoice', $this->input->post('no_invoice'))->get();
        $u->id_sales = $this->input->post('id_sales');
        $u->tanggal = $this->input->post('tanggal');
        $u->action = $this->input->post('action');
        $u->selisih = $this->input->post('selisih');
        $u->alasan = $this->input->post('alasan');
        $u->jam_hilang = $this->input->post('jam_hilang');

        $success = $u->save();
        if($success){
            $data['judul'] = "Update Refund Berhasil";
            $data['main'] = 'ops/refund_editberhasil';            
        }
        else{
        $data['judul'] = "Update Refund Berhasil";
        $data['main'] = 'ops/refund_edit_gagal';            
        }

        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function showDeleteRefund($id){
        
    }
    
    function deleteRefund($id){
                if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Refund();
        $u->where('id', $id)->get();
        $u->delete();
        $data['judul'] = "Delete Refund Berhasil";
        $data['main'] = 'ops/delete_refund_berhasil';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

}

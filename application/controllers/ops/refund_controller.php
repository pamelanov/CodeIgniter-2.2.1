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

        $data['refund'] = $f->ambilRefundSum();
        $data['tanggal_awal'] = $f->tanggal_awal;
        $data['tanggal_akhir'] = $f->tanggal_akhir;
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

        $u->save();
        $data['judul'] = "Update Refund Berhasil";
        $data['main'] = 'ops/refund_editberhasil';
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

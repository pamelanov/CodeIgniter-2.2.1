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

}

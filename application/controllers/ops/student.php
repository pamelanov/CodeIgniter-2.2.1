<?php

class Student extends Ci_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Summary List";
        $data['main'] = 'ops/student_summary';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function searchStudent() {
        $u = new Student();
        $u->Id_murid = $this->input->post('idMurid');

        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'ops/hasil_search';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('dashboard');
        } else {
            $data['judul'] = "Summary list";
            $data['main'] = "ops/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
    }

    function createStatus() {
        $data['judul'] = "Create Status";
        $data['main'] = 'ops/update_status';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function riwayatStatus() {
        $u = new Student();
        $s = new Beginning_number();
        $u->Id_murid = $this->input->post('idMurid');

        $data['judul'] = "Riwayat Status";
        $data['main'] = 'ops/riwayat_status';
        $data['status'] = $s->ambilStatus();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

}

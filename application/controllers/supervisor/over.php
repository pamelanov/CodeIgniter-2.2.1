<?php

class Over extends Ci_Controller {

    function __construct() {
        parent::__construct();
        // session_start();
    }

    function index() {
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Overall Summary";
        $data['main'] = 'admin/overall_home';
        $data['overall'] = $this->moverall->getAllOverall();
        $this->load->vars($data);
        $this->load->view('admin/dashboard');
    }

    function showOverall() {
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $a = new Account();

        $data['judul'] = "Overall Summary";
        $data['main'] = 'supervisor/periode_overall';
        $data['ops'] = $a->getAllOps();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function findOverall() {
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $f = new Feedback();
        $f->tanggal_awal = $this->input->post('tanggal-awal');
        $f->tanggal_akhir = $this->input->post('tanggal-akhir');
        
        $r = new Refund();
        $r->tanggal_awal = $this->input->post('tanggal-awal');
        $r->tanggal_akhir = $this->input->post('tanggal-akhir');
        if ($f->findOverall() || $r->findOverall()) {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'supervisor/overall_home_1';
            $data['tanggal_awal'] = $r->tanggal_awal;
            $data['tanggal_akhir'] = $r->tanggal_akhir;
            $data['feedback'] = $f->hasilSearch1();
            $data['refund'] = $r->hasilSearch1();
            
            $this->load->vars($data);
            $this->load->view('dashboard');
        } else {
            $data['judul'] = "Edit Sales Target";
            $data['main'] = "supervisor/error_hasil_search";
            $this->load->vars($data);
            $this->load->view('dashboard', $data);
        }
    }

    function edit($id = 0) {

        $this->load->library('encrypt');
        if ($this->input->post('username')) {
            $this->madmins->updateUser();
            $this->session->set_flashdata('message', 'User updated');
            redirect('admin/admins/index', 'refresh');
        } else {
            //$id = $this->uri->segment(4);
            $data['judul'] = "Edit User";
            $data['main'] = 'admin/overall_edit';
            $data['admin'] = $this->madmins->getUser($id);
            $this->load->vars($data);
            $this->load->view('admin/dashboard');
        }
    }

    function delete($id) {
        $this->madmins->deleteUser($id);
        $this->session->set_flashdata('message', 'User deleted');
        redirect('admin/admins/index', 'refresh');
    }

}

?>
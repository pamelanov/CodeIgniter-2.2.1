<?php

class Create extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Summary List";
        $data['main'] = 'ops/searchStudent';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    
    function searchStudentStatus() {
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        
    
        if ($u->findStudent()) {

            $data['judul'] = "Perbaharui Status";
            $data['main'] = 'create';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Perbaharui Status";
            $data['main'] = "ops/gagal_search";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
          function createStatus() {
        
        
        if ($this->input->post('status') == 6 || $this->input->post('status') == 7 || $this->input->post('status') == 8 ){
            
            $m = new End_number();
            $o = new End_number();
            
            $m->id_murid = $this->input->post('id_murid');
            $m->jam = $this->input->post('jam');
            $m->tanggal = $this->input->post('tanggal');
            $m->id_sales = $this->input->post('id_sales');
            $m->status = $this->input->post('status');
            $m->no_invoice = $this->input->post('no_invoice');
            
            $o = $m->updateStatus();
            echo "berhasil";
        }
        
        else{
            $a = new Beginning_number();
            $n = new Beginning_number();
        
            $n->id_murid = $this->input->post('id_murid');
            $n->jam = $this->input->post('jam');
            $n->tanggal = $this->input->post('tanggal');
            $n->id_sales = $this->input->post('id_sales');
            $n->status = $this->input->post('status');
            $a = $n->updateStatus();
            echo "berhasil!";
        }
    }

}
    
    
?>
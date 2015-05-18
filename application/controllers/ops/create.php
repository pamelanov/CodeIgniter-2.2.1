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
       if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        $i = new Invoice();
    
        if ($u->findStudent()) {

            $data['judul'] = "Perbaharui Status";
            $data['main'] = 'create';
            $data['student'] = $u->hasilSearch();
            $data['invoices'] = $i->getInvoiceHistory($u->id_murid);
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Perbaharui Status";
            $data['main'] = "ops/gagal_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
        function createStatus() {
        
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
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
            
            if ($this->input->post('status') == 8){
                $t = new Target();
               
                
            $data['judul'] = "Create Status";
            $data['main'] = "ops/status_berhasil";
            $data['tes'] =  $t->addActual($this->session->userdata('id'));
            
            

            $this->load->view('dashboard', $data);
            }
            

            
            
        }
        
        else{
            $a = new Beginning_number();
            $n = new Beginning_number();
            $b = new Beginning_number();
            $n->id_murid = $this->input->post('id_murid');
            $n->jam = $this->input->post('jam');
            $n->tanggal = $this->input->post('tanggal');
            $n->id_sales = $this->input->post('id_sales');
            $n->status = $this->input->post('status');
            
            // if ($b->exists($n)){
                // $data['tes'] = $b->retrieve($n);
                // $a = $n->updateStatus();
                // $data['judul'] = "Create Status";
                // $data['main'] = "ops/status_double";
                
            // }
            
            // else{
                 $a = $n->updateStatus();
                 $data['judul'] = "Create Status";
                $data['main'] = "ops/status_berhasil";
            //}
           
            $this->load->view('dashboard', $data);
        }
    }

}
    
    
?>
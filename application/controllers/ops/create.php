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
        
        $id_murid = $u->id_murid;
    
        if ($u->findStudent()) {

            $data['judul'] = "Perbaharui Status";
            $data['main'] = 'create';
            $data['student'] = $u->hasilSearch();
            $data['s'] = $u->get();
            $data['invoices'] = $i->getInvoiceHistory($id_murid);
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
    

    function searchStudentStatusSumB($id) {
    	if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
    		redirect('dashboard', 'refresh');
    	}
        $b = new Beginning_number();
        $b->where('id', $id)->get();
    	$s = new Student();
        $s->where('id', $b->id_murid)->get();
    	$data['judul'] = "Perbaharui Status";
    	$data['main'] = 'formUpdateStatus';
        $data['info'] = $s;
        $data['cek'] = $id;
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    
    }
   
    function searchStudentStatusSumE($id) {
    	if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
    		redirect('dashboard', 'refresh');
    	}
    	
        $e = new End_number();
        $e->where('id', $id)->get();
        $i = new Invoice();
        $i->where('id', $e->id_invoice)->get();
        $c = new Course();
        $c->where('id', $i->id_kelas)->get();
        $s = new Student();
        $s->where('id', $c->id_murid)->get();
        
    	$data['judul'] = "Perbaharui Status";
    	$data['main'] = 'formUpdateStatus';
        $data['info'] = $s;
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    
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
                $data['tes'] =  $t->addActual($this->session->userdata('id'));
            }
            
        $data['judul'] = "Create Status";
        $data['main'] = "ops/status_berhasil";
        $this->load->view('dashboard', $data);
            
            
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
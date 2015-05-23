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
            $a = new Account();
            $i = new Invoice();
            $k = new Student();
            
            $a->where('id_acc', $this->input->post('id_sales'))->get();
            $i->where('no_invoice', $this->input->post('no_invoice'))->get();
  
            $murid = $this->input->post('id_murid');
            $k->where('id_murid', $murid)->get();
            
            $m->jam = $this->input->post('jam');
            $m->tanggal = $this->input->post('tanggal');
            $m->id_sales = $a->id;
            $m->no = $this->input->post('status');
            $m->id_invoice = $i->id;

            $o->where('no', $m->no);
            $o->where('id_invoice', $m->id_invoice);
            $o->get();
            
            if ($o->id == null) {
                $x = new Invoice();
                $y = new Course();
                
                $x->where('id', $m->id_invoice)->get();
                $y->where('id', $x->id_kelas)->get();
                
                    if($y->id_murid != $k->id) {
                        $data['judul'] = "Tambah Status";
                        $data['main'] = "ops/status_gagal";
                    }
                    else {
                        $s = $m->save_as_new();
                        $check = new End_number();
                        $check->where('no', $m->no);
                        $check->where('id_invoice', $m->id_invoice);
                        $check->get();

                            if($check->id != null){
                                $data['judul'] = "Tambah Status";
                                $data['main'] = "ops/status_berhasil";
                    
                                    if ($this->input->post('status') == 8){
                                        $t = new Target();
                                        $data['tes'] =  $t->addActual($this->session->userdata('id'));
                                    }
                            }
            
                            else {
                                $data['judul'] = "Tambah Status";
                                $data['main'] = "ops/status_gagal";
                            }
                    }
                
            }
            
            else{
                    $data['judul'] = "Tambah Status";
                    $data['main'] = "ops/status_gagal";     
            }

            $this->load->view('dashboard', $data);

        }
        
        else{
            $n = new Beginning_number();
            $b = new Beginning_number();
            $a = new Account();
            $m = new Student();
            
            if ($this->input->post('no_invoice') != null) {
                    $data['judul'] = "Create Status";
                    $data['main'] = "ops/status_gagal"; 
            }
            
            else {
            $a->where('id_acc', $this->input->post('id_sales'))->get();
            $m->where('id_murid', $this->input->post('id_murid'))->get();        
            
            $n->id_murid = $m->id;
            $n->jam = $this->input->post('jam');
            $n->tanggal = $this->input->post('tanggal');
            $n->id_sales = $a->id;
            $n->status = $this->input->post('status');
            
                if ($n->exists()){
                $success = $n->save_as_new();
                    if($success){
                        $data['judul'] = "Create Status";
                        $data['main'] = "ops/status_double";
                    }
                    else {
                        $data['judul'] = "Create Status";
                        $data['main'] = "ops/status_gagal";  
                    }
                
                }
            
                else{
                 $success = $n->save_as_new();
                 
                 if($success){
                    $data['judul'] = "Create Status";
                    $data['main'] = "ops/status_berhasil";
                 }
                 else{
                    $data['judul'] = "Create Status";
                    $data['main'] = "ops/status_gagal";                     
                 }

                }
            }
           
            $this->load->view('dashboard', $data);
        }
    }

}
    
    
?>
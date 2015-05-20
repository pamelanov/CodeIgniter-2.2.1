<?php

class Performance extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
         if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        
      
    }
    
    function showCreate() {
        $a = new Account();
        
        $data['judul'] = "Buat Target Performa";
        $data['main'] = 'supervisor/performance';
        $data['ops'] = $a->getAllOps();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function create(){
              if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $n = new Target();
        
        $n->id_sales = $this->input->post('id_sales');
        $n->periode = $this->input->post('periode');
        $n->id_supervisor = $this->input->post('id_supervisor');
        $n->target = $this->input->post('target');

        if ($n->valid() && $n->notExists()){
            
                $data['judul'] = "Target Berhasil Disimpan";
                $data['main'] = 'supervisor/created';
                $data['targets'] = $n->createTarget();
                $this->load->vars($data);
                $this->load->view('dashboard');
            
        }
        else {
            $data['judul'] = "Target Gagal Disimpan";
            $data['main'] = 'supervisor/failed';
            $this->load->vars($data);
            $this->load->view('dashboard'); 
        }
    }
    
    function showEdit() {
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $a = new Account();
        
        $data['judul'] = "Ubah Target Sales";
	$data['main'] = 'supervisor/edit_performance';
        $data['ops'] = $a->getAllOps();
        $data['ops'] = $a->get();
        $this->load->vars($data);
	$this->load->view('dashboard');
    }
    
    function findTarget(){
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $a = new Target();
        $a->id_sales = $this->input->post('id_sales');
        $a->periode = $this->input->post('periode');
    
        if ($a->findTarget()) {

		
            $data['judul'] = "Ubah Target Sales";
            $data['main'] = 'supervisor/hasil_search_target';
            $data['target'] = $a->hasilSearch();
            // $data['id_sales'] = $o->
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Ubah Target Sales";
            $data['main'] = "supervisor/error_hasil_search";
            $data['aktif'] = 'class="active"';
            $this->load->vars($data);
            $this->load->view('dashboard', $data);
        }
    }
    
    function edit(){
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        
        $a = new Account();
        $a->where('id_acc', $this->input->post('id_sales'))->get(); 
        
        $n = new Target();
        
        $n->id_sales = $a->id;
        $n->periode = $this->input->post('periode');
        $n->target = $this->input->post('target');
        
        $data['judul'] = "Pengubahan Berhasil";
	$data['main'] = 'supervisor/updated';
        $data['targets'] = $n->updateTarget();
	$this->load->vars($data);
	$this->load->view('dashboard');  
    }
    
    function overall(){
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();
        $a = new Account();
        $a->where('role', 2)->get();
	$data['judul'] = "Performa Keseluruhan";
	$data['main'] = 'supervisor/overall_performance';
        $data['targets'] = $t->rank();
        $data['ops'] = $a;
	$this->load->vars($data);
	$this->load->view('dashboard');  
    }
    
    
    function showHapusTarget(){
        $s = new Account();
        $data['judul'] = "Hapus Target";
	$data['main'] = 'supervisor/hapus_performa';
        $data['ops'] = $s->getAllOps();
	$this->load->vars($data);
	$this->load->view('dashboard');    
    }
    
    function cariHapus(){
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $a = new Target();
        $a->id_sales = $this->input->post('id_sales');
        $a->periode = $this->input->post('periode');
    
        if ($a->findTarget()) {
            $data['judul'] = "Hapus Target Sales";
            $data['main'] = 'supervisor/hapus_target';
            $data['target'] = $a->hasilSearch();
        }
         else {
            $data['judul'] = "Error: Hapus Target Sales";
            $data['main'] = "supervisor/error_hapus_target";
            $data['aktif'] = 'class="active"';
        }
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function hapusTarget($id){
        $t = new Target();
        $t->where('id', $id)->get();
        $t->delete();
        // $t->check_last_query();
        
        $data['judul'] = "Hapus Target";
        $data['main'] = 'supervisor/deleted';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function sejarahPerforma(){
        $t = new Target();
        $t->id_sales = $this->input->post('id_ops');
        $a = new Account();
        $a->where('id', $t->id_sales)->get();
        
        $data['judul'] = "Sejarah Performa";
        $data['main'] = 'supervisor/sejarah_performa';
        $data['sejarah'] = $t->getSejarahPerforma($t->id_sales);
        $data['ops'] = $a;
        $this->load->vars($data);
        $this->load->view('dashboard');
        
    }
}
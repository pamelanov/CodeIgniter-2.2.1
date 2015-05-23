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
        $success = new Target();
	$a = new Account();
	$b = new Account();
        $a->where('id_acc', $this->input->post('id_sales'))->get();
        $b->where('id_acc', $this->input->post('id_supervisor'))->get();
        
        $n->id_sales = $a->id;
        $n->periode = $this->input->post('periode');
        $n->id_supervisor = $b->id;
        $n->target = $this->input->post('target');

        if ($n->valid() && $n->notExists() && $n->target > 0){

            $n->save_as_new();
            $success->where('id_sales', $n->id_sales);
            $success->where('periode', $n->periode);
            $success->get();
            if($success){
                $data['judul'] = "Target Berhasil Disimpan";
                $data['main'] = 'supervisor/created';
                
                $this->load->vars($data);
                $this->load->view('dashboard');
            }
            else{
                $data['judul'] = "Target Gagal Disimpan Bgt";
                $data['main'] = 'supervisor/failed';
                $this->load->vars($data);
                $this->load->view('dashboard');
                $n->check_last_query();
            }
            
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
        $n->where('id', $this->input->post('id'))->get();
        $n->id_sales = $a->id;
        $n->periode = $this->input->post('periode');
        $n->target = $this->input->post('target');
        
        $valid = $n->target > 0;
        if ($valid){
            $success = $n->save();
        
            if($success){
                $data['judul'] = "Pengubahan Berhasil";
                $data['main'] = 'supervisor/updated';
                $this->load->vars($data);
                $this->load->view('dashboard');      
            }   
            else{
                $data['judul'] = "Pengubahan Gagal";
                $data['main'] = 'supervisor/edit_failed';
                $this->load->vars($data);
                $this->load->view('dashboard');  
            }
        }
        
        else{
            $data['judul'] = "Pengubahan Gagal Bgt";
            $data['main'] = 'supervisor/edit_failed';
            $this->load->vars($data);
            $this->load->view('dashboard');  
        }
        

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
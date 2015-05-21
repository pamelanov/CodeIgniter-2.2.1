<?php

class Summary extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

    function index() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Summary List";
        $data['main'] = 'ops/searchStudent';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function searchStudent() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        

          
        if ($u->findStudent()) {
             if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
            }
            $murid = new Student();
            $murid->where('id_murid', $u->id_murid)->get();
            $b = new Beginning_number();
            $b->id_murid = $u->id_murid;
            $e = new End_number();
            $e->id_murid = $u->id_murid;
            $c = new Course();
            $s = new Student();

            $data['judul'] = "Student Summary";
            $data['main'] = 'summary';
            $data['students'] = $b->summary();
            $data['students2'] = $e->summary();
            $data['courses'] = $c->getCourses($u->id_murid);
            $data['s'] = $s->get();
            $data['murid'] = $murid;
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = "ops/gagal_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
    
    
    
    function searchStatusStudent() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
      $u = new Student();
        $u->Id_murid = $this->input->post('idMurid');
        
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'ops/status_hasil_search';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('dashboard');
        
        }
        
        else {
            $data['judul'] = "Summary list";
            $data['main'] = "ops/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
    function riwayatStatus(){
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Beginning_number();
        $u->Id_murid = $this->input->post('idMurid');
        
            
            $data['judul'] = "Riwayat Status";
            $data['main'] = 'ops/riwayat_status';
            $data['status'] = $u->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
    }
    
    function searchFeedback() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
    	$u = new Feedback();
    	$u->id_murid = $this->input->post('idMurid');
    	$u->id_guru = $this->input->post('idGuru');
    
    	// $n = new Beginning_number();
    	// $n->Id_murid = $this->input->post('idMurid');
    
    	if ($u->findFeedback()) {
    
    		$data['judul'] = "Isi Feedback";
    		$data['main'] = 'ops/hasil_search_feedback';
    		$data['feedback'] = $u->hasilSearch();
    		//$data['riwayat'] = $n->ambilStatus();
    		$this->load->vars($data);
    		$this->load->view('dashboard');
    	}
    	else {
    		$data['judul'] = "Isi Feedback";
    		$data['main'] = "ops/hasil_search_feedback";
    		$data['aktif'] = 'class="active"';
    
    		$this->load->view('dashboard', $data);
    	}
    
    }
    
    function showRecurring($id){
        $s = new Student();
        $s->where('id', $id)->get();
        
        $c = new Course();
        $c->where('id_murid', $s->id);
        $c->where('status', "active");
        $c->get();
        
        $data['judul'] = "Tambah Recurring";
    	$data['main'] = 'ops/tambah_recurring';
    	$data['murid'] = $s;
        $data['courses'] = $c;

    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function recurring(){
        $r = new Recurring_status();
        $r->id_kelas = $this->input->post('idKelas');
        $r->tanggal = $this->input->post('tanggal');
        $a = new Account();
        $a->where('id_acc', $this->input->post('idSales'))->get();
        $r->id_sales = $a->id;
        $r->save_as_new();
        
        $a = new Recurring_status();
        $a->select_max('id');
        $a->get();
        
        if ((!empty($this->input->post('alasan'))) && (empty($this->input->post('periode-awal'))) && (empty($this->input->post('periode-akhir'))) && (empty($this->input->post('jumlah-jam')))){   
            $n = new Not_recurring();
            $c = new Course();
            $id_kelas = $r->id_kelas;
            $c->where('id', $id_kelas)->get();
            $c->status = "inactive";
            $c->save();
            
            $n->id_rec_status = $a->id;
            $n->alasan = $this->input->post('alasan');
            $n->save_as_new();
            
            $data['judul'] = "Pembuatan Recurring Berhasil";
    	    $data['main'] = 'ops/recurring_berhasil';
            $this->load->vars($data);
            $this->load->view('dashboard');
    
        }
        
        else if(empty($this->input->post('alasan')) && (!empty($this->input->post('periode-awal'))) && (!empty($this->input->post('periode-akhir'))) && (!empty($this->input->post('jumlah-jam')))){
            $e = new Recurring();
            
            $e->id_rec_status = $a->id;
            $e->periode_awal = $this->input->post('periode-awal');
            $e->periode_akhir = $this->input->post('periode-akhir');
            $e->jumlah_jam = $this->input->post('jumlah-jam');
            $e->save_as_new();
            
            $data['judul'] = "Pembuatan Recurring Berhasil";
    	    $data['main'] = 'ops/recurring_berhasil';
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
        
        else {
            $data['judul'] = "Pembuatan Recurring Tidak Berhasil";
    	    $data['main'] = 'ops/recurring_tdk_berhasil';
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
        
    }
    
}

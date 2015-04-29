<?php

class Dashboard extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
        if($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
           redirect('template/login', 'refresh');
        }
    }

    function index() {
        $data['judul'] = "Dashboard Home";
        $data['main'] = 'home';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
          

    function createData(){
	$data['judul'] = "Create";
        $data['main'] = 'create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }



    function createStatus() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Status";
        $data['main'] = 'ops/createStatus';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function cRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Refund";
        $data['main'] = 'ops/refund_create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function createRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }

        $r = new Refund();

        $r->id_murid = $this->input->post('id_murid');
        $r->id_guru = $this->input->post('id_guru');
        $r->tanggal = $this->input->post('tanggal');
        $r->no_invoice = $this->input->post('no_invoice');
        $r->id_kelas = $this->input->post('id_kelas');
        $r->hargaPerJam = $this->input->post('hargaPerJam');
        $r->jam_hilang = $this->input->post('jam_hilang');
        $r->alasan = $this->input->post('alasan');
        $r->action = $this->input->post('action');
        $r->selisih = $this->input->post('selisih');
        $r->id_sales = $this->input->post('id_sales');
        $r->save();
    }

    function cFeedback() {
        $data['judul'] = "Create Feedback";

        $data['main'] = 'ops/feedback_create';

        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createFeedback() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }

        $f = new Feedback();

        $f->id_murid = $this->input->post('id_murid');
        $f->id_guru = $this->input->post('id_guru');
        $f->tanggal = $this->input->post('tanggal');
        $f->rating = $this->input->post('rating');
        $f->isi = $this->input->post('isi');
        $f->status = $this->input->post('status');
        $f->total_skor = $this->input->post('total_skor');
        $f->id_sales = $this->input->post('id_sales');
        $f->save();
    }

    function refunds() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
	    
	}
        $r = new Refund();
        
        $data['judul'] = "Refund Summary";
        $data['main'] = 'ops/refund_home';
        $data['admins'] = $r->getAllRefunds();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function createFeedback(){
    	//$r = new Feedback();
    
    	$data['judul'] = "Create Feedback";
    	$data['main'] = 'createFeedback1';
    	//$data['feedback'] = $r->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function updateFeedback(){
    	//$r = new Feedback();
    
    	$data['judul'] = "Update Feedback";
    	$data['main'] = 'updateFeedback';
    	//$data['feedback'] = $r->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function readFeedback(){
    	$r = new Feedback();
    	
    	$data['judul'] = "Feedback";
    	$data['main'] = 'createFeedback';
    	$data['feedback'] = $r->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function readFeedback1(){
    	$r = new Feedback();
    	 
    	$data['judul'] = "Feedback";
    	$data['main'] = 'readFeedback';
    	$data['feedback'] = $r->getAllFeedbacks();
    	$this->load->vars($data);
    	$this->load->view('dashboard');
    }
    
    function users() {
        $o = new Account();
        
        $data['judul'] = "Manage Users";
        $data['main'] = 'admin/user_home';
        $data['admins'] = $o->getAllAccounts();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function summary() {
        $data['judul'] = "Summary List";
        $data['main'] = 'summary';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }



    function performance_sup() {
        if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();

        $data['judul'] = "Performance";
        $data['main'] = 'supervisor/overall_performance';
        $data['targets'] = $t->rank();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createUser() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create User";
        $data['main'] = 'admin/user_create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createAccount() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $u = new Account();

        $u->id_acc = $this->input->post('id_acc');
        $u->password = md5($this->input->post('password'));

        $u->email = $this->input->post('email');
        $u->nama = $this->input->post('nama');
        $u->no_telp = $this->input->post('no_telp');
        $u->role = $this->input->post('role');
        $u->save();
        $data['judul'] = "Create User";

        $data['main'] = 'admin/created';

        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function edit($id = 0) {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $this->load->library('encrypt');
        $u = new Account();
        $u->id_acc = $this->input->post('id_acc');
        $u->password = $this->input->post('password');

        $u->email = $this->input->post('email');
        $u->nama = $this->input->post('nama');
        $u->no_telp = $this->input->post('no_telp');
        $u->role = $this->input->post('role');
        if ($u->updateAccount) {

            $this->session->set_flashdata('message', 'User updated');
            redirect('dashboard/users', 'refresh');
        } else {
            $data['judul'] = "Create User";
            $data['main'] = 'admin/user_create';
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
    }

    function logout() {
        unset($_SESSION['userid']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('template/login', 'refresh');
    }
    
    function performance(){
        $t = new Target();
        
	$data['judul'] = "Performance";
	$data['main'] = 'ops/performance_ops';
        $data['target'] = $t->rank();
	$this->load->vars($data);
	$this->load->view('dashboard');  
  }

}

?>
<?php

class Dashboard extends Ci_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

    function index() {
/*
        $data['judul'] = "Dashboard Home";
        $data['main'] = 'dashboard/todaySummary';
        $this->load->vars($data);
        $this->load->view('dashboard');
    */
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	
	if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3){
	    $a = new Account();
	    $b = new Beginning_number();
	    $e = new End_number();
	    $s = new Student();
	    $data['judul'] = "Dashboard Home";
	    $data['main'] = 'today_summary';
	    $data['ops'] = $a->getAllOpSv();
	    $data['statusAwal'] = $b->forTodaySum();
	    $data['statusAkhir'] = $e->forTodaySum();
	    $data['students'] = $s->get();
	}
	
	else if($this->session->userdata('role') == 2 ){
	    $id_sales = $this->session->userdata('id');
	    $a = new Account();
	    $b = new Beginning_number();
	    $e = new End_number();
	    $a->where('id_acc', $id_sales)->get();
	    $data['judul'] = "Dashboard Home";
	    $data['main'] = 'ops/today_summary';
	    $data['statusAwal'] = $b->forTodaySumFilter($a->id);
	    $data['statusAkhir'] = $e->forTodaySumFilter($a->id);
	    $data['ops'] = $a;
	}
	
	
	$this->load->vars($data);
        $this->load->view('dashboard');

    }

    function showRefundSum() {
        
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $r = new Refund();
	$a = new Account();

        $data['judul'] = "Refund Summary";
        $data['main'] = 'ops/refund_sum_periode';
        $data['refunds'] = $r->getAllRefunds();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function todaySummary() {
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	
	if($this->session->userdata('role') == 1){
	    $a = new Account();
	    $b = new Beginning_number();
	    $e = new End_number();
	    $s = new Student();
	    $data['judul'] = "Dashboard Home";
	    $data['main'] = 'admin/today_summary';
	    $data['ops'] = $a->getAllOpSv();
	    $data['statusAwal'] = $b->forTodaySum();
	    $data['statusAkhir'] = $e->forTodaySum();
	    $data['students'] = $s->get();
	}
	
	else if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3){
	    $id_sales = $this->session->userdata('id');
	    $a = new Account();
	    $b = new Beginning_number();
	    $e = new End_number();
	    $a->where('id_acc', $id_sales)->get();
	    $data['judul'] = "Dashboard Home";
	    $data['main'] = 'ops/today_summary';
	    $data['statusAwal'] = $b->forTodaySumFilter($a->id);
	    $data['statusAkhir'] = $e->forTodaySumFilter($a->id);
	    $data['ops'] = $a;
	}
	
	
	$this->load->vars($data);
        $this->load->view('dashboard');
	/*
        $b = new Beginning_number();
        $e = new End_number();
        $s = new Student();

        $data['judul'] = "Dashboard Home";
        $data['main'] = 'todaySummary';
        $data['statusAwal'] = $b->forTodaySum();
        $data['statusAkhir'] = $e->forTodaySum();
        $data['students'] = $s->get();

        $this->load->vars($data);
        $this->load->view('dashboard');
	$this->load->library('pagination');
	*/
    }
    
    function filterTodaySum(){
	$a = new Account();
	$b = new Beginning_number();
	
	$e = new End_number();

	$a->where('id', $this->input->post('id_ops'))->get();
	$id_sales = $a->id;
	
	$data['judul'] = "Dashboard Home";
	$data['main'] = 'today_sum_filter';
	$data['statusAwal'] = $b->forTodaySumFilter($id_sales);
	$data['statusAkhir'] = $e->forTodaySumFilter($id_sales);
	$data['ops'] = $a;
	
	$this->load->vars($data);
	$this->load->view('dashboard');    
    }

    function createData() {
           if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        
        $s = new Student();
        $s->get();
        
        $data['judul'] = "Create Status";
        $data['main'] = 'create';
        $data['s'] = $s;
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
      

    
    function feedbacks() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $r = new Feedback();

        $data['judul'] = "Feedback Summary";
        $data['main'] = 'ops/feedback_home';
        $data['feedback'] = $r->getAllFeedbacks();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function updateFeedback() {
        //$r = new Feedback();
if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Update Feedback";
        $data['main'] = 'updateFeedback';
        //$data['feedback'] = $r->getAllFeedbacks();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function crudFeedback() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $r = new Feedback();

        $data['judul'] = "Create Feedback";
        $data['main'] = 'ops/crudFeedback';
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

    function overallSum() {
if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $r = new Refund();
        $f = new Feedback();
        $data['judul'] = "Overall Summary";
        $data['judul2'] = "Refund";
        $data['judul3'] = "Feedback";
        $data['main'] = 'supervisor/overall_home';


        $data['refund'] = $r->getAllRefunds();
        $data['feedback'] = $f->getAllFeedbacks();



        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function summary() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	$s = new Student();
        $data['judul'] = "Search Student";
        $data['main'] = 'summary';
	$data['s'] = $s->get();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function cFeedback() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Feedback";

        $data['main'] = 'ops/feedback_create';

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


	$success = $u->save();
	
	if ($success) {
	    $data['judul'] = "Create User";
	    $data['main'] = 'admin/created';
	}
	else{
	    $data['judul'] = "Create User";
	    $data['main'] = 'admin/user_failed';
	}

        $this->load->vars($data);
        $this->load->view('dashboard');
	
       
    }

    function createRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }


        $r = new Refund();

	$a = new Account();
	$a->where('id_acc', $this->input->post('id_sales'))->get();
        $r->no_invoice = $this->input->post('no_invoice');
        $r->id_sales = $a->id;
        $r->jam_hilang = $this->input->post('jam_hilang');
        $r->tanggal = $this->input->post('tanggal');
        $r->action = $this->input->post('action');
        $r->selisih = $this->input->post('selisih');
        $r->alasan = $this->input->post('alasan');
	
	$i = new Invoice();
	$i->where('id', $this->input->post('no_invoice'))->get();
	$i->refund = 1;
	$i->save();

        $success = $r->save_as_new();
	if($success){
	    $data['judul'] = "Refund Berhasil Disimpan";
	    $data['main'] = 'ops/refund_create_berhasil';
	}
	else{
	    $data['judul'] = "Refund Tidak Berhasil Disimpan";
	    $data['main'] = 'ops/refund_create_gagal';	    
	}
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function editUser($id) {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $u = new Account();
        $u->where('id', $id)->get();

        $data['judul'] = "Ubah Akun";
        $data['main'] = 'admin/user_edit';
        $data['user'] = $u;
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function editAccount() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $u = new Account();
        $u->where('id_acc', $this->input->post('id_acc'))->get();

        $u->password = md5($this->input->post('password'));
        $u->email = $this->input->post('email');
        $u->nama = $this->input->post('nama');
        $u->no_telp = $this->input->post('no_telp');
        $u->role = $this->input->post('role');

        $success = $u->save();
	if ($success) {
	    $data['judul'] = "Update Berhasil";
	    $data['main'] = 'admin/edit_berhasil';
	    $this->load->vars($data);
	    $this->load->view('dashboard');
	}
	else{
	    $data['judul'] = "Update Gagal";
	    $data['main'] = 'admin/edit_gagal';
	    $this->load->vars($data);
	    $this->load->view('dashboard');
	}
    }


    function showEditRefund($id){
          if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Refund();
        $u->where('id', $id)->get();
      $data['judul'] = "Edit Refund";
      $data['main'] = 'ops/refund_edit';
      $data['refunds']=$u;
      $this->load->vars($data);
      $this->load->view('dashboard');
     }      
     
    function showDeleteRefund() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Delete Refund";
        $data['main'] = 'ops/refund_delete';

        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    /*
      function crudFeedback(){
      $r = new Feedback();

      $data['judul'] = "Feedback";
      $data['main'] = 'ops/crudFeedback';
      $data['feedback'] = $r->getAllFeedbacks();
      $this->load->vars($data);
      $this->load->view('dashboard');
      }
     */

    function ePassword($id) {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $u = new Account();
        $u->where('id', $id)->get();

        $data['judul'] = "Create User";
        $data['main'] = 'admin/password_edit';
        $data['user'] = $u;
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function editPassword() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $u = new Account();
        $u->where('id_acc', $this->input->post('id_acc'))->get();
	if (strlen($this->input->post('password')) < 3) {
	        $data['judul'] = "Update Gagal";
	    $data['main'] = 'admin/edit_gagal';
	}
	else {
	    $u->password = md5($this->input->post('password'));
	    $u->save();
	    $data['judul'] = "Update Berhasil";
	    $data['main'] = 'admin/edit_berhasil2';
	}

        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function deleteAccount($id) {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
 
        $u = new Account();
        $u->where('id', $id)->get();
        
        if($this->session->userdata('id') == $u->id_acc) {
            $data['judul'] = "Delete Gagal";
            $data['main'] = 'admin/delete_gagal';
        }
        else {
	    $success = $u->delete();
		if ($success) {
		    $data['judul'] = "Delete Berhasil";
		    $data['main'] = 'admin/delete_berhasil';
		}
		else{
		    $data['judul'] = "Delete Gagal";
		    $data['main'] = 'admin/delete_gagal';
		}
        }
        $this->load->vars($data);
        $this->load->view('dashboard');
        
    }

    function deleteRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $u = new Refund();
        $u->where('no_invoice', $this->input->post('no_invoice'))->get();

        $u->delete();
        $data['judul'] = "Delete Refund Berhasil";
        $data['main'] = 'ops/refund_delete';

        $this->load->vars($data);
        $this->load->view('dashboard');
    }
   
       function logout() {
        $sesi_items = array('role' => '');
        $this->session->unset_userdata($sesi_items);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('template/login', 'refresh');
    }

    function performance() {
         if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();
	$a = new Target();
	$k = $a->ambilPerforma($this->session->userdata('id'));
	if (!empty($k) && $k->target != 0) {
	    $bar = round($k->actual / $k->target * 100, 2);
	    $data['progressbar'] = $bar;
	}
	else {
	    $data['progressbar'] = -1;
	}
        $data['judul'] = "Performance";
        $data['main'] = 'ops/performance_ops';
	$data['performa'] = $a->ambilPerforma($this->session->userdata('id'));
        $data['target'] = $t->rank();
	
        $this->load->vars($data);
        $this->load->view('dashboard');
    }  
}
?>
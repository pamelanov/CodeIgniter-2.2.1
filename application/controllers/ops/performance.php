<?php

class Performance extends Ci_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

  function index(){
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	$data['judul'] = "Performance";
	$data['main'] = 'supervisor/performance';
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  
  function overall(){
      if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	$data['judul'] = "Overall Performance";
	$data['main'] = 'supervisor/overall_performance';
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
    
  }
  
  function filterPerforma(){
    if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();
	$a = new Target();
	$a->periode = $this->input->post('bulan');
	$ops = $this->session->userdata('id');
	$k = $a->ambilPerforma($ops);
	if (!empty($k) && $k->target != 0) {
	    $bar = round(($k->actual / $k->target) * 100, 2);
	    $data['progressbar'] = $bar;
	}
	else {
	    $data['progressbar'] = -1;
	}
        $data['judul'] = "Performance";
        $data['main'] = 'ops/performance_ops';
	$data['performa'] = $a->ambilPerforma($ops);
        $data['target'] = $t->rank($a->periode);
	$data['periode'] = $a->periode;
        $this->load->vars($data);
        $this->load->view('dashboard');      
    
  }
  
  
  function lihatRincian($periode){
    if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
	
	$rec = new Recurring_status();
	$ops = new Account();
	$ops->where('id_acc', $this->session->userdata('id'))->get();
	
	$id = $this->session->userdata('id');
	$e = new End_number();
	/*
	$tes = new End_number();
	$tes = $e->ambilRincian($id, $periode);
	echo "<br>" . count($tes);
	
	foreach($tes as $t){
	  echo "<br>he" . $t->id;
	}
	*/
	
	$data['judul'] = "Performance";
	$data['main'] = 'ops/rincian_performa';
	$data['rincian'] = $e->ambilRincian($id, $periode);
	$data['recurrings'] = $rec->performaOpsBulanIni($ops);

	$this->load->vars($data);
	$this->load->view('dashboard');
	
    
  }
}
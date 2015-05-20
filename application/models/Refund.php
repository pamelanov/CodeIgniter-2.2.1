<?php
class Refund extends DataMapper {
	
	var $has_one = array(
			'requester' => array(
					'class' => 'invoice',
					'other_field' => 'requested_refund'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_refund'
			)
	);
        
        
        function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	// Optionally, you can add post model initialisation code
	function post_model_init($from_cache = FALSE)
	{
	}
/*        
        function createRefundModel(){
	
		$r = new Refund();
		$i = new Invoice();
		//$t = new Teacher();
		//$o = new Account();
	
		$i->where('no_invoice', $this->no_invoice)->get();
		//$t->where('id', $this->id_guru)->get();
		//$t->where('id', $this->id_sales)->get();
		
		$r->no_invoice = $i->id;
		//$f->id_guru = $t->id_guru;
		$r->tanggal = $this->tanggal;
                //$r->no_invoice = $this->input->post('no_invoice');
        //$r->id_kelas = $this->input->post('id_kelas');
        //$f->isi = $this->isi;
        //$r->hargaPerJam = $this->input->post('hargaPerJam');
                $r->jam_hilang = $this->jam_hilang;
                $r->alasan = $this->alasan;
                $r->action = $this->action;
        //$r->selisih = $this->input->post('selisih');
                $r->id_sales = $this->id_sales;
		
		$r->save_as_new();
	
		return $r;	
	}
*/	
	
         
        function addRefunds(){
		$n = new Refund();
	
		
		$n->id_sales = $this->id_sales;
		$n->no_invoice = $this->no_invoice;
		$n->status = $this->status;
		$n->jam_hilang= $this->jam_hilang;
		$n->action = $this->action;
		$n->alasan = $this->alasan;
                $n->tanggal = $this->tanggal;
	
	
		$n->save_as_new();
	
	return $n;

	}
        
	
          function findOverall() {

        $r = new Refund();
        $r->where('tanggal', $this->tanggal);
        $r->get();

        if (empty($r->tanggal)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    	function hasilSearch1(){
		
		
		$r = new Refund();
		$r->where('tanggal', $this->tanggal);
		$r->get();
		
		
		
		return $r;
	}
	
	function getAllRefunds() {
        
        $r = new Refund();
	$r->get();
	$this->salt = $r->salt;
        
        return $r;
    }
     function updateRefund(){
         $u = new Account();
   
        $u->id_acc = $this->id_acc;
        $u->password = $this->password;
        $u->email = $this->email;
        $u->nama = $this->nama;
        $u->role = $this->role;

    }
    
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
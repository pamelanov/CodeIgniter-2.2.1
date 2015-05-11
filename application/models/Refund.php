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
        
        function createRefundModel(){
	
		$r = new Refund();
		$i = new NoInvoice();
		//$t = new Teacher();
		//$o = new Account();
	
		$i->where('id', $this->no_invoice)->get();
		//$t->where('id', $this->id_guru)->get();
		//$t->where('id', $this->id_sales)->get();
		
		$r->no_invoice = $i->no_invoice;
		//$f->id_guru = $t->id_guru;
		$r->tanggal = $this->input->post('tanggal');
                //$r->no_invoice = $this->input->post('no_invoice');
        //$r->id_kelas = $this->input->post('id_kelas');
        //$r->hargaPerJam = $this->input->post('hargaPerJam');
                $r->jam_hilang = $this->input->post('jam_hilang');
                $r->alasan = $this->input->post('alasan');
                $r->action = $this->input->post('action');
        //$r->selisih = $this->input->post('selisih');
                $r->id_sales = $this->input->post('id_sales');
		
		$r->save_as_new();
	
		return $r;	
	}
	
	
         
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
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
	
	
        function addRefunds(){
		$inc_id = new Refund();
		$id_terakhir = new Refund();
		$inc_id->get();
		$id_terakhir = $inc_id->select_max('id');
		$angka = $inc_id->id + 1;
	
		$n = new Refund();
	
                $n->tanggal = $this->tanggal;
		$n->id_murid = $this->id_murid;
		$n->id_guru = $this->id_guru;
		$n->jamHilang = $this->jamHilang;
		$n->harga = $this->harga;
		$n->alasan= $this->alasan;
	
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
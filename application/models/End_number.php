<?php
class End_number extends DataMapper {
/*
	var $has_one = array(
			'assigner' => array(
					'class' => 'invoice',
					'other_field' => 'assigned_end_number'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_end_number'
			)
	);
	*/
	
	// Optionally, don't include a constructor if you don't need one.
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	// Optionally, you can add post model initialisation code
	function post_model_init($from_cache = FALSE)
	{
	}
	
	function updateStatus(){
		
	$n = new End_number();
	$a = new Account();
	$m = new Student();
	$i = new Invoice();
	
	$a->where('id_acc', $this->id_sales)->get();
	$i->where('no_invoice', $this->no_invoice)->get();
	
	$n->id_sales = $a->id;
	$n->id_invoice = $i->id;
	$n->no = $this->status;
	$n->jam = $this->jam;
	$n->tanggal = $this->tanggal;
	
	$n->save_as_new();
	
	return $n;
	
	}
	
	function summary(){
		
		$s = new Student();
		$s->where('id_murid', $this->id_murid)->get();
		
		$c = new Course();
		$c->where('id_murid', $s->id)->get();
		
		$i = new Invoice();
		$i->where('id_kelas', $c->id)->get();
		
		$e = new End_number();
		$e->where('id_invoice', $i->id);
		$e->order_by('tanggal',  'desc');
		$e->order_by('jam', 'desc');
		$e->get();
		
		foreach($e as $a){
			$k = new Invoice();
			$k->where('id', $a->id_invoice)->get();
			$p = new Course();
			$p->where('id', $k->id_kelas)->get();
			$a->id_kelas = $p->id_kelas;
			$a->id_invoice = $k->no_invoice;
		}
		return $e;
	}
	
	function forTodaySum(){
		$b = new End_number();
		$b->where('tanggal', date("Y-m-d"))->get();
		
		
		$i = new Invoice();
		$c = new Course();
		$s = new Student();
		$a = new Account();
		
		foreach ($b as $e) {
			$i->where('id', $e->id_invoice)->get();
			$c->where('id', $i->id_kelas)->get();
			$s->where('id', $c->id_murid)->get();
			$a->where('id', $e->id_sales)->get();
			
			$e->id_invoice = $i->no_invoice;
			$e->id_murid = $s->id_murid;
			$e->nama_murid = $s->nama;
			$e->id_sales = $a->id_acc;
				
			
		}
				
		return $b;
	}
	
	function forTodaySumFilter($id_sales){
		$b = new End_number();
		$b->where('tanggal', date("Y-m-d"));
		$b->where('id_sales', $id_sales);
		$b->get();
		
		
		$i = new Invoice();
		$c = new Course();
		$s = new Student();
		$a = new Account();
		
		foreach ($b as $e) {
			$i->where('id', $e->id_invoice)->get();
			$c->where('id', $i->id_kelas)->get();
			$s->where('id', $c->id_murid)->get();
			$a->where('id', $e->id_sales)->get();
			
			$e->id_invoice = $i->no_invoice;
			$e->id_murid = $s->id_murid;
			$e->nama_murid = $s->nama;
			$e->id_sales = $a->id_acc;
				
			
		}
				
		return $b;
	}
	
	function ambilRincian($id){
		$a = new Account();
		$a->where('id_acc', $id)->get();
		$n = new End_number();
		$n->where('id_sales', $a->id);
		$n->where('no', 8);
		$n->get();
		
		$e = new End_number();
		$i = new Invoice();
		$s = new Student();
		$c = new Course();
		$array[0] = $e;
		$num = 0;
		if (!empty($n)) {
			foreach($n as $o) {
				if (substr($o->tanggal,0,7) == date("Y-m")) {
					$i->where('id', $o->id_invoice)->get();
					$c->where('id', $i->id_kelas)->get();
					$s->where('id', $c->id_murid)->get();
					$o->id_invoice = $i->no_invoice;
					$o->id_murid = $s->id_murid;
					$o->nama_murid = $s->nama;
					$o->periode_awal = $i->periode_awal;
					$o->periode_akhir = $i->periode_akhir;
					$o->jumlah_jam = $i->jumlah_jam;
					$array[$num] = $o;
					$num++;
				
				}
			}
		
			
		}
		
		return $array;
		
	}
	
	function exists(){
		$b = new End_number();
	
		$b->where('id_invoice', $this->id_invoice);
		$b->where('no', $this->no);
		$b->get();
		
		if($b) {
			return true;
		}
		else {
			return false;
		}
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
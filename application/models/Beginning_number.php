<?php
class Beginning_number extends DataMapper {
	
	 var $default_order_by = array('id' => 'desc');

	var $has_one = array(
			'assigner' => array(
					'class' => 'student',
					'other_field' => 'assigned_beginning_number'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_beginning_number'
			)
	);
	

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
		
	$n = new Beginning_number();
	$a = new Account();
	$m = new Student();
	
	$a->where('id_acc', $this->id_sales)->get();
	$m->where('id_murid', $this->id_murid)->get();
	
	$n->id_murid = $m->id;
	$n->id_sales = $a->id;
	$n->status = $this->status;
	$n->jam= $this->jam;
	$n->tanggal = $this->tanggal;
	
	$n->save_as_new();
	
	return $n;
	
	}
	
	function ambilStatus(){
	$n = new Beginning_number();
	$n->get();
	$this->salt = $n->salt;
	return $n;
	}
	
	function summary(){
		$s = new Student();
		$s->where('id_murid', $this->id_murid)->get();
		
		$b = new Beginning_number();
		$b->where('id_murid', $s->id);
		$b->order_by("tanggal", "asc");
		$b->get();
		
		return $b;
	}
	
	function forTodaySum(){
		$b = new Beginning_number();
		$b->where('tanggal', date("Y-m-d"))->get();
		
		$s = new Student();
		$a = new Account();
		
		foreach ($b as $c) {
			$a->where('id', $c->id_sales)->get();
			$s->where('id', $c->id_murid)->get();
			$c->id_murid = $s->id_murid;
			$c->nama_murid = $s->nama;
			$c->id_sales = $a->id_acc;
		}
		
		
		return $b;
	}
	
	function forTodaySumFilter($id_sales){
		$b = new Beginning_number();
		$b->where('tanggal', date("Y-m-d"));
		$b->where('id_sales', $id_sales);
		$b->get();
		
		$s = new Student();
		$a = new Account();
		
		foreach ($b as $c) {
			$a->where('id', $c->id_sales)->get();
			$s->where('id', $c->id_murid)->get();
			$c->id_murid = $s->id_murid;
			$c->nama_murid = $s->nama;
			$c->id_sales = $a->id_acc;
		}
		
		
		return $b;
	}
	/*
	function exists($n){
		$b = new Beginning_number();
		$s = new Student();
		$s->where('id_murid', $n->id_murid)->get();
		$b->where('status', $n->status);
		$b->where('id_murid', $s->id);
		$b->get();
		
		if (!empty($b)) return true;
			else return false;
	}
	
	function retrieve($n) {
		$b = new Beginning_number();
		$s = new Student();
		$s->where('id_murid', $n->id_murid)->get();
		$b->where('status', $n->status);
		$b->where('id_murid', $s->id);
		$b->get();
		
		return $b;
	}*/
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
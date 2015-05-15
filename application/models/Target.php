<?php
class Target extends DataMapper {
	
	var $has_one = array(
			'creator' => array(
					'class' => 'account',
					'other_field' => 'created_target'
			),
			'assigner' => array(
					'class' => 'account',
					'other_field' => 'assigned_target'
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
	
	
	function rank(){
		$t = new Target();
		$a = new Account();
		$t->where('periode', date("Y-m"));
		$t->get();
		$t->order_by("actual", "desc");
		
		foreach($t as $b) {
			$a->where('id', $b->id_sales)->get();
			$b->id_sales = $a->id_acc;
		}
		
		return $t;
		
	}
	
	function valid() {
	
		$a = new Account();
		$b = new Account();
		$a->where('id_acc', $this->id_sales)->get();
		$b->where('id_acc', $this->id_supervisor)->get();
		
		if (!empty($a) && !empty($b)) return true;
		else return false;
	}
	
	
	function createTarget(){
	
	$n = new Target();
	$a = new Account();
	$b = new Account();
	
	$a->where('id_acc', $this->id_sales)->get();
	$b->where('id_acc', $this->id_supervisor)->get();
	
	$n->id_sales = $a->id_acc;
        $n->periode = $this->periode;
        $n->id_supervisor = $b->id_acc;
        $n->target = $this->target;
	

	$n->save_as_new();
	
	return $n;
	
	}
	
	function hasilSearch(){
		$a = new Account();
		$a->where('id_acc', $this->id_sales)->get();
		
		$o = new Target();
		$o->where('id_sales', $a->id);
		$o->where('periode', $this->periode);
		$o->get();
		
		return $o;
	}
	
	function updateTarget(){
		$n = new Target();
		$n->get();
		$array = array('id_sales' => $this->id_sales, 'periode' => $this->periode);
		// $n->where('id_sales', $this->id_sales);
		$n->where($array)->get();
		
		$n->update('target', $this->target);
		return $n;
	}
	function findTarget(){
		$a = new Account();
		$a->where('id_acc', $this->id_sales)->get();
		$t = new Target();
		$t->where('id_sales', $a->id);
		$t->where('periode', $this->periode);
		$t->get();
	
		if (empty($t->id_sales)) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	function addActual(){
		$t = new Target();
		$a = new Account();
		$i = new Invoice();
		$c = new Course();
		$e = new End_number();
		
		$e->select_max('id');
		$e->get();
		
		$i->where('id', $e->id_invoice)->get();
		
		$a->where('id_acc', $this->session->userdata('id'))->get();
		$t->where('id_sales', $a->id)->get();
		$t->actual = $t->actual + $i->jumlah_jam;
		
		return $t;
	}
	
	function ambilPerforma($id_sales){
		
		$t = new Target();
		$a = new Account();
		$a->where('id_acc', $id_sales)->get();
		$t->where('id_sales', $a->id);
		$t->where('periode', date("Y-m"));
		$t->get();
		
		return $t;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
<?php
class Target extends DataMapper {
	/*
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
	*/
	// Optionally, don't include a constructor if you don't need one.
	
	var $validation = array(
        'id_supervisor' => array(
            'label' => 'id_supervisor',
            'rules' => array('required', 'trim')
        ),
        'id_sales' => array(
            'label' => 'id_sales',
            'rules' => array('required', 'trim')
        ),
	);
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	// Optionally, you can add post model initialisation code
	function post_model_init($from_cache = FALSE)
	{
	}
	
	
	function rank($periode){
		$t = new Target();
		$a = new Account();
		$t->where('periode', $periode);
		$t->order_by("actual", "desc");
		$t->get();
		
		
		foreach($t as $b) {
			$a->where('id', $b->id_sales)->get();
			$b->id_sales = $a->id_acc;
		}
		
		
		return $t;
		
	}
	
	function rankFiltered(){
		$t = new Target();
		$a = new Account();
		$t->where('periode', $this->periode);
		$t->order_by("actual", "desc");
		$t->get();
		
		
		foreach($t as $b) {
			$a->where('id', $b->id_sales)->get();
			$b->id_sales = $a->id_acc;
		}
		
		
		return $t;
		
	}
	
	
	function valid() {
	
		$a = new Account();
		$b = new Account();
		$a->where('id', $this->id_sales)->get();
		$b->where('id', $this->id_supervisor)->get();
		
		if (!empty($a) && !empty($b)) return true;
		else return false;
	}
	

	
	function notExists(){
		$a = new Account();
		$t = new Target();
		$a->where('id', $this->id_sales)->get();
		$t->where('id_sales', $a->id);
		$t->where('periode', $this->periode);
		$t->get();
		if($t->id == null) {
			return true;
		}
		else {
			return false;
		}
	}
	
	
	
	function createTarget(){
	
	$n = new Target();
	$a = new Account();
	$b = new Account();
	
	$a->where('id_acc', $this->id_sales)->get();
	$b->where('id_acc', $this->id_supervisor)->get();
	
	$n->id_sales = $a->id;
        $n->periode = $this->periode;
        $n->id_supervisor = $b->id;
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
		$o->id_sales = $a->id_acc;
		
		$a->where('id', $o->id_supervisor)->get();
		$o->id_supervisor = $a->id_acc;
		
		return $o;
	}
	
	function updateTarget(){
		$n = new Target();
		$n->get();
		$array = array('id_sales' => $this->id_sales, 'periode' => $this->periode);
		$n->where($array)->get();
		$n->target =  $this->target;
		$n->save();
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
	
	function addActual($id){
		$t = new Target();
		$a = new Account();
		$i = new Invoice();
		$c = new Course();
		$e = new End_number();
		$f = new End_number();
		
		$e->select_max('id');
		$e->get();
		
		$f->where('id', $e->id)->get();
		
		$i->where('id', $f->id_invoice)->get();
		$jam = $i->jumlah_jam;
		
		$a->where('id_acc', $id)->get();
		$t->where('id_sales', $a->id);
		$t->where('periode', date("Y-m"));
		$t->get();
		$t->actual = $t->actual + $jam;
		$t->save();
		
		return $f;
	}
	
	function ambilPerforma($id_sales){
		
		$t = new Target();
		
		$a = new Account();
		$a->where('id_acc', $id_sales)->get();
		
		$t->where('id_sales', $a->id);
		$t->where('periode', $this->periode);
		$t->get();
		
		return $t;
	}
	
	function getSejarahPerforma($id_ops){
		$t = new Target();
		$a = new Account();
		$t->where('id_sales', $id_ops)->get();
		
			foreach($t as $x){
				$a->where('id', $x->id_supervisor)->get();
				$x->id_supervisor = $a->id_acc;
			}
		
		return $t;
	}
	
	function getTotalTarget(){
		$t = new Target();
		$t->where('id_sales', $this->id_sales)->get();
		$totalTarget = 0;
		foreach($t as $target){
			$totalTarget = $totalTarget + $target->target;
		}
		
		return $totalTarget;
	}
	
	function getTotalAccomplished(){
		$t = new Target();
		$t->where('id_sales', $this->id_sales)->get();
		$totalAcc = 0;
		foreach($t as $target){
			$totalAcc = $totalAcc + $target->actual;
		}
		
		return $totalAcc;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
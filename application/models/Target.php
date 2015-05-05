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
		$t->get();
		$t->order_by("actual", "desc");
		
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
		$o = new Target();
		$o->where('id_sales', $this->id_sales);
		$o->where('periode', $this->periode);
		$o->get();
		
		return $o;
	}
	
	function updateTarget(){
		$n = new Target();
		$n->where('id_sales', $this->id_sales);
		$n->where('periode', $this->periode);
		$n->get();
		
		$n->update('target', $this->target);
		return $n;
	}
	function findTarget(){
		$t = new Target();
		$t->where('id_sales', $this->id_sales);
		$t->where('periode', $this->periode);
		$t->get();
	
		if (empty($t->id_sales)) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
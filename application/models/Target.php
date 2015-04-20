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
	
	function createTarget(){
	$inc_id = new Target();
	$id_terakhir = new Target();
	$inc_id->get();
	$id_terakhir = $inc_id->select_max('id');
	$angka = $inc_id->id;
	
	$n = new Target();
	$n->id_sales = $this->id_sales;
        $n->periode = $this->periode;
        $n->id_supervisor = $this->id_supervisor;
        $n->target = $this->target;
	
	if ($angka == 0) {
		$n->id = 1;
	}
	
	else {
		$n->id = $angka+1;
	}	
	
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
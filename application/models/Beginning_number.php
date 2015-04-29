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
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
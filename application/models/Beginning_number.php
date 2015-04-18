<?php
class Beginning_number extends DataMapper {
	
	

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
	$n->where('Id_murid', $this->Id_murid)->get();
	
		/*
	var_dump($n);
	exit;*/
		
	$n->save(array('assigner' => $n->Id_murid,
		 'editor' => $n->Id_sales,
		'No' => $n->No));
	
	
	return true;

	
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
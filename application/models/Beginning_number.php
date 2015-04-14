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
	
	function ambilStatus(){
	$s = new Beginning_number();	    
        $m = new Student();
	$m->where('id_Murid', $this->Id_murid)->get();
	$s->where('id_Murid', $m)->get();
	echo $s->Id_murid;

	return $s;

	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
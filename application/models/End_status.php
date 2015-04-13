<?php
class End_status extends DataMapper {

	var $has_one = array(
			'assigner' => array(
					'class' => 'invoice',
					'other_field' => 'assigned_end_status'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_end_status'
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
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
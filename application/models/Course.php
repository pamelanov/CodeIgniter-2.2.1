<?php
class Course extends DataMapper {

	var $has_many = array(
			'created_invoice' => array(
					'class' => 'invoice',
					'other_field' => 'creator'
			),
			'assigned_recurring_status' => array(
					'class' => 'recurring_status',
					'other_field' => 'assigner'
			)
	);
	
	var $has_one = array(
			'orderer' => array(
					'class' => 'student',
					'other_field' => 'ordered_course'
			),
			'taughtBy' => array(
					'class' => 'teacher',
					'other_field' => 'taught_course'
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
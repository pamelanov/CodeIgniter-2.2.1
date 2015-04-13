<?php
class Student extends DataMapper {

	var $has_one = array(
			'handler' => array(
					'class' => 'account',
					'other_field' => 'handled_student'
			)
	);
	
	var $has_many = array(
			'ordered_engagement' => array(
					'class' => 'engagement',
					'other_field' => 'orderer'
			),
			'gave_feedback' => array(
					'class' => 'feedback',
					'other_field' => 'giver'
			),
			'assigned_beginning_status' => array(
					'class' => 'beginning_status',
					'other_field' => 'assigner'
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
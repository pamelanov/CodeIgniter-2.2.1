<?php
class Teacher extends DataMapper {

	var $has_many = array(
			'taught_course' => array(
					'class' => 'course',
					'other_field' => 'taughtBy'
			),
			'received_feedback' => array(
					'class' => 'student',
					'other_field' => 'receiver'
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
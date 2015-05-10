
<?php
class Recurring_status extends DataMapper {
	
	var $table = 'recurring_statuses';
	
	var $has_one = array(
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_recurring_status'
			),
			'assigner' => array(
					'class' => 'course',
					'other_field' => 'assigned_recurring_status'
			),
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
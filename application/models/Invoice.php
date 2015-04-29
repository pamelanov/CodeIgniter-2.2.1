<?php
class Invoice extends DataMapper {

	var $has_many = array(
			'assigned_end_status' => array(
					'class' => 'end_status',
					'other_field' => 'assigner'
			),
			'requested_refund' => array(
					'class' => 'refund',
					'other_field' => 'requester'
			)
	);
	
	var $has_one = array(
			'creator' => array(
					'class' => 'course',
					'other_field' => 'created_invoice'
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
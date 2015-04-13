<?php
class Account extends DataMapper {
	
	// Establish the relationship between entities
	var $has_many = array(
			'created_target' => array(
					'class' => 'target',
					'other_field' => 'creator'
			),
			'managed_refund' => array(
					'class' => 'refund',
					'other_field' => 'manager'
			),
			'managed_end_status' => array(
					'class' => 'end_status',
					'other_field' => 'manager'
			),
			'managed_beginning_status' => array(
					'class' => 'beginning_status',
					'other_field' => 'manager'
			),
			'handled_student' => array(
					'class' => 'student',
					'other_field' => 'handler'
			),
			'asked_feedback' => array(
					'class' => 'feedback',
					'other_field' => 'handler'
			),
			'managed_recurring_status' => array(
					'class' => 'recurring_status',
					'other_field' => 'manager'
			),
			'assigned_target' => array(
					'class' => 'target',
					'other_field' => 'assigner'
			)
	);	
	
	var $validation = array(
			'Id' => array(
					'label' => 'id',
					'rules' => array('required', 'trim', 'unique', 'min_length' => 3, 'max_length' => 20)
			),
			'Password' => array(
					'label' => 'Password',
					'rules' => array('required', 'trim', 'min_length' => 3)
			),
			'confirm_password' => array( // accessed via $this->confirm_password
					'label' => 'Confirm Password',
					'rules' => array('encrypt', 'matches' => 'password')
			),
			'Email' => array(
					'label' => 'Email Address',
					'rules' => array('required')
			),
			array( // accessed via $this->confirm_email
					'field' => 'confirm_email',
					'label' => 'Confirm Email Address',
					'rules' => array('matches' => 'email')
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
	
	// Validation prepping function to encrypt passwords
	function _encrypt($field) // optional second parameter is not used
	{
		// Don't encrypt an empty string
		if (!empty($this->{$field}))
		{
			// Generate a random salt if empty
			if (empty($this->salt))
			{
				$this->salt = md5(uniqid(rand(), true));
			}
	
			$this->{$field} = sha1($this->salt . $this->{$field});
		}
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
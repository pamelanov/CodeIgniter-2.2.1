<?php
class Student extends DataMapper {

	var $has_one = array(
			'handler' => array(
					'class' => 'account',
					'other_field' => 'handled_student'
			)
	);
	
	var $has_many = array(
			'ordered_course' => array(
					'class' => 'course',
					'other_field' => 'orderer'
			),
			'gave_feedback' => array(
					'class' => 'feedback',
					'other_field' => 'giver'
			),
			'assigned_beginning_number' => array(
					'class' => 'beginning_number',
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
	
	function findStudent(){
		$u = new Student();
		$u->where('id_murid', $this->id_murid)->get();
		$this->salt = $u->salt;

        // Validate and get this user by their property values,
        // this will see the 'encrypt' validation run, encrypting the password with the salt
        $this->validate()->get();
		if (empty($this->id_murid)) {

		return FALSE;
        } else {
		// found something
		return TRUE;
		}	
	}
	
	function hasilSearch(){
		$o = new Student();
		$o->where('id_murid', $this->id_murid)->get();
		$this->salt = $o->salt;
		
		return $o;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
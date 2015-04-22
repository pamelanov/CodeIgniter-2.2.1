<?php
class Feedback extends DataMapper {

	var $has_one = array(
			'handler' => array(
					'class' => 'account',
					'other_field' => 'asked_feedback'
			),
			'giver' => array(
					'class' => 'student',
					'other_field' => 'gave_feedback'
			),
			'receiver' => array(
					'class' => 'teacher',
					'other_field' => 'received_feedback'
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
	
	function getAllFeedbacks() {
	
		$f = new Feedback();
		$f->get();
		$this->salt = $f->salt;
	
		return $f;
	}
	

         function updateFeedback(){
         $f = new Feedback();
   
        $f->id_acc = $this->id_acc;
        $f->password = $this->password;
        $f->email = $this->email;
        $f->nama = $this->nama;
        $f->role = $this->role;

    }
        
	
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
<?php
class Refund extends DataMapper {
	
	var $has_one = array(
			'requester' => array(
					'class' => 'invoice',
					'other_field' => 'requested_refund'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_refund'
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
	
	function getAllRefunds() {
        
        $r = new Refund();
	$r->get();
	$this->salt = $r->salt;
        
        return $r;
    }
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
<?php
class Beginning_number extends DataMapper {
	
	 var $default_order_by = array('id' => 'desc');

	var $has_one = array(
			'assigner' => array(
					'class' => 'student',
					'other_field' => 'assigned_beginning_number'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_beginning_number'
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
	
	function updateStatus(){
	$inc_id = new Beginning_number();
	$inc_id->select_max('id');
	$id_terakhir = $inc_id->id;
	
	$n = new Beginning_number();
	/*
	$n->id_murid = "33333";
	$n->id_sales = "DY";
	$n->no = "6";
	$n->jam= "2330";
	$n->tanggal = "2009-09-08";
	$n->id = $id_terakhir++;
	
	$n->save();
	*/
		
	$n->save(array('assigner' => "33333",
		       //$this->id_murid,
		 'manager' => "DY",
		 //$this->id_sales,
		'no' => "6",
		// $this->no,
		'jam' => "2330",
		// $this->jam,
		'tanggal' => "2012-09-08",
		//$this->tanggal,
		'id' => $id_terakhir++
		));
	return true;
	}
	
	function ambilStatus(){
	$n = new Beginning_number();
	$n->get();
	$this->salt = $n->salt;
	return $n;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
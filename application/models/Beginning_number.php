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
	$id_terakhir = new Beginning_number();
	$inc_id->get();
	$id_terakhir = $inc_id->select_max('id');
	$angka = $inc_id->id + 1;
	
	$n = new Beginning_number();
	
	$n->id_murid = $this->id_murid;
	$n->id_sales = $this->id_sales;
	$n->status = $this->status;
	$n->jam= $this->jam;
	$n->tanggal = $this->tanggal;
	$n->id = $angka;
	
	
	$n->save_as_new();
	
	return $n;
	
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
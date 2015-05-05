<?php
class End_number extends DataMapper {

	var $has_one = array(
			'assigner' => array(
					'class' => 'invoice',
					'other_field' => 'assigned_end_number'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_end_number'
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
		
	$n = new End_number();
	$a = new Account();
	$m = new Student();
	$i = new Invoice();
	
	$a->where('id_acc', $this->id_sales)->get();
	$i->where('no_invoice', $this->no_invoice)->get();
	
	$n->id_sales = $a->id;
	$n->id_invoice = $i->id;
	$n->no = $this->status;
	$n->jam = $this->jam;
	$n->tanggal = $this->tanggal;
	
	$n->save_as_new();
	
	return $n;
	
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
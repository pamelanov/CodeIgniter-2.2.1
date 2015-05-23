<?php
class Invoice extends DataMapper {
/*
	var $has_many = array(
			'assigned_end_number' => array(
					'class' => 'end_number',
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
*/	
	// Optionally, don't include a constructor if you don't need one.
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	// Optionally, you can add post model initialisation code
	function post_model_init($from_cache = FALSE)
	{
	}
	
	function getInvoiceHistory($id_murid){
		$s = new Student();
		$c = new Course();
		$i = new Invoice();
		$s->where('id_murid', $id_murid)->get();
		$c->where('id_murid', $s->id)->get();
		$i->where('id_kelas', $c->id)->get();
		
		return $i;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
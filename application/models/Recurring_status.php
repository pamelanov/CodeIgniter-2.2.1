
<?php
class Recurring_status extends DataMapper {
	
	var $table = 'recurring_statuses';
	/*
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
*/
	var $validation = array(
        'id_kelas' => array(
            'label' => 'id_kelas',
            'rules' => array('required', 'trim')
        ),
        'id_sales' => array(
            'label' => 'id_sales',
            'rules' => array('required', 'trim')
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
	
	function findOverall(){
		
        $r = new Recurring_status();
        $r->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
        $r->get();
        if (empty($r)) {
            return FALSE;
		} else {
            return TRUE;
		}
	}
	
	function ambilRecurringSum(){
	$r = new Recurring_status();
        $r->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
        $r->get();
	$i = new Course();
	$a = new Account();
	//$kosong = new Not_recurring();
	$not_r = new Not_recurring();
	$recur = new Recurring();
	foreach($r as $x){
		$i->where('id', $x->id_kelas)->get();
		$a->where('id', $x->id_sales)->get();
		$x->id_kelas = $i->id_kelas;
		$x->id_sales = $a->id_acc;

		$not_r->where('id_rec_status', $x->id)->get();
		//$not_r->check_last_query();
		
		if (!empty($not_r->alasan)){
				$x->recur = 0;
				$x->alasan = $not_r->alasan;
		}
		else{
			$recur->where('id_rec_status', $x->id)->get();
				$x->recur = 1;
				$x->periode_awal = $recur->periode_awal;
				$x->periode_akhir = $recur->periode_akhir;
				$x->jumlah_jam = $recur->jumlah_jam;
		
		}
		
		
	}
	
        return $r;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>

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
	
	function ambilRecurringSumDesc(){
	$r = new Recurring_status();
        $r->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
	$r->order_by('tanggal', 'desc');
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
	
	function ambilRecurringSumAsc(){
	$r = new Recurring_status();
        $r->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
	$r->order_by('tanggal', 'asc');
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
	
	function performaOpsBulanIni($ops){
	
		$r = new Recurring();
		$rec = new Recurring_status();
	
		$rec->where('id_sales', $ops->id)->get();
		
		foreach($rec as $x){
			if(substr($x->tanggal,0,7) == date("Y-m")) {
				$x->flag = "true";
			}
			else{
				$x->flag = "false";
			}
		}	
		
		$angka = 0;
		foreach($rec as $y){
			if($y->flag == "true") {
				$array[$y->id] = $r->where('id_rec_status', $y->id)->get();
				$angka++;
			}	
		}
		
		$num = 0;

		/*
		foreach($array as $agk => $agk_value){
			echo $agk_value->jumlah_jam . "<br>";
		}
		*/
	
		foreach($r as $z){
			$rs = new Recurring_status();
			$rs->where('id', $z->id_rec_status)->get();
			$z->id_kelas = $rs->id_kelas;
			$z->tanggal = $rs->tanggal;
		}
	
		return $r;
	}
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
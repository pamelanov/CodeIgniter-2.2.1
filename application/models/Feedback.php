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
	
<<<<<<< HEAD
	function addFeedbacks(){
		$inc_id = new Feedback();
		$id_terakhir = new Feedback();
		$inc_id->get();
		$id_terakhir = $inc_id->select_max('id');
		$angka = $inc_id->id + 1;
	
		$n = new Feedback();
	
		$n->id_murid = $this->id_murid;
		$n->id_guru = $this->id_guru;
		$n->id_sales = $this->id_sales;
		$n->isi = $this->isi;
		$n->status = $this->status;
		$n->rating= $this->rating;
		$n->tanggal = $this->tanggal;
		$n->total_skor = $this->total_skor;
		$n->id = $angka;
	
		$n->save_as_new();
	
	return $n;

	}
=======

>>>>>>> punya-yodi
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
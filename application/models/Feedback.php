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
	
	function createFeedbackModel(){
	
		$f = new Feedback();
		$s = new Student();
		$t = new Teacher();
		$o = new Account();
	
		$s->where('id_murid', $this->id_murid)->get();
		$t->where('id_guru', $this->id_guru)->get();
		$o->where('id_sales', $this->id_sales)->get();
		
		$f->id_murid = $s->id;
		$f->id_guru = $t->id;
		$f->tanggal = $this->tanggal;
		$f->rating = $this->rating;
		$f->isi = $this->isi;
		$f->status = $this->status;
		$f->total_skor = $this->total_skor;
		$f->id_sales = $o->id;
		
		$f->save_as_new();
	
		return $f;	
	}
	
	function updateFeedbackModel(){
		$n = new Target();
		$n->where('id_sales', $this->id_sales);
		$n->where('periode', $this->periode);
		$n->get();
	
		$n->update('target', $this->target);
		return $n;
	}
	
	function getAllFeedbacks() {
	
		$f = new Feedback();
		$f->get();
		$this->salt = $f->salt;
	
		return $f;
	}
	

	function addFeedbacks(){
		$n = new Feedback();
	
		$n->id_murid = $this->id_murid;
		$n->id_guru = $this->id_guru;
		$n->id_sales = $this->id_sales;
		$n->isi = $this->isi;
		$n->status = $this->status;
		$n->rating= $this->rating;
		$n->tanggal = $this->tanggal;
		$n->total_skor = $this->total_skor;
		$n->id = $this->id;
	
		$n->save_as_new();
	
	return $n;

	}

   function updateFeedback(){
         $f = new Feedback();
   
        $f->id_acc = $this->id_acc;
        $f->password = $this->password;
        $f->email = $this->email;
        $f->nama = $this->nama;
        $f->role = $this->role;

    }
        
    function findFeedback(){
    	$u = new Feedback();
    	$u->where('id', $this->id);
    	//$u->where('id_guru', $this->id_guru);
    	$u->get();
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
    	$o = new Feedback();
    	$o->where('id', $this->id);
    	//$o->where('id_guru', $this->id_guru);
    	$o->get();
    	$this->salt = $o->salt;
    
    	return $o;
    }
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
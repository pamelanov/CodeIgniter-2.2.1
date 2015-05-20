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
    function __construct($id = NULL) {
        parent::__construct($id);
    }

    // Optionally, you can add post model initialisation code
    function post_model_init($from_cache = FALSE) {
        
    }

    function createFeedbackModel() {
        $f = new Feedback();
        $s = new Student();
        $t = new Teacher();
        $o = new Account();

        $s->where('id_murid', $this->id_murid)->get();
        $t->where('id_guru', $this->id_guru)->get();
        $o->where('id_acc', $this->id_sales)->get();

        $f->id_murid = $s->id;
        $f->id_guru = $t->id;
        $f->tanggal = $this->tanggal;
        $f->rating = $this->rating;
        $f->isi = $this->isi;
        $f->status = '1';
        $f->total_skor = $f->hitungTotalSkor();
        $f->id_sales = $o->id;

        $f->save_as_new();

        $f1 = new Feedback();
        $f1->where('id_murid', $f->id_murid);
        $f1->where('id_guru', $f->id_guru);
        $f1->get();
        foreach ($f1 as $list) {
            $list->total_skor = $f->total_skor;
            $list->save();
        }

        return $f;
        return $f1;
    }

    function hitungTotalSkor() {
        $f1 = new Feedback();
        $f2 = new Feedback();
        $rating = 0;
        $f1->where('id_guru', $this->id_guru)->get();
        $f2->rating = $this->rating;

        foreach ($f1 as $list) {
            $rating += $list->rating;
        }
        //$f1->total_skor = $this->rating + $f2->rating;
        $rating = $rating + $f2->rating;
        return $rating;
    }

    function findOverall() {

        $f = new Feedback();
        $f->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
        
        $f->get();
        if (empty($f)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function hasilSearch1() {


        $f = new Feedback();
        $f->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
       
        $f->get();


        return $f;
    }

    function getAllFeedbacks() {

        $f = new Feedback();
        $f->get();
        //$this->salt = $f->salt;
        $s = new Student();
        $t = new Teacher();
        $o = new Account();

        foreach ($f as $list) {
            $s->where('id', $f->id_murid)->get();
            $t->where('id', $f->id_guru)->get();
            $o->where('id', $f->id_sales)->get();
            $list->id_murid = $s->nama;
            $list->id_guru = $t->nama;
            $list->id_sales = $o->nama;
        }

        return $f;
    }

    function findFeedback() {
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

    function hasilSearch() {
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
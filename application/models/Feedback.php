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

    function findFeedbackSum() {
        $f = new Feedback();
        $f->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
        $f->where('id_sales', $this->id_sales);
        $f->get();
        if (empty($f)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function ambilFeedbackSum() {
        $f = new Feedback();
        $a = new Account();
        $t = new Teacher();
        $s = new Student();
        $f->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
        $f->where('id_sales', $this->id_sales);
        $f->get();

        foreach ($f as $z) {
            $a->where('id', $z->id_sales)->get();
            $t->where('id', $z->id_guru)->get();
            $s->where('id', $z->id_murid)->get();

            $z->id_sales = $a->id_acc;
            $z->id_guru = $t->id_guru;
            $z->id_murid = $s->id_murid;
        }


        return $f;
    }

    function hasilSearch1() {


        $f = new Feedback();
        $a = new Account();
        $t = new Teacher();
        $s = new Student();

        $f->where_between('tanggal', "'" . $this->tanggal_awal . "'", "'" . $this->tanggal_akhir . "'");
        $f->get();

        foreach ($f as $z) {
            $a->where('id', $z->id_sales)->get();
            $t->where('id', $z->id_guru)->get();
            $s->where('id', $z->id_murid)->get();

            $z->id_sales = $a->id_acc;
            $z->id_guru = $t->id_guru;
            $z->id_murid = $s->id_murid;
        }

        return $f;
    }

    function hasilSearch2() {


        $f = new Feedback();
        $a = new Account();

        $t = new Teacher();
        $s = new Student();
        $f->where('id_sales', $this->id_sales);
        $f->get();

        foreach ($f as $z) {
            $a->where('id', $z->id_sales)->get();
            $t->where('id', $z->id_guru)->get();
            $s->where('id', $z->id_murid)->get();

            $z->id_sales = $a->id_acc;
            $z->id_guru = $t->id_guru;
            $z->id_murid = $s->id_murid;

            return $f;
        }
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
        $o->get();

        $s = new Student();
        $t = new Teacher();
        $s->where('id', $o->id_murid)->get();
        $t->where('id', $o->id_guru)->get();

        $o->id_murid = $s->id_murid;
        $o->id_guru = $t->id_guru;

        return $o;
    }

    function getCounts() {
        $f = new Feedback();
        $f->count();
        $f->group_by('id_sales');
        $f->get();

        $a = new Account();
        foreach ($f as $x) {
            $a->where('id', $x->id_sales)->get();
            $x->id_acc = $a->id_acc;
        }

        return $f;
    }

}

/* End of file name.php */
/* Location: ./application/models/name.php */
?>
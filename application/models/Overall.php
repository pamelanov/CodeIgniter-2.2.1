<?php

class Overall extends DataMapper {

    // Optionally, don't include a constructor if you don't need one.
    function __construct($id = NULL) {
        parent::__construct($id);
    }

    // Optionally, you can add post model initialisation code
    function post_model_init($from_cache = FALSE) {
        
    }

    function rank() {
        $t = new Target();
        $a = new Account();
        $t->where('periode', date("Y-m"));
        $t->order_by("actual", "desc");
        $t->get();


        foreach ($t as $b) {
            $a->where('id', $b->id_sales)->get();
            $b->id_sales = $a->id_acc;
        }


        return $t;
    }

    function valid() {

        $a = new Account();
        $b = new Account();
        $a->where('id_acc', $this->id_sales)->get();
        $b->where('id_acc', $this->id_supervisor)->get();

        if (!empty($a) && !empty($b))
            return true;
        else
            return false;
    }

    function notExists() {
        $a = new Account();
        $t = new Target();
        $a->where('id_acc', $this->id_sales)->get();
        $t->where('id_sales', $a->id);
        $t->where('periode', $this->periode);
        $t->get();
        if ($t->id == null) {
            return true;
        } else {
            return false;
        }
    }

    function createTarget() {

        $n = new Target();
        $a = new Account();
        $b = new Account();

        $a->where('id_acc', $this->id_sales)->get();
        $b->where('id_acc', $this->id_supervisor)->get();

        $n->id_sales = $a->id;
        $n->periode = $this->periode;
        $n->id_supervisor = $b->id;
        $n->target = $this->target;


        $n->save_as_new();

        return $n;
    }

    function hasilSearch() {


        $o = new Overall();
        $o->where('tanggal', $this->tanggal);
        $o->get();

        return $o;
    }

    function updateTarget() {
        $n = new Target();
        $n->get();
        $array = array('id_sales' => $this->id_sales, 'periode' => $this->periode);
        // $n->where('id_sales', $this->id_sales);
        $n->where($array)->get();

        $n->update('target', $this->target);
        return $n;
    }

    function findOverall() {

        $o = new Overall();
        $o->where('tanggal', $this->tanggal);
        $o->get();

        if (empty($o->tanggal)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function addActual($id) {
        $t = new Target();
        $a = new Account();
        $i = new Invoice();
        $c = new Course();
        $e = new End_number();
        $f = new End_number();

        $e->select_max('id');
        $e->get();

        $f->where('id', $e->id)->get();

        $i->where('id', $f->id_invoice)->get();
        $jam = $i->jumlah_jam;

        $a->where('id_acc', $id)->get();
        $t->where('id_sales', $a->id);
        $t->where('periode', date("Y-m"));
        $t->get();
        $t->actual = $t->actual + $jam;
        $t->save();

        return $f;
    }

    function getAllOps() {
        $o = new Overall();
        $o->where('role', 2)->get();

        return $o;
    }

    function ambilPerforma($id_sales) {

        $t = new Target();
        $a = new Account();
        $a->where('id_acc', $id_sales)->get();
        $t->where('id_sales', $a->id);
        $t->where('periode', date("Y-m"));
        $t->get();

        return $t;
    }

}

/* End of file name.php */
/* Location: ./application/models/name.php */
?>
<?php

class Download extends Ci_Controller {

    function __construct() {
        parent::__construct();
        //session_start();

        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

    function download_feedbacks() {
        $this->load->helper('download');

        $f = new Feedback();
        // load all users
        $feedbacks = $f->getAllFeedbacks();
        // Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'feedback_' . date("Ymd_His") . '.csv';
        $feedbacks->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);

        /* $r = new Feedback();

          $data['feedback'] = $r->getAllFeedbacks();
          $data['feedback']->csv_export('/tmp/output.csv');
          /* $export = "";
          foreach($data['feedback'] as $row){
          $export .= $row->id_murid.",";
          $export .= $row->id_guru.",";
          $export .= $row->id_sales;

          $export .= "<br>";
          }
          echo $export;
         *///$this->load->vars($data);
        //$this->load->view('dashboard');
    }

    function download_refunds() {
        $this->load->helper('download');

        $r = new Refund();
        // load all users
        $refunds = $r->getAllRefunds();
        // Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'refund_' . date("Ymd_His") . '.csv';
        $refunds->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);

        /* $r = new Feedback();

          $data['feedback'] = $r->getAllFeedbacks();
          $data['feedback']->csv_export('/tmp/output.csv');
          /* $export = "";
          foreach($data['feedback'] as $row){
          $export .= $row->id_murid.",";
          $export .= $row->id_guru.",";
          $export .= $row->id_sales;

          $export .= "<br>";
          }
          echo $export;
         *///$this->load->vars($data);
        //$this->load->view('dashboard');
    }

    function download_overall() {
        $this->load->helper('download');

        $r = new Refund();
        $refunds = $r->getAllRefunds();

        $f = new Feedback();
        $feedbacks = $f->getAllFeedbacks();

// Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filenameRefund = 'overallSummaryRefunds_' . date("Ymd_His") . '.csv';
        $filenameFeedback = 'overallSummaryFeedbacks_' . date("Ymd_His") . '.csv';

        $refunds->csv_export($path . $filenameRefund);
        $feedbacks->csv_export($path . $filenameFeedback);

        $data1 = file_get_contents($path . $filenameRefund); // Read the file's contents
        $data2 = file_get_contents($path . $filenameFeedback); // Read the file's contents

        force_download($filenameRefund, $data1);
        force_download($filenameFeedback, $data2);



        /* $r = new Feedback();

          $data['feedback'] = $r->getAllFeedbacks();
          $data['feedback']->csv_export('/tmp/output.csv');
          /* $export = "";
          foreach($data['feedback'] as $row){
          $export .= $row->id_murid.",";
          $export .= $row->id_guru.",";
          $export .= $row->id_sales;

          $export .= "<br>";
          }
          echo $export;
         *///$this->load->vars($data);
        //$this->load->view('dashboard');
    }

    function download_Ofeedbacks($tanggal_awal, $tanggal_akhir) {
        $this->load->helper('download');

        $f = new Feedback();

        $f->tanggal_awal = $tanggal_awal;
        $f->tanggal_akhir = $tanggal_akhir;

        // load all users
        $feedbacks = $f->hasilSearch1();


        // Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'feedback_' . date("Ymd_His") . '.csv';
        $feedbacks->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }

    function download_Sfeedbacks($tanggal_awal, $tanggal_akhir, $id_sales) {
        $this->load->helper('download');

        $f = new Feedback();

        $f->tanggal_awal = $tanggal_awal;
        $f->tanggal_akhir = $tanggal_akhir;
        $f->id_sales = $id_sales;
        if ($f->id_sales == 'semua') {
            $feedbacks = $f->hasilSearch1();
        } else {
            if ($f->findFeedbackSum()) {
                $feedbacks = $f->ambilFeedbackSum();
            }
        }


        // Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'feedback_' . date("Ymd_His") . '.csv';
        $feedbacks->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }

    
    function download_Orec($tanggal_awal, $tanggal_akhir){
        $this->load->helper('download');
        
        $e = new Recurring_status();
        $e->tanggal_awal = $tanggal_awal;
        $e->tanggal_akhir = $tanggal_akhir;
        $recurrings = $e->ambilRecurringSum();
        $path = "assets/exports/";
        $filename = 'recurring_' . date("Ymd_His") . '.csv';
        $recurrings->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }

    function download_OPfeedbacks() {
        $this->load->helper('download');

        $f = new Feedback();
        $u = new Account();
	$s = new Student();
	$t = new Teacher();
        
        $u->where('id_acc', $this->session->userdata('id'))->get();
        $f->where('id_sales', $u->id)->get();
	
	foreach ($f as $x){
		$s->where('id', $x->id_murid)->get();
		$t->where('id', $x->id_guru)->get();
		$x->id_murid = $s->id_murid;
		$x->id_guru = $t->id_guru;
	}

        // Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'feedback_' . date("Ymd_His") . '.csv';
        $f->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }

    function download_Orefunds($tanggal_awal, $tanggal_akhir) {
        $this->load->helper('download');

        $r = new Refund();
        $r->tanggal_awal = $tanggal_awal;
        $r->tanggal_akhir = $tanggal_akhir;
        // load all users
        $refunds = $r->ambilRefundSum();
        // Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'refund_' . date("Ymd_His") . '.csv';
        $refunds->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }
    
    function downloadPerformaBulanIni(){
                if ($this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();
        $urut = new Target();
        $urut = $t->rank();
        
        $path = "assets/exports/";
        $filename = 'performa_' . date("Ymd_His") . '.csv';
        $urut->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }
    
    function downloadPerformaBulan($periode){
        $t = new Target();
        $filtered = new Target();
        $t->periode = $periode;
        $filtered = $t->rankFiltered();
        
        $path = "assets/exports/";
        $filename = 'performa_' . $periode . '_' . date("Ymd_His") . '.csv';
        $filtered->csv_export($path . $filename);
        $data = file_get_contents($path . $filename); // Read the file's contents
        force_download($filename, $data);
    }

}

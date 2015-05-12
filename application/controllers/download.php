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
        $o = new overall();
        $r = new Refund();
        // load all users
        $refunds = $r->getAllRefunds();
        // Output $u->all to /tmp/output.csv, using all database fields.
        $f = new Feedback();
        // load all users
        $feedbacks = $f->getAllFeedbacks();
        $overall = $refunds . $feedbacks;

// Output $u->all to /tmp/output.csv, using all database fields.
        $path = "assets/exports/";
        $filename = 'overallSummary_' . date("Ymd_His") . '.csv';
    
        $overall->csv_export($path . $filename);
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

}

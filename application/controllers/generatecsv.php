<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Generatecsv extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('csv');
    }
 
    //nama variabel untuk tabel
    private $tabel_pegawai      =   "pegawai";
 
    function index()
    {
 
    }
 
    //sampel create CSV file from MySQL
    function export_csv_pegawai()
    {
        $query  =   $this->db->query("SELECT * FROM ".$this->tabel_pegawai);
        $num    =   $query->num_fields();
        $var    =   array();
        $i      =   1;
        $fname  =   "";
        while ($i <= $num)
        {
            $test   =   $i;
            $value  =   $this->input->post($test);
            if($value != '')
            {
                $fname = $fname." ".$value;
                array_push($var, $value);
            }
            $i++;
        }
        $fname  =   trim($fname);
        $fname  =   str_replace(' ', ';', $fname);
 
        $this->db->select($fname);
        $quer  =   $this->db->get($this->tabel_pegawai);
        query_to_csv($quer,TRUE,'Pegawai_'.  date('dMy').'.csv');
    }
}
?>
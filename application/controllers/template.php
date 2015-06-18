<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['judul'] = "Halaman Depan";
        $data['main'] = "home/login";
        $data['aktif'] = 'class="active"';
        $data['errorLogin'] = "";
        $this->load->view('home/template', $data);
    }
    
    public function login() {
        $data['judul'] = "Halaman Depan";
        $data['main'] = "home/login";
        $data['aktif'] = 'class="active"';
        $this->load->view('home/template', $data);
    }
   

    function ceklogin() {
        // Create user object
        $u = new Account();

        // Put user supplied data into user object
        // (no need to validate the post variables in the controller,
        // if you've set your DataMapper models up with validation rules)
        $u->id_acc = $this->input->post('id');
        $u->password = md5($this->input->post('password'));

        // Attempt to log user in with the data they supplied, using the login function setup in the User model
        // You might want to have a quick look at that login function up the top of this page to see how it authenticates the user
        if ($u->login()) {
            $u->get_by_id_acc($this->input->post('id'));
            
            $data['role'] = $u->role;
            $data['id'] = $u->id_acc;
            $data['nama'] = $u->nama;
            $this->session->set_userdata($data);
            redirect('dashboard', 'refresh');
        } else {
            $data['judul'] = "Halaman Login";
            $data['main'] = "home/error_login";
            $this->session->set_userdata($data);
            $this->load->view('home/template', $data);
        }
    }

    function logout() {
        $sesi_items = array('role' => '');
        $this->session->unset_userdata($sesi_items);
        $this->session->set_flashdata('result', 'Anda wes logout');
        redirect('template');
    }

}

?>

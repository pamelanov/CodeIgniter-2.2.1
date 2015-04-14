<?php

class Dashboard extends Ci_Controller {

    function __construct() {
        parent::__construct();

       

        /* Jika session bukan 1
          if($_SESSION['role'] != 1) {
          redirect('template/login', 'refresh');
          }
         */
    }

    function index() {
        $data['judul'] = "Dashboard Home";
        $data['main'] = 'admin/home';
        $this->load->vars($data);
        $this->load->view('admin/dashboard');
    }

    function users() {
        $data['judul'] = "Manage Users";
        $data['main'] = 'admin/user_home';
        $data['admins'] = $this->madmins->getAllUsers();
        $this->load->vars($data);
        $this->load->view('admin/dashboard');
    }

    
    
    function summary() {
        $data['judul'] = "Summary List";
        $data['main'] = 'admin/summary';
        $this->load->vars($data);
        $this->load->view('admin/dashboard');
    }

    function create() {
        $this->load->library('encrypt');
        if ($this->input->post('username')) {
            $this->madmins->addUser();
            $this->session->set_flashdata('message', 'User created');
            redirect('admin/dashboard/users', 'refresh');
        } else {
            $data['judul'] = "Create User";
            $data['main'] = 'admin/user_create';
            $this->load->vars($data);
            $this->load->view('admin/dashboard');
        }
    }

    function edit($id = 0) {
        $this->load->library('encrypt');
        if ($this->input->post('username')) {
            $this->madmins->updateUser();
            $this->session->set_flashdata('message', 'User updated');
            redirect('admin/dashboard/users', 'refresh');
        } else {
            //$id = $this->uri->segment(4);
            $data['judul'] = "Edit User";
            $data['main'] = 'admin/user_edit';
            $data['admin'] = $this->madmins->getUser($id);
            $this->load->vars($data);
            $this->load->view('admin/dashboard');
        }
    }

    function delete($id) {
        $this->madmins->deleteUser($id);
        $this->session->set_flashdata('message', 'User deleted');
        redirect('admin/dashboard/users', 'refresh');
    }

    function logout() {
        unset($_SESSION['userid']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('template/login', 'refresh');
    }

}

?>
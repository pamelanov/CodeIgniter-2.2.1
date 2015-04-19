<?php

class Dashboard extends Ci_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('template/login', 'refresh');
        }
    }

    function index() {
        $r = new Refund();
        $data['judul'] = "Today's Summary";
        $data['main'] = 'home';
        $data['admins'] = $r->getAllRefunds();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createData() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create";
        $data['main'] = 'create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createStatus() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Status";
        $data['main'] = 'ops/createStatus';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createRefund() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Refund";
        $data['main'] = 'ops/refund_create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createFeedback() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Create Feedback";
        $data['main'] = 'ops/feedback_create';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function refunds() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $r = new Refund();

        $data['judul'] = "Refund Summary";
        $data['main'] = 'ops/refund_home';
        $data['admins'] = $r->getAllRefunds();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function feedbacks() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $r = new Feedback();

        $data['judul'] = "Feedback Summary";
        $data['main'] = 'ops/feedback_home';
        $data['feedback'] = $r->getAllFeedbacks();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function users() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $o = new Account();

        $data['judul'] = "Manage Users";
        $data['main'] = 'admin/user_home';
        $data['admins'] = $o->getAllAccounts();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function summary() {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $data['judul'] = "Summary";
        $data['main'] = 'summary';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

    function createUser() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
       $data['judul'] = "Create User";
            $data['main'] = 'admin/user_create';
            $this->load->vars($data);
            $this->load->view('dashboard');
    }

    function createAccount() {
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $u = new Account();
        $u->id_acc = $this->input->post('id_acc');
        $u->password = $this->input->post('password');

        $u->email = $this->input->post('email');
        $u->nama = $this->input->post('nama');
        $u->no_telp = $this->input->post('no_telp');
        $u->role = $this->input->post('role');
        if ($u->addAccount()) {

            $this->session->set_flashdata('message', 'User created');
            redirect('dashboard/users', 'refresh');
        } else {
            $data['judul'] = "Create User";
            $data['main'] = 'admin/user_create';
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
    }

    function edit($id = 0) {
        $this->load->library('encrypt');
        if ($this->input->post('username')) {
            $this->madmins->updateUser();
            $this->session->set_flashdata('message', 'User updated');
            redirect('dashboard/users', 'refresh');
        } else {
            //$id = $this->uri->segment(4);
            $data['judul'] = "Edit User";
            $data['main'] = 'admin/user_edit';
            $data['admin'] = $this->madmins->getUser($id);
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
    }

    function delete($id) {
        $this->madmins->deleteUser($id);
        $this->session->set_flashdata('message', 'User deleted');
        redirect('dashboard/users', 'refresh');
    }

    function logout() {
        unset($_SESSION['userid']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('template/login', 'refresh');
    }





    function performance() {
        if ($this->session->userdata('role') != 2) {
            redirect('dashboard', 'refresh');
        }
        $t = new Target();

        $data['judul'] = "Performance";
        $data['main'] = 'ops/performance_ops';
        $data['target'] = $t->rank();
        $this->load->vars($data);
        $this->load->view('dashboard');
    }

}

?>
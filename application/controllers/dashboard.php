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
       
        $a = new Account();
        $a = $u->addAccount();
        echo $a->id_acc;
        echo "<br/>";
        echo $a->email;
    }

    function edit($id = 0) {
         if ($this->session->userdata('role') != 1) {
            redirect('dashboard', 'refresh');
        }
        $this->load->library('encrypt');
        $u = new Account();
        $u->id_acc = $this->input->post('id_acc');
        $u->password = $this->input->post('password');

        $u->email = $this->input->post('email');
        $u->nama = $this->input->post('nama');
        $u->no_telp = $this->input->post('no_telp');
        $u->role = $this->input->post('role');
        if ($u->updateAccount()) {

            $this->session->set_flashdata('message', 'User updated');
            redirect('dashboard/users', 'refresh');
        } else {
            //$id = $this->uri->segment(4);
            $data['judul'] = "Edit User";
            $data['main'] = 'admin/user_edit';
            $data['admin'] = $u->get();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
    }

    function editRefund($id = 0) {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $this->load->library('encrypt');
        $r = new Refund();
        $r->id_acc = $this->input->post('id_acc');
        $r->password = $this->input->post('password');

        $r->email = $this->input->post('email');
        $r->nama = $this->input->post('nama');
        $r->no_telp = $this->input->post('no_telp');
        $r->role = $this->input->post('role');
        if ($r->updateRefund()) {

            $this->session->set_flashdata('message', 'User updated');
            redirect('dashboard/refunds', 'refresh');
        } else {
            //$id = $this->uri->segment(4);
            $data['judul'] = "Edit Refund";
            $data['main'] = 'ops/refund_edit';
            $data['refund'] = $r->get($id);
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
    }

    function editFeedback($id = 0) {
        if ($this->session->userdata('role') != 2 && $this->session->userdata('role') != 3) {
            redirect('dashboard', 'refresh');
        }
        $this->load->library('encrypt');
        $f = new Feedback();
        $f->id_acc = $this->input->post('id_acc');
        $f->password = $this->input->post('password');

        $f->email = $this->input->post('email');
        $f->nama = $this->input->post('nama');
        $f->no_telp = $this->input->post('no_telp');
        $f->role = $this->input->post('role');
        if ($f->updateFeedback()) {

            $this->session->set_flashdata('message', 'User updated');
            redirect('dashboard/feedbacks', 'refresh');
        } else {
            //$id = $this->uri->segment(4);
            $data['judul'] = "Edit Refund";
            $data['main'] = 'ops/feedback_edit';
            $data['feedback'] = $f->get($id);
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
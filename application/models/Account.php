<?php

class Account extends DataMapper {

    // Establish the relationship between entities

    var $has_many = array('created_target' => array(
            'class' => 'target',
            'other_field' => 'creator'
        ),
        'managed_refund' => array(
            'class' => 'refund',
            'other_field' => 'manager'
        ),
        'managed_end_status' => array(
            'class' => 'end_status',
            'other_field' => 'manager'
        ),
        'managed_beginning_number' => array(
            'class' => 'beginning_number',
            'other_field' => 'manager'
        ),
        'handled_student' => array(
            'class' => 'student',
            'other_field' => 'handler'
        ),
        'asked_feedback' => array(
            'class' => 'feedback',
            'other_field' => 'handler'
        ),
        'managed_recurring_status' => array(
            'class' => 'recurring_status',
            'other_field' => 'manager'
        ),
        'assigned_target' => array(
            'class' => 'target',
            'other_field' => 'assigner'
        )
    );
    var $validation = array(
        'id' => array(
            'label' => 'id',
            'rules' => array('required', 'trim', 'unique', 'min_length' => 3, 'max_length' => 20)
        ),
        'password' => array(
            'label' => 'password',
            'rules' => array('required', 'trim', 'min_length' => 3)
        ),
        'confirm_password' => array(// accessed via $this->confirm_password
            'label' => 'confirm Password',
            'rules' => array('encrypt', 'matches' => 'password')
        ),
        'Email' => array(
            'label' => 'Email Address',
            'rules' => array('required')
        ),
        array(// accessed via $this->confirm_email
            'field' => 'confirm_email',
            'label' => 'Confirm Email Address',
            'rules' => array('matches' => 'email')
        )
    );

    function login() {
        // Create a temporary user object
        $u = new Account();

        // Get this users stored record via their username
        $u->where('id_acc', $this->id_acc)->get();
        // Give this user their stored salt
        $this->salt = $u->salt;

        // Validate and get this user by their property values,
        // this will see the 'encrypt' validation run, encrypting the password with the salt
        $this->validate()->get();

        // If the username and encrypted password matched a record in the database,
        // this user object would be fully populated, complete with their ID.
        // If there was no matching record, this user would be completely cleared so their id would be empty.
        if (empty($this->id_acc)) {
            return FALSE;
        } else {
            // Login succeeded
            return TRUE;
        }
    }

    function getAllAccounts() {

        $o = new Account();
        $o->get();
        $this->salt = $o->salt;

        return $o;
    }

    // Optionally, don't include a constructor if you don't need one.
    function __construct($id = NULL) {
        parent::__construct($id);
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    // Optionally, you can add post model initialisation code
    function post_model_init($from_cache = FALSE) {
        
    }

    function addAccount() {
        $u = new Account();
   
        $u->id_acc = $this->id_acc;
        $u->password = $this->password;
        $u->email = $this->email;
        $u->nama = $this->nama;
        $u->role = $this->role;

        $u->save();
        return $u;
    }
    
    function updateAccount(){
         $u = new Account();
   
        $u->id_acc = $this->id_acc;
        $u->password = $this->password;
        $u->email = $this->email;
        $u->nama = $this->nama;
        $u->role = $this->role;

    }

    // Validation prepping function to encrypt passwords
    function _encrypt($field) { // optional second parameter is not used
        // Don't encrypt an empty string
        if (!empty($this->{$field})) {
            // Generate a random salt if empty
            if (empty($this->salt)) {
                $this->salt = md5(uniqid(rand(), true));
            }

            $this->{$field} = sha1($this->salt . $this->{$field});
        }
    }

}

/* End of file name.php */
/* Location: ./application/models/name.php */
?>
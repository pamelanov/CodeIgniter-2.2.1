<?php

class Account extends DataMapper {

    // Establish the relationship between entities

    var $validation = array(
        'id_acc' => array(
            'label' => 'id',
            'rules' => array('required', 'trim', 'unique', 'min_length' => 2, 'max_length' => 2)
        ),
        'password' => array(
            'label' => 'password',
            'rules' => array('required', 'trim', 'min_length' => 3)
        ),
        'email' => array(
            'label' => 'Email Address',
            'rules' => array('required')
        ),
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

    function getAllOps() {
        $a = new Account();
        $a->where('role', 2)->get();

        return $a;
    }

    function updateAccount() {
        $u = new Account();
        $u->where('id_acc', $this->id_acc);

        $u->get();
        var_dump($u->id_acc);
        var_dump(count($u));exit();
        
        $u->update(array('id_acc', $this->id_acc));
        $u->update('password', $this->password);
        $u->update('email', $this->email);
        $u->update('nama', $this->nama);
        $u->update('no_telp', $this->no_telp);
        $u->update('role', $this->role);
        return $u;
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
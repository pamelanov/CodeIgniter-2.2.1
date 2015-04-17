<?php
class Refund extends DataMapper {
	
	var $has_one = array(
			'requester' => array(
					'class' => 'invoice',
					'other_field' => 'requested_refund'
			),
			'manager' => array(
					'class' => 'account',
					'other_field' => 'managed_refund'
			)
	);
	
	// Optionally, don't include a constructor if you don't need one.
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	// Optionally, you can add post model initialisation code
	function post_model_init($from_cache = FALSE)
	{
	}
     
        function register(){
             // Create a temporary user object
        $u = new Refund();

        // Get this users stored record via their username
        $u->idmurid= $this->Id_murid;
        $u->idguru= $this->Id_guru;
        $u->noinvoice= $this->No_invoice;
        $u->idkelas= $this->Id_kelas;
        $u->idsales= $this->Id_sales;
        $u->tanggalr= $this->tanggalRefund;
        $u->jamhilang= $this->jam_hilang;
        $u->hargaperjam= $this->hargaperjam;
        $u->selisih= $this->Selisih;
        $u->alasan= $this->Alasan;
        $u->status= $this->Status;
       
        
        // Give this user their stored salt
        $this->salt = $u->salt;

        // Validate and get this user by their property values,
        // this will see the 'encrypt' validation run, encrypting the password with the salt
        $this->validate()->get();

        // If the username and encrypted password matched a record in the database,
        // this user object would be fully populated, complete with their ID.
        // If there was no matching record, this user would be completely cleared so their id would be empty.
        if (empty($this->Id)) {
            // Login failed, so set a custom error message
            $this->error_message('login', 'Username or password invalid');

            return FALSE;
        } else {
            // Login succeeded
            return TRUE;
        }
    
        }
        
	
	
	function getAllRefunds() {
        
        $r = new Refund();
	$r->get();
	$this->salt = $r->salt;
        
        return $r;
    }
    
    
}

/* End of file name.php */
/* Location: ./application/models/name.php */

?>
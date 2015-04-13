<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$data['judul'] = "Halaman Depan";
		$data['main'] = "home/home";
		$data['aktif'] = 'class="active"';
	
		$this->load->view('home/template', $data);
	}
	
	function __construct() {
		parent::__construct();
	
		$this->load->model('', '', '', 'madmins', true);
	}
	
	
	public function contact() {
		$data['judul'] = "Contac Us";
		$data['main'] = "home/contact";
		$data['aktif'] = 'class="active"';
	
		$this->load->view('home/template', $data);
	}
	
	public function about() {
		$data['judul'] = "About Us";
		$data['main'] = "home/about";
		$data['aktif'] = 'class="active"';
		$this->load->view('home/template', $data);
	}
	
	
	public function login() {
		$data['judul'] = "Halaman Login";
		$data['main'] = "home/login";
		$data['aktif'] = 'class="active"';
	
		$this->load->view('home/template', $data);
	}
	
	function ceklogin() {
		$this->load->library('encrypt');
		if ($this->input->post('username')) {
			$u = $this->input->post('username');
			$pw = $this->input->post('password');
			$row = $this->madmins->verifyUser($u, $pw);
			if (count($row)) {
				$_SESSION['userid'] = $row['id'];
				$_SESSION['role'] = 1;
	
				redirect('admin/dashboard', 'refresh');
			} else {
				$this->session->set_flashdata('result', 'maap username atau password Anda salah!');
				redirect('template/login', 'refresh');
			}
		} else {
			$this->session->set_flashdata('result', 'Isi Username dan password dulu!');
			redirect('template/login', 'refresh');
		}
	}
	
	function logout() {
		$sesi_items = array('user' => '');
		$this->session->unset_userdata($sesi_items);
		$this->session->set_flashdata('result', 'Anda wes logout');
		header('location:' . base_url() . 'index.php/template/login');
	}
	
	
	
	
	
	}
	
	?>
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
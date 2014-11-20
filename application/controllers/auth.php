<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do one time initializations here
		$data = array(
			'is_new_inv' => 1,
			'is_new_po' => 1
		);
		$this->session->set_userdata( $data );
	}

	public function index(){
		$this->load->view('login');
	}
	
	public function login(){
		$this->load->model('authenticate');
		$this->authenticate->authenticate();
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
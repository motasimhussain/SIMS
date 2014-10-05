<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
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
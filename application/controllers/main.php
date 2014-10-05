<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$data = array();
		$logged_in = $this->session->userdata('isLoggedIn');
		if($logged_in){

		}else{
			redirect('auth');
		}
	}

	public function index()
	{
		
	}
	public function home(){
		$data['main_content'] = 'home';
		$this->load->view('includes/template',$data);
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
?>
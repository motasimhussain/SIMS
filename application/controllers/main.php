<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
		$this->data['dash'] = "";
		$this->data['c_po'] = "";
		$this->data['acc'] = "";

		
		$logged_in = $this->session->userdata('isLoggedIn');
		if($logged_in){

		}else{
			redirect('auth');
		}
	}

	public function home(){
		$this->data['main_content'] = 'home';
		$this->data['dash'] = 'active';
		$this->load->view('includes/template',$this->data);
	}
	public function create_po(){
		$this->load->model('supplier');
		if($this->supplier->get_list()){
			$this->data['supp_list'] = $this->supplier->get_list();
		}else{
			$this->data['supp_list'] = 'No Suppliers';
		}

		$this->load->model('customer');
		if($this->customer->get_list()){
			$this->data['cust_list'] = $this->customer->get_list();
		}else{
			$this->data['cust_list'] = 'No Customers';
		}
		$this->data['main_content'] = 'create_po';
		$this->data['c_po'] = 'active';
		$this->load->view('includes/template',$this->data);
	}

	/////////////////// Accounts Start ///////////////////////
	public function add_customer(){
		$this->data['main_content'] = 'add_customer';
		$this->data['acc'] = 'active';
		$this->load->view('includes/template',$this->data);
	}

	public function add_supplier(){
		$this->data['main_content'] = 'add_supplier';
		$this->data['acc'] = 'active';
		$this->load->view('includes/template',$this->data);
	}


	/////////////////// Accounts End ///////////////////////

	public function print_po(){
		$this->data['main_content'] = 'print_po';
		$this->data['c_po'] = 'active';
		$this->load->view('includes/template',$this->data);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
?>
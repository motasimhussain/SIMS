<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validator extends CI_Controller {
	public $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->data['dash'] = "";
		$this->data['c_po'] = "";
		$this->data['acc'] = "";
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('prefix', 'Prefix', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('fax', 'Fax', 'numeric');
		$this->form_validation->set_rules('phone', 'Phone', 'numeric');
		$this->form_validation->set_rules('email', 'Email', 'valid_email');
		$this->form_validation->set_rules('gst', 'GST', 'required');
		$this->form_validation->set_rules('ntn', 'NTN', 'required');
		$this->form_validation->set_rules('term', 'Term', 'integer');
	}



	public function add_customer(){

		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'add_customer';
			$this->data['acc'] = 'active';
			$this->data['err'] = 1;
			$this->load->view('includes/template',$this->data);
		}
		else
		{
			$this->load->model('customer');
			if($this->customer->add()){
				redirect('main/add_customer');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}

		
	}

	public function add_supplier(){

		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'add_supplier';
			$this->data['acc'] = 'active';
			$this->data['err'] = 1;
			$this->load->view('includes/template',$this->data);
		}
		else
		{
			$this->load->model('supplier');
			if($this->supplier->add()){
				redirect('main/add_supplier');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}

		
	}

}

/* End of file validator.php */
/* Location: ./application/controllers/validator.php */
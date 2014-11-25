<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validator extends CI_Controller {
	public $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->data['dash'] = "";
		$this->data['c_po'] = "";
		$this->data['acc'] = "";
		$this->data['stock'] = "";
		
		
	}
	///////////////////////// Validator Rules Start //////////////////////////
	public function val_rules(){
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

	public function stock_val(){
		$this->form_validation->set_rules('item_name', 'Item Name', 'required');
		//$this->form_validation->set_rules('item_code', 'Item Code', '');
		$this->form_validation->set_rules('qty', 'Quantity', 'numeric');
		$this->form_validation->set_rules('price', 'Price', 'numeric');
	}

	public function edit_stock_val(){
		$this->form_validation->set_rules('item_name', 'Item Name', 'required');
		//$this->form_validation->set_rules('item_code', 'Item Code', '');
		$this->form_validation->set_rules('qty', 'Quantity', 'numeric');
		$this->form_validation->set_rules('price', 'Price', 'numeric');
	}

	public function supp_inv_val(){
		$this->form_validation->set_rules('inv_num', 'Invoice #', 'numeric|required');
		$this->form_validation->set_rules('qty', 'Quantity', 'numeric');
		$this->form_validation->set_rules('price', 'Price', 'numeric');
	}
	public function supp_inv_edit_val(){
		$this->form_validation->set_rules('item_id', 'Item ID', 'numeric|required');
		$this->form_validation->set_rules('supp_id', 'Supplier ID', 'numeric|required');
		$this->form_validation->set_rules('inv_num', 'Invoice #', 'numeric|required');
		$this->form_validation->set_rules('qty', 'Quantity', 'numeric');
		$this->form_validation->set_rules('price', 'Price', 'numeric');
	}
	public function add_po_in_val(){
		$this->form_validation->set_rules('pod_num', 'PO Detail #', 'numeric|required');
		$this->form_validation->set_rules('po_date', 'Date', 'required');
	}
	///////////////////////// Validator Rules End //////////////////////////

	public function add_customer(){
		$this->val_rules();

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

	public function c_address(){
		$this->load->model('customer');
		if($this->customer->add()){
			redirect('main/add_customer');
		}else{
			echo "<h1>Oops Something went wrong</h1>";
		}
	}

	public function add_supplier(){
		$this->val_rules();
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

	public function add_po_in(){
		$this->add_po_in_val();
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'create_po';
			$this->data['create_po'] = 'active';
			$this->data['err'] = 1;
			$this->load->view('includes/template',$this->data);
		}
		else
		{
			$this->load->model('po_in');
			if($this->po_in->add()){
				redirect('main/create_po');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}
	}

	public function add_stock(){

		$this->stock_val();
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'stock';
			$this->data['stock'] = 'active';
			$this->data['err'] = 1;
			$this->load->view('includes/template',$this->data);
		}
		else
		{
			$this->load->model('stock');
			if($this->stock->add()){
				redirect('main/stock');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}
	}

	public function supp_inv(){
		$this->supp_inv_val();
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'supp_inv';
			$this->data['inv'] = 'active';
			$this->data['err'] = 1;
			$this->load->view('includes/template',$this->data);
		}
		else
		{
			$this->load->model('supp_inv');
			if($this->supp_inv->add()){
				redirect('main/supp_inv');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}
	}
	public function edit_supp_inv(){
		$this->supp_inv_edit_val();
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'supp_inv';
			$this->load->view('includes/err');
		}
		else
		{
			$this->load->model('supp_inv');
			if($this->supp_inv->update_data()){
				redirect('main/supp_inv_list');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}
	}

	public function edit_stock(){
		$this->edit_stock_val();
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['main_content'] = 'supp_inv';
			$this->load->view('includes/err');
		}
		else
		{
			$this->load->model('stock');
			if($this->stock->update_data()){
				redirect('main/stock_list');
			}else{
				echo "<h1>Oops Something went wrong</h1>";
			}
		}
	}

}

/* End of file validator.php */
/* Location: ./application/controllers/validator.php */
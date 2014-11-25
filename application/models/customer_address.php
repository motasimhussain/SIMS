<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_address extends CI_Model {

	public function add(){
		$data = array(
			'name' => $this->input->post('name'),
			'prefix' => $this->input->post('prefix')
		);

		$query = $this->db->insert('customer',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file customer_address.php */
/* Location: ./application/models/customer_address.php */
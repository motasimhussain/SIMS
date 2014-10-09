<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

	public function add(){
		$data = array(
			'name' => $this->input->post('name'),
			'prefix' => $this->input->post('prefix'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'fax' => $this->input->post('fax'),
			'email' => $this->input->post('email'),
			'ntn' => $this->input->post('ntn'),
			'gst' => $this->input->post('gst'),
			'term' => $this->input->post('term')
		);

		$query = $this->db->insert('customer',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_list(){
		$query = $this->db->get('customer');

		foreach ($query->result() as $row) {
			$data[] = $row;
		}

		return $data;
	}

}

/* End of file customer.php */
/* Location: ./application/models/customer.php */
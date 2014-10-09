<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Model {

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

		$query = $this->db->insert('supplier',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_list(){
		$query = $this->db->get('supplier');

		foreach ($query->result() as $row) {
			$data[] = $row;
		}

		return $data;
	}


}

/* End of file supplier.php */
/* Location: ./application/models/supplier.php */
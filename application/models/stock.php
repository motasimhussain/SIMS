<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Model {
	public function add(){
		$data = array(
			'item_name' => $this->input->post('item_name'),
			'item_code' => $this->input->post('item_code'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price')
		);

		$query = $this->db->insert('stock',$data);

		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_list(){
		$query = $this->db->get('stock');

		foreach ($query->result() as $row) {
			$data[] = $row;
		}
		return $data;
	}

	public function get_item_desc($id){
		$this->db->where('id',$id);
		$query = $this->db->get('stock');

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data;
		}else{
			return false;
		}
	}
}

/* End of file stock.php */
/* Location: ./application/models/stock.php */
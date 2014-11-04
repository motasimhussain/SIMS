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

	public function update_stock_by_inv($id,$stock,$u_price)
	{
		$data = $this->get_item_desc($id);
		$prev_stock = $data[0]->qty;
		$prev_price = $data[0]->price;

		$stock = $prev_stock + $stock;
		if($prev_price != 0){
			$price= ($prev_price+$u_price)/2;
		}else{
			$price = $u_price;
		}
		$up = array(
			'qty' => $stock,
			'price' => $price
		 );
		
		$this->db->where('id', $id);
		$query = $this->db->update('stock', $up);
		if ($query) {
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

	public function del($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('stock')){
			return true;
		}else{
			return false;
		}

	}

	public function update_data(){
		$data = array(
			'item_name' => $this->input->post('item_name'),
			'item_code' => $this->input->post('item_code'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price')
		);

		$this->db->where('id',$this->input->post('id'));
		if($this->db->update('stock',$data)){
			return true;
		}else{
			return false;
		}

	}
}

/* End of file stock.php */
/* Location: ./application/models/stock.php */
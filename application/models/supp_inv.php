<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supp_inv extends CI_Model {
	
	public $serial = 0;

	public function __construct()
	{
		parent::__construct();
		$this->serial = $this->set_new();
	}

	public function set_new(){
		$query = $this->db->query('SELECT * FROM supp_inv WHERE id = (SELECT MAX(id) FROM supp_inv)');

		if($query->row()->id != null){
			if (!$this->session->userdata('is_new_inv')) {
				$inv_num = $query->row()->inv_num;
				return $inv_num;
			}
		}else{
			return 0;
		}
	}

	public function add(){
		$data = array(
			'inv_num' => $this->input->post('inv_num'),
			'item_id' => $this->input->post('item_id'),
			'supp_id' => $this->input->post('supp_id'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'date' => $this->input->post('date')
		);
		$query = $this->db->insert('supp_inv',$data);

		if($query){
			$array = array(
				'is_new_inv' => 0
			);
			$this->session->set_userdata( $array );

			$this->load->model('stock');
			$this->stock->update_stock_by_inv($this->input->post('item_id'),$this->input->post('qty'),$this->input->post('price'));
			return true;
		}else{
			return false;
		}

	}

	public function get_list(){
		$query = $this->db->get('supp_inv');

		foreach ($query->result() as $row) {
			$data[] = $row;
		}
		return $data;
	}

	public function get_info(){
		$this->db->where('inv_num',$this->serial);
		$query = $this->db->get('supp_inv');

		if($query){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

	public function get_det_by_id($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('supp_inv');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}

	}

	public function del($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('supp_inv')){
			return true;
		}else{
			return false;
		}

	}

	public function update_data(){
		$data = array(
			'inv_num' => $this->input->post('inv_num'),
			'item_id' => $this->input->post('item_id'),
			'supp_id' => $this->input->post('supp_id'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'date' => $this->input->post('date')
		);

		$this->db->where('id',$this->input->post('id'));
		if($this->db->update('supp_inv',$data)){
			return true;
		}else{
			return false;
		}

	}

}

/* End of file supp_inv.php */
/* Location: ./application/models/supp_inv.php */
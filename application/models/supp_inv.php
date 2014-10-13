<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supp_inv extends CI_Model {
	public $serial = 0;

	public function get_new_serial(){
		$query = $this->db->select_max('s_num','serial');
		$query = $this->db->get('supp_inv');
		if($query->row()->serial != null){
			if($this->session->userdata('is_new_inv') == 1){

				$this->serial = $query->row()->serial + 1;
				$array = array(
					'is_new_inv' => 0
				);
				$this->session->set_userdata( $array );
			}else if($this->session->userdata('is_new_inv') == 0){
				$this->serial = $query->row()->serial;
			}else{
				$array = array(
					'is_new_inv' => 0
				);
				$this->session->set_userdata( $array );
			}

			// print_r();
			// die();

		}else{
			$this->serial = 1;
		}
	}

	public function add()
	{
		$this->get_new_serial();
		$s = $this->serial;
		$data = array(
			's_num' => $s,
			'inv_num' => $this->input->post('inv_num'),
			'item_id' => $this->input->post('item_id'),
			'supp_id' => $this->input->post('supp_id'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'date' => $this->input->post('date')
		);
		$query = $this->db->insert('supp_inv',$data);
		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function get_info(){
		$this->get_new_serial();
		$this->db->where('s_num',$this->serial);
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

}

/* End of file supp_inv.php */
/* Location: ./application/models/supp_inv.php */
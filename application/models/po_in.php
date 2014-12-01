<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Po_in extends CI_Model {

	public $pod_num=0;

	public function __construct()
	{
		parent::__construct();
		$this->pod_num = $this->set_new();
	}

	public function set_new(){
		$query = $this->db->query('SELECT * FROM po_in WHERE id = (SELECT MAX(id) FROM po_in)');

		if($query->row()->id != null){
			if (!$this->session->userdata('is_new_po')) {
				$pod_num = $query->row()->pod_num;
				return $pod_num;
			}
		}else{
			return 0;
		}
	}

	public function add()
	{
		$parse_date = $this->input->post('po_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);

			$concat = $this->input->post("prefix")."-".$this->input->post('pod_num');

			$data = array(
				'pod_num' => $this->input->post('pod_num'),
				'pod_prefix' => $concat,
				'po_num_in' => $this->input->post('po_num_in'),
				'date_recieved' => $date_1,
				'due_date' => $date_2,
				'customer_id' => $this->input->post('customer_id'),
				'item_desc' => $this->input->post('item_desc'),
				'unit' => $this->input->post('unit'),
				'qty' => $this->input->post('qty'),
				'u_price' => $this->input->post('u_price'),
				't_amnt' => $this->input->post('t_amnt'),
				'supplier_id' => $this->input->post('supplier_id'),
				'po_num_out' => $this->input->post('po_num_out'),
				'big_date' => $this->input->post('po_date')
			);
			if($this->db->insert('po_in', $data)){
				$array = array(
					'is_new_po' => 0
				);
				$this->session->set_userdata( $array );
				return true;
			}else{
				return false;
			}
		}
	}

	public function get_list(){
		$query = $this->db->get('po_in');

		foreach ($query->result() as $row) {
			$data[] = $row;
		}
		return $data;
	}

	public function get_po_desc($id){
		$this->db->where('id',$id);
		$query = $this->db->get('po_in');

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data;
		}else{
			return false;
		}
	}

	public function get_info(){
		$this->db->where('pod_num',$this->pod_num);
		$query = $this->db->get('po_in');

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

/* End of file po_in.php */
/* Location: ./application/models/po_in.php */
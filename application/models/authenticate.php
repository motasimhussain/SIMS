<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends CI_Model {

	public function authenticate(){
		$username = $this->input->post("userid");
		$password = $this->input->post("password");
		$data = array(
			'username' => $username,
			'password' => $password
		 );


		// $this->db->where('username', $u);
		// $this->db->where('password', $p);
		$this->db->where($data);
		$query = $this->db->get('auth');
		// print_r($query);
		// die();
		if($query->num_rows == 1){

			$sess_data = array(
				'isLoggedIn' => 1,
				'isAdmin' => 1
			);

			$this->session->set_userdata($sess_data);
			redirect('main/home');

		}else{
			$this->session->sess_destroy();
			redirect('main/log_err');
		}
	}

}

?>
/* End of file auth.php */
/* Location: ./application/models/auth.php */
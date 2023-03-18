<?php

Class Login_account extends CI_Model {

	public function signup($data) {
		$condition = "username =" . "'" . $data['username'] . "'";
		$this->db->where($condition);
		$query = $this->db->get('account');
		if ($query->num_rows() == 0) {
			$condition = "email =" . "'" . $data['email'] . "'";
			$this->db->where($condition);
			$query = $this->db->get('account');
			if ($query->num_rows() == 0) {
				$this->db->insert('account', $data);
				if ($this->db->affected_rows() > 0) {
					return true;
				}				
			}else{
				$this->session->set_flashdata('email_message', 'An account with that email already exists.');
				return false;
			}
		} else {
			$this->session->set_flashdata('username_message', 'That username is already in use. ');
			return false;
		}
	}

	public function signin($data) {

		$condition = "email="."'".$data['username']."' OR username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->where($condition);
		$query = $this->db->get('account');
		if ($query->num_rows() == 1) {
			return true;
		} else {
			$this->session->set_flashdata('error_message', 'Nope. Try again.');
			return false;
		}
	}
}

?>

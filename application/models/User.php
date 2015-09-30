<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function create()
	{
		$this->load->helper('url');

		$data = array(
			'username' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'last_login' => date("Y-m-d h:i:s")
		);
		print_r($data);
		return $this->db->insert('users', $data);
	}
}


 ?>
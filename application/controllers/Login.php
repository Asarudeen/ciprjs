<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Login controller
*/

Class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('user');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['title'] = 'Login';
		$this->load->view('templates/header',$data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|matches[password2]|required');
		$this->form_validation->set_rules('password2','Confirm Password','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('login/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->user->create();
        	redirect('login', 'refresh');
		}

		
	}
}

 ?>
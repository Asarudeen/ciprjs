<?php 

/**
* 
*/
class News extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
		
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News List';

		$this->load->view('templates/header',$data);
		$this->load->view('news/index',$data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create Post';

		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('text','text','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
        	$this->load->view('news/create');
        	$this->load->view('templates/footer');
		}
		else
		{
			$this->news_model->set_news();
        	redirect('/news', 'refresh');

		}

		//$this->load->view('news/create');
	}

	public function show($id = Null)
	{
		$data['news'] = $this->news_model->get_news($id);
		$data['title'] = $data['news']['title'];

		$this->load->view('templates/header',$data);
		$this->load->view('news/show',$data);
		$this->load->view('templates/footer');
	}
}

 ?>
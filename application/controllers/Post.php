<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$file = FCPATH."application/core/Public_Controller.php"; (is_file($file)) ? include($file) : die("error: {$file}");

class Post extends Public_Controller {

	public function __construct() {
		parent::__construct();
		$this->layout->setLayout('layouts/frontend/base');
		$this->load->model('Post_model');
	}

	public function index()
	{
		$rsFormat = array();
		$page = $this->uri->segment(1);
		$subPage = $this->uri->segment(2);

		$title = str_replace('-', ' ', $subPage);
		$result = $this->Post_model->getByTitle($title);

		if (is_array($result) && count($result) > 0) {
			$rsFormat['data'] = $result;
			$descriptionSeo = character_limiter(strip_tags($result['description']), 135);
			$this->layout->setTitle($result['title_seo']);
			$this->layout->setDescripcion($descriptionSeo);
			$this->layout->setSocialSiteName("Name");
			$this->layout->setSocialTitle($result['title_seo']);
			$this->layout->setSocialResumen("Resumen");
			$this->layout->setSocialDescripcion($descriptionSeo);

		}

		//Layout load view
		$this->layout->view('frontend/post/index', $rsFormat);
	}

	public function serializar()
	{
		$this->layout->view('frontend/post/serializar');

		if ($this->input->post()) {
			$this->input->post('content');
			$a = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content')
			);
			echo serialize($a);
			exit;
		}
	}

	/**
	* form reservation
	*/
	public function reservation()
	{
		$this->load->model('MetaData_model');
		$this->layout->setLayout('layouts/frontend/layout-reservas');
		$page = $this->uri->segment(1);
		$subPage = $this->uri->segment(2);
		$title = str_replace('-', ' ', $subPage);
		$data = array(
			'data' => $this->Post_model->getByTitle($title)
		);

		$this->layout->view('frontend/post/reservation', $data);
	}

	/**
	*
	*/
	public function contact()
	{
		$this->load->model('MetaData_model');

		$this->layout->view('frontend/post/contact');
	}

}

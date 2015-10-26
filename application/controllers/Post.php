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
		$nameWhere = getIdLangString('title');
		$result = $this->Post_model->getByTitle($title, $nameWhere);

		if (is_array($result) && count($result) > 0) {
			$keyname = getIdLangString('content');

			$rsFormat = array(
				'title' => $result[$nameWhere],
				'content' => $result[$keyname]
			); 
			
			$this->layout->setTitle($rsFormat['title']);
			$this->layout->setKeywords("keywords");
			$this->layout->setDescripcion("Descripción");
			$this->layout->setSocialSiteName("Name");
			$this->layout->setSocialTitle("Title");
			$this->layout->setSocialResumen("Resumen");
			$this->layout->setSocialDescripcion("Description");
			
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

}

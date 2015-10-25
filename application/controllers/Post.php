<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$file = FCPATH."application/core/Public_Controller.php"; (is_file($file)) ? include($file) : die("error: {$file}");

class Post extends Public_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		//Layout options
		$this->layout->setTitle("Section ejemplo");
		$this->layout->setKeywords("keywords");
		$this->layout->setDescripcion("Descripción");
		$this->layout->setSocialSiteName("Name");
		$this->layout->setSocialTitle("Title");
		$this->layout->setSocialResumen("Resumen");
		$this->layout->setSocialDescripcion("Description");
		$this->layout->css(array(
			'/assets/css/additional.css',
			'/assets/css/additional.css'
		));
		$this->layout->js(array(
			'/assets/js/additional.js,
			/assets/js/additional.js'
		));

		//var_dump($this->config->item('cs_language')); exit;



		//Layout load view
		$this->layout->view('frontend/register/register_form');
	}


}

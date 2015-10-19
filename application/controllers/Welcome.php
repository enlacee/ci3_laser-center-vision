<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->layout->setTitle("Home");
		$this->layout->setKeywords("keywords");
		$this->layout->setDescripcion("Descripción");
		$this->layout->setSocialSiteName("Name");
		$this->layout->setSocialTitle("Title");
		$this->layout->setSocialResumen("Resumen");
		$this->layout->setSocialDescripcion("Description");

		//Layout load view
		$this->layout->view('frontend/welcome/index');
	}
}

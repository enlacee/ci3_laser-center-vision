<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$file = FCPATH."application/core/Admin_Controller.php"; (is_file($file)) ? include($file) : die("error: {$file}");


class Edit extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		//Call layout
		$this->layout->setLayout('layouts/backend/edit');
		$this->load->model('Post_model');
	}

	public function index()
	{
		//Breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Listado', '/admin/listado');
		$this->breadcrumbs->push('Editar', '#');

		//Layout options
		$this->layout->css( array('/assets/backend/css/additional.css') );
		$this->layout->js( array('/assets/backend/js/additional.js') );
		
		$data = array();
		if ($this->input->post()) {
			$mydata = $this->input->post();
			unset($mydata['id']);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('ac_posts', $mydata);
			$data['result'] = 'datos actualizados';
		} else {

		}
		$data['data'] = $this->getData();
//var_dump($data['data']);EXIT;
		//Layout load view
		$this->layout->view('backend/edit/index', $data);
	}

	public function getData()
	{	
		$data = array();
		$page = $this->uri->segment(1);
		$subPage = $this->uri->segment(2);
		$string = $this->uri->segment(3);
 
		if (!empty($string)) {
			$title = str_replace('-', ' ', $string);
			$data = $this->Post_model->getByTitle($title);
			
		}

		return $data;
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$file = FCPATH."application/core/Public_Controller.php"; (is_file($file)) ? include($file) : die("error: {$file}");


class Home extends Public_Controller {

	public function __construct() {
		parent::__construct();
		$this->layout->setLayout('layouts/frontend/base');
		$this->load->model('Post_model');
	}

	public function index()
	{


		//$this->lang->load("message","spanish");
		//echo $this->lang->line("msg_hello"); exit;
		//var_dump($this->config->item('language'));

		$data = array(
			'data' => $this->Post_model->getHome()
		);
		$params = $data['data'];
		if (is_array($params) && count($params) > 0) {
			$descriptionSeo = character_limiter(strip_tags($params['description']), 135);
			$this->layout->setTitle($params['title_seo']);
			$this->layout->setDescripcion($descriptionSeo);
			$this->layout->setSocialSiteName("Name");
			$this->layout->setSocialTitle($params['title_seo']);
			$this->layout->setSocialResumen("Resumen");
			$this->layout->setSocialDescripcion($descriptionSeo);
		}

		//Layout load view
		$this->layout->view('frontend/home/index', $data);
	}



	public function getPostByCategory($category)
	{
		// ----- init pagination
        $limit = 6;
		$page = 0;
        $count = $this->Post_model->getAll('post',$category,$status='', $order='', $limit, $offset='', $rows=true);

        if ($count > 0) {
            $total_pages = ceil($count/$limit);
        } else {
           $total_pages = 1;
        }
        if ($page > $total_pages) { $page = $total_pages; }// $page = 0
        if ($page < 1) { $page = 1; }

        $start = $limit * $page - $limit;

        $data['pag']['limit'] = $limit;
        $data['pag']['page'] = $page;
        $data['pag']['last_page'] = $total_pages;
        $data['pag']['start'] = $start;
        // ----- end pagination
		$data['data'] = $this->Post_model->getAll('post',$category,$status='', $order='', $limit, $start, $rows=false);

		return $data;
	}
}

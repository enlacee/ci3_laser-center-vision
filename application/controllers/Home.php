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
		$this->layout->setTitle("Home");
		$this->layout->setKeywords("keywords");
		$this->layout->setDescripcion("Descripción");
		$this->layout->setSocialSiteName("Name");
		$this->layout->setSocialTitle("Title");
		$this->layout->setSocialResumen("Resumen");
		$this->layout->setSocialDescripcion("Description");

		//$this->lang->load("message","spanish");
		//echo $this->lang->line("msg_hello"); exit;
		//var_dump($this->config->item('language'));

		$params = array(
			'data' => $this->Post_model->getHome()
		);

		//Layout load view
		$this->layout->view('frontend/home/index', $params);
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

    /**
     * Send form contact AJAX
     */
	public function send_form_contact_all_site()
	{
		$response = false;

		if( ! $this->input->is_ajax_request() ) {
			show_404();
		} else {

			$dataPost = array(
				'nombre' => $this->security->xss_clean($this->input->post('nombres')),
				'edad' => $this->security->xss_clean($this->input->post('edad')),
				'direccion' => $this->security->xss_clean($this->input->post('direccion')),
				'ciudad' => $this->security->xss_clean($this->input->post('ciudad')),
				'telefono' => $this->security->xss_clean($this->input->post('telefono')),
				'celular' => $this->security->xss_clean($this->input->post('celular')),
				'interes' => $this->security->xss_clean($this->input->post('interes')),
				'email' => $this->security->xss_clean($this->input->post('email')),
				'mensaje' => $this->security->xss_clean($this->input->post('mensaje'))
			);
			if (!empty($dataPost['nombre']) && !empty($dataPost['email'])) {
				$this->load->library('email');// load email library
				$this->email->clear();
			    $this->email->to('detopst.tk@gmail.com');
			    $this->email->from('acopitan@gmail.com');
			    $this->email->subject('Here is your info ccc');
			    $this->email->message('Hi ccc Here is the info you requested.');
			    $this->email->send();
				var_dump($this->email->print_debugger());exit;
/*
				$this->load->library('email');// load email library
			    $this->email->from($this->config->item('smtp_user'), $this->config->item('cs_name'));
			    $this->email->to($this->config->item('cs_email_contact'));
			    $this->email->subject("Mensaje Contacto *" . $dataPost['nombre']);
				$this->email->set_mailtype('html');
				// this will return you html data as message
				$message = $this->load->view('frontend/_emails/contact', array('data' => $dataPost), TRUE);
				$this->email->message($message);
			    if ($this->email->send()) {
					//con esto podemos ver el resultado
					var_dump($this->email->print_debugger());
					$response = array(
						'respuesta' => true,
						'mensaje' => "Mensaje enviado!"
			        );
				} else {
					//con esto podemos ver el resultado
					var_dump($this->email->print_debugger());
					$response = array(
						'respuesta' => false,
						'mensaje' => "No se envio pudo enviar tu correo, intentelo luego"
					);
				}
				*/
			}
		}

		echo json_encode($response);
	}
}

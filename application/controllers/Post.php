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
		$title = $this->security->xss_clean($title);
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
				'title' => $this->security->xss_clean($this->input->post('title')),
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
		$title = $this->security->xss_clean($title);
		$data = array(
			'data' => $this->Post_model->getByTitle($title)
		);
		if (is_array($data['data']) && count($data['data']) > 0) {
			$this->layout->setTitle($data['data']['title_seo']);
			$descriptionSeo = character_limiter(strip_tags($data['data']['description']), 135);
			$this->layout->setDescripcion($descriptionSeo);
		}

		$this->layout->view('frontend/post/reservation', $data);
	}

	/**
	*
	*/
	public function contact()
	{
		$this->load->model('MetaData_model');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$page = $this->uri->segment(1);
		$subPage = $this->uri->segment(2);
		$title = str_replace('-', ' ', $subPage);

		if (!empty($title)) {
			$title = $this->security->xss_clean($title);
			$this->layout->setTitle(ucfirst($title));
		}


		if ($this->input->post() || $this->input->is_ajax_request()) {
			$this->conctacValidate();
			if ($this->form_validation->run()) {
				$response = $this->sendMailContact();
				echo json_encode($response); exit;
			}
		}

		//$this->layout->js(array('/assets/js/form_contact_bottom_all_site.js'));
		$this->layout->view('frontend/post/contact', $this->input->post());
	}

	/**
	* validation form contact
	*/
	protected function conctacValidate()
	{
        $this->form_validation->set_rules('nombres', lang('msg_name_complete'),'trim|required|min_length[2]');
        $this->form_validation->set_rules('edad', lang('msg_age'),'trim|required');
        $this->form_validation->set_rules('direccion', lang('msg_address'),'trim|required');
        $this->form_validation->set_rules('ciudad', lang('msg_city'),'trim|required');
        $this->form_validation->set_rules('telefono', lang('msg_telephone_contact'),'trim|required');
        $this->form_validation->set_rules('celular', lang('msg_cell_phone'),'trim|required');
        $this->form_validation->set_rules('email', lang('msg_email'),'trim|required|valid_email');
        $this->form_validation->set_rules('interes', lang('msg_visual_problem'),'trim|required');
        $this->form_validation->set_rules('mensaje', lang('msg_message'),'trim|required');
	}

	/**
	* send mail by POST
	*/
	protected function sendMailContact()
	{
		$rs = false;
		$response = false;

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
			$this->email->clear(TRUE);
			
			$this->email->from(
				$this->config->item('cs_email_from'),
				$this->config->item('cs_email_from_name')
			);
		    $this->email->to($this->config->item('cs_email_contact'));
		    $this->email->subject("Mensaje Contacto *" . $dataPost['nombre']);
			$this->email->set_mailtype('html');
			// this will return you html data as message
			$message = $this->load->view('frontend/_emails/contact', array('data' => $dataPost), TRUE);
			$this->email->message($message);
		    if (! $this->email->send()) {
				$response = array(
					'respuesta' => true,
					'mensaje' => "Mensaje enviado!"
		        );
			} else {
				$response = array(
					'respuesta' => false,
					'mensaje' => "No se envio pudo enviar tu correo, intentelo luego"
				);
			}
		}

		return $response;
	}

	/**
	* Send mail test
	*/
	public function testMail()
	{
	$this->load->library('email');

	$this->email->from(
		$this->config->item('cs_email_from'),
		$this->config->item('cs_email_from_name')
	);
	$this->email->to($this->config->item('cs_email_contact')); 
	//$this->email->cc('another@another-example.com'); 
	//$this->email->bcc('them@their-example.com');
	$this->email->subject('Email Test PepeRios');
	$this->email->message('Testing the email class. '. base_url());	
	$this->email->send();

	//$this->load->view('frontend/_emails/contact', array('data' => ''));
	var_dump($this->email->print_debugger());
	}

}

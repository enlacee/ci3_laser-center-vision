<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // change language
        $this->load->helper('language');
        $this->lang->load("message", $this->config->item('cs_language'));

        // helpers
        $this->load->helper('text');
        $this->load->helper(array(
            'my_ayuda_helper'
        ));
        // contact validation
		$this->load->helper('form');
		$this->load->library('form_validation');

        $this->loadVariables();
/*
        if($this->config->item('site_open') === FALSE)
        {
            show_error('Sorry the site is shut for now.');
        }


        // If the user is using a mobile, use a mobile theme
        $this->load->library('user_agent');
        if( $this->agent->is_mobile() )
        {

        }
*/
    }


    /**
     * list of variables for consummer and response
     * process (create thumbnail)
     */
    public function loadVariables()
    {
        //load pages (about us)
        $this->load->model('Post_model');
        $this->load->model('Banner_model');
        $this->load->model('Surgerie_model');
        $this->load->model('Note_model');
        $this->load->model('MetaData_model');

        $this->load->vars(array(
            'pagesMenu' => $this->reorderPagesMenu()
        ));

        $this->load->vars(array(
            'pagesCirugia' => $this->Post_model->getAll(
                Post_model::TIPO_POST,
                Post_model::CATEGORY_CIRUGIA,
                Post_model::STATUS_TRUE,
                'asc',
                9
            )
        ));

        $this->load->vars(array(
            'pagesTecnologia' => $this->Post_model->getAll(
                Post_model::TIPO_POST,
                Post_model::CATEGORY_TECNOLOGIA,
                Post_model::STATUS_TRUE,
                'asc',
                4
            )
        ));

        $this->load->vars(array(
            'pagesExamenes' => $this->Post_model->getAll(
                Post_model::TIPO_POST,
                Post_model::CATEGORY_EXAMENES,
                Post_model::STATUS_TRUE,
                'asc',
                9
            )
        ));

        $this->load->vars(array(
            'slider' => $this->Banner_model->getAll(
                'slider',
                Banner_model::STATUS_TRUE,
                'desc',
                5
            )
        ));

        $this->load->vars(array(
            'bannerOne' => $this->Banner_model->getAll(
                'banner',
                Banner_model::STATUS_TRUE,
                'desc',
                1
            )
        ));

        $this->load->vars(array(
            'surgerie' => $this->Surgerie_model->getAll(
                Surgerie_model::STATUS_TRUE,
                'asc',
                25
            )
        ));

        $this->load->vars(array(
            'note' => $this->Note_model->getAll(
                Note_model::STATUS_TRUE,
                'asc',
                4
            )
        ));

        $this->load->vars(array(
            'interesOpt' => $this->MetaData_model->getAll('form_problem_visual', 18)
        ));

    }

	private function reorderPagesMenu()
	{
		$rs = $this->Post_model->getAll(
			Post_model::TIPO_POST,
			Post_model::CATEGORY_MAIN_MENU,
			Post_model::STATUS_TRUE,
			'order_asc',
			10
		);

		
		$pages = array();
		foreach ($rs as $key => $value) {
			$pages[$key] = $value;
			if (isset($value['id_parent']) && !empty($value['id_parent'])) {
				$pages[$key]['sub_page'][] = $value;
			}
			
		}
		//echo "<pre>"; print_r($pages);exit;
		return $pages;
	}

}
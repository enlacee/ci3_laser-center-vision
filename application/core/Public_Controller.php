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
        $pagesMenu = array();
        $pagesMenu['pagesMenu'] = $this->Post_model->getAll(Post_model::TIPO_POST,Post_model::CATEGORY_MAIN_MENU,Post_model::STATUS_TRUE, 'asc', 8);
        $this->load->vars($pagesMenu);

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


    }

}

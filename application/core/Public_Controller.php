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
        $pagesMenu['pagesMenu'] = $this->Post_model->getAll(Post_model::TIPO_POST,'main-menu',Post_model::STATUS_TRUE, 'asc', 8);
        $this->load->vars($pagesMenu);
        //var_dump($pagesMenu['pagesMenu']);exit;
    }

}

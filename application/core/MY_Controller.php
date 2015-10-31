<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $data = array();
    public $id_lang = '';
    public $cache_status = false;

    const CACHE_TIME = 600;

    public function __construct ()
    {
        parent::__construct();
        //$this->load->library(array('layout', 'breadcrumbs', 'database'));
        //$this->load->driver('cache');
        ENVIRONMENT != 'development' || $this->output->enable_profiler(TRUE);
        $this->id_lang = $this->getIdLanguage();
        $this->cache_status = (ENVIRONMENT == 'development') ? true : false;
    }

    /**
    * Return Id languague
    * value is an array() config_site.php and  make reference to the table 'ac_languages'
    */
    public function getIdLanguage()
    {
        $curLanguage = $this->config->item('cs_language');
        $languagues = $this->config->item('cs_languages');
        $array = array_values($languagues);
        $key = array_search($curLanguage, $array);
        $id = 1;
        if ($key  > 0) {
            $id = (int) $key + 1;
        }

        return $id;
    }

    /**
    * *Agregar librerias validador de formularios con formValidation.io*
    * Add libraries for validator form with formValidation.io
    *
    * @return void
    */
    public function addLibraryFormValidation()
    {
        $this->layout->css(array(
            'assets/lib/formvalidation.io/dist/css/formValidation.css',
            'assets/css/bootstrapValidator.css'
        ));
        $this->layout->js(array(
            'assets/lib/formvalidation.io/vendor/jquery/jquery.min.js',
            'assets/lib/formvalidation.io/vendor/bootstrap/js/bootstrap.min.js',
            'assets/lib/formvalidation.io/dist/js/formValidation.js',
            'assets/lib/formvalidation.io/dist/js/framework/bootstrap.js'
        ));
    }

}

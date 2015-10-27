<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Helper function My_Controller
* return id language
*/
function getIdLanguage()
{
    $CI =& get_instance();
    return $CI->getIdLanguage();
}

/**
* URL beauty
*/
function url_title_beauty($str)
{
    $string = convert_accented_characters($str);
    return url_title($string, '-', true);
}

function base_url_lang($uri = '')
{
    $CI =& get_instance();
    $id_lang = $CI->config->item('cs_lang');
    $url = '';
    if(!empty($id_lang)) {
        $url .= "/$id_lang/";
    }
    $stringUrl = $url . $uri;
    return base_url($stringUrl);
}

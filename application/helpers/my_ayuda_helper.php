<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Get id Languague
* dependences : config_site.php
*/
function getIdLanguage()
{
    $CI =& get_instance();
    $currentLanguage = $CI->config->item('cs_language');
    $languagues = $CI->config->item('cs_languages');

    $array = array_values($languagues);
    $key = array_search($currentLanguage, $array);
    $id = 1;
    if ($key  > 0) {
        $id = (int) $key + 1;
    }

    return $id;
}

/**
* Return dinamic string: 'content_1, content_2'
*/
function getIdLangString($string)
{
    $rs = $string . '_' . getIdLanguage();

    return $rs;
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

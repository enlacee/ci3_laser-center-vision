<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * General settings website
 * Title, names, currencies, social account, extensions etc ...
 * Call config example: <?php echo $this->config->item("cs_lang"); ?>
 */

//Languaje site
$config['cs_lang'] = 'es';

//Site name
$config['cs_name'] = 'Title site';

//Currency site
$config['cs_currency'] = '€';

//Blog site
$config['cs_blog'] = '#';

//Facebook Account
$config['cs_facebook'] = '@facebook';

//API Facebook API - Show source code for robots
$config['cs_facebook_api'] = 'FB-AppID';

//Twitter Account
$config['cs_twitter'] = '@twitter';

//API Twitter API - Show source code for robots
$config['cs_twitter_api'] = 'TW-AppID';

//Google plus Account
$config['cs_google_plus'] = '@google_plus';

//Linkedin Account
$config['cs_linkedin'] = '@linkedin';

//Pinterest Account
$config['cs_pinterest'] = '@pinterest';

//Youtube Account
$config['cs_youtube'] = '@youtube';

//Instagram Account
$config['cs_instagram'] = '@instagram';


/**
* Extra by anibal
* default language
*/
$config['cs_languages'] = array('es' => 'spanish', 'en' => 'english');

$selfbase = str_replace('index.php', '', $_SERVER['PHP_SELF']);
$arrayUri = explode('/', str_replace($selfbase, '', $_SERVER['REQUEST_URI']));

if (isset($arrayUri[0]) && strlen($arrayUri[0]) == 2) {
    if (array_key_exists($arrayUri[0], $config['cs_languages'])) {
        $config['cs_language'] = $config['cs_languages'][$arrayUri[0]];
        $config['cs_lang'] = $arrayUri[0];
    }
} else {
    // Here change default Language
    $config['cs_language'] = 'spanish';
    $config['cs_lang'] = 'es';
}

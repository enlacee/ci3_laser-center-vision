<?php

$config['composer_autoload'] = FCPATH.'vendor/autoload.php';

/*
| -------------------------------------------------------------------
| Native Auto-load
| -------------------------------------------------------------------
|
| Nothing to do with cnfig/autoload.php, this allows PHP autoload to work
| for base controllers and some third-party libraries.
|
*/

function __autoload($class)
{
echo " autoload_anibal ".$class;
 /*if(strpos($class, 'CI_') !== 0)
 {
  @include_once( APPPATH . 'core/'. $class . '.php' );
 }*/
}

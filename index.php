<?php

/*echo 'hola<br>';
echo $_SERVER['QUERY_STRING'];*/

//NOTIFICAR ERRORES(E_ALL -->todo tipo de 
//errores(notices,warnings & errors)
error_reporting(E_ALL);
ini_set('display_errors', 'On');

use Framework\Sys\Kernel;
use Framework\Sys\Autoload;
use Framework\Sys\Session;

define('DS',DIRECTORY_SEPARATOR);//dependiendo del SO la / es para un lado o otro
define('ROOT',realpath( __DIR__).DS);
define('APP',ROOT.'app'.DS);

//config file
//dir directorio actual
require_once __DIR__.'/sys/autoload.php';
//metodos de autocarga
$load=new Autoload();
$load->register();
//cargamos los prefijos de la carga de nombres
$load->addNamespace('Framework\Sys','sys');
$load->addNamespace('Framework\App','app');
$load->addNamespace('Framework\App\Controllers','app/controllers');
$load->addNamespace('Framework\App\Models','app/models');
$load->addNamespace('Framework\App\Views','app/views');

//var_dump($load);

//inicio de sesión
Session::init();

//inicio de front-controller
//todo lo vamos a enviar allí,es el primero que recibe
    Framework\Sys\Kernel::init();//método statico

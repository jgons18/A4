<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 27/11/18
 * Time: 17:54
 */

namespace Framework\Sys;
/**
 * Class View
 * @package Framework\Sys
 */

class View extends \ArrayObject
{
    protected $output;

    function __construct($dataview=null,$dataTable=null){
        parent::__construct($dataview,\ArrayObject::ARRAY_AS_PROPS);//array as props--permite propiedades
    }

    /**
     * renders template
     * @return void
     */
    
    function render($filetemplate){
        ob_start();//funcion que inicia el uffer de salida
        try{
            include APP.'tpl'.DS.$filetemplate;
        }catch (Exception $e){
            echo $e->getMessage();
        }

        //clean and return output buffer
        return ob_get_clean();
    }
    function show(){
        echo $this->output;//salida por pantalla
    }
}
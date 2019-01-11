<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 27/11/18
 * Time: 17:40
 */

namespace Framework\Sys;
use Framework\Sys\Registry;

/**
 * Class Controller
 * @package Framework\Sys
 */
abstract class Controller//no sep uede crear un objeto con las clases abstractas
{
    protected $model;
    protected $view;
    protected $params;
    protected $conf;//object app configuration
    protected $app;
    protected $dataView=array();
    protected $dataTable=array();

    function _construct($params=null,$dataView=null){//los parametros podrian ser nulos

        $this->params=$params;//es un array en este caso
        $this->conf=Registry::getInstance();
        //acces to app data config
        $this->app=(array)$this->conf->app;//lo convertira en un array,accede al objeto app,que esta en conf
        $this->dataView=$dataView;
        $this->addData($this->app);


    }
    protected function addData($array){
        if(is_array($array)){
            if($this->is_single($array)){
                $this->dataView=array_merge((array)$this->dataView,$array);//ha metido un array dentro de otro array
            }else{
                $this->dataTable=$array;
            }
        }
    }

    /**
     * determines if is multilevel array or not
     * @param array $data
     * @return boolean
     */
    protected function is_single($data){//comprueba que sea array
        foreach ($data as $value){
            if(is_array($value)){
                return false;
            }
            return true;
        }
    }

    protected  function  ajax($output){
        if(is_array($output)){
            echo json_encode($output);

        }
    }



}
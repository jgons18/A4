<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 23/11/18
 * Time: 16:10
 */

namespace Framework\Sys;
use Framework\Sys\Singleton;
/**
 * Stores app information
 * Class Registry
 * @package Framework\Sys
 */

class Registry
{
    use Singleton;
    private $data=array();


    private function __construct(){
        $this->data=array();
        $this->loadConf();
    }

    /**
     * @param $key
     * @param $value
     */
    function __set($key,$value){
        if(!array_key_exists($key,$this->data)){
            $this->data[$key]=$value;
        }
    }

    function __get($key){
        if($key!=null){
            if(array_key_exists($key,$this->data)){
                return $this->data[$key];
            }else{
                return null;
            }
        }
        return null;
    }

    /**
     * Unset data key or complete data
     * @param null $key
     */
    function  __unset($key=null){
        //TODO: Implement __unset() method;
        if($key!=null){
            if(array_key_exists($key,$this->data)){
                unset($this->data[$key]);
            }
        }else{
            unset($this->data);
        }
    }

    /**
     * loads config file
     * @return void
     */
    function loadConf(){
        $fileconf=APP.'config.json';//en json por que es mas facil en arrays asociativo
        $jsonstr=file_get_contents($fileconf);
        $arrayJson=json_decode($jsonstr);//para crear un array
        foreach ($arrayJson as $key=>$value){
            //asignar this data de d$key
            $this->data[$key]= $value;
        }

    }



}
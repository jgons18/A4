<?php
/**
 * Created by PhpStorm.
 * User: Jennifer
 * Date: 28/11/2018
 * Time: 19:14
 */

namespace Framework\Sys;

use Framework\Sys\Singleton;

class Model
{
    use Singleton;//use es reutilizar el codigo de singleton
    protected $db;
    protected $stmt;
    //interchange data with controller ( datos de intercambio cn el controlador)
    protected $data;

    function __construct(){
        //singleton access to database
        $this->db=DB::getInstance();


    }
    public function query($sql){//query para hacer consultas
        $this->stmt=$this->db->prepare($sql);
    }
    public function bind($params,$value){//value  es el  valor php\ parametros - seria como se denomina ese valor,ej: name:jennifer

        switch ($value){
            case is_int($value):
                $type=\PD0::PARAM_INT;//pdo- encapsulado de la bbdd-conexión entre php y bb
                    break;
            case is_bool($value):
                $type=\PD0::PARAM_BOOL;
                break;
            case is_null($value):
                $type=\PDO::PARAM_NULL;
                break;
            default:
                $type=\PDO::PARAM_STR;//string
        }
        $this->stmt->bindValue($param,$value,$type);

    }
    public function execute(){
        $result=$this->stmt->execute;
        return $result;
    }
    public function resultSet(){
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function singleSet(){
        return $this->stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    public function lastInsertId(){
        return $this->db->lastInsertId();
    }


}
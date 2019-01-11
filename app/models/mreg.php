<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 13/12/18
 * Time: 15:26
 */

namespace Framework\App\Models;

use Framework\Sys\Model;

class mReg extends Model
{

    function  __construct()
    {
        parent::__construct();
    }

    function  reg($username,$password,$age){
        $this->query('INSERT INTO usuarios(login,passwd,edad) VALUES(:username,:password,:age)');
        //$this->query('SELECT * FROM  user(email:=email)');
        $this->bind(':username',$username);
        $this->bind(':password',$password);
        $this->bind(':age',$age);

    }

    function validate_user($em){
        try{
            $this->query('SELECT * FROM usuarios WHERE login = :username');
        }catch(\PDOException $em){
            echo $e->getMessage();
        }
    }


}
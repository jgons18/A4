<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/12/18
 * Time: 18:46
 */

namespace Framework\App\Controllers;

use Framework\Sys\Controller;
use Framework\App\Views\vReg;
use Framework\App\Models\mReg;
use function PHPSTORM_META\type;

class Reg extends Controller
{


    function  __construct($params){
        parent::_construct($params);
        $this->addData([
            'page'=>'Reg'
        ]);
        $this->model=new mReg();
        $this->view=new vReg($this->dataView,$this->dataTable);
        $this->view->show();
        print_r($this->dataView);

    }
    function home(){
        $this->view->show();
    }

    function reg(){
        //comprobación de formulario

        /*$email=filter_input(INPUT_POST,$_POST['email'],FILTER_VALIDATE_EMAIL);
        $password=filter_input(INPUT_POST,$_POST['password']);
        $password2=filter_input(INPUT_POST,$_POST['password2']);
        $username=filter_input(INPUT_POST,$_POST['username'],FILTER_VALIDATE_STRING);*/

        $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
        $password2=filter_input(INPUT_POST,'password2',FILTER_SANITIZE_STRING);
        $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $age=filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT);
        //var_dump();

        $this->ajax([''=>'']);
    }

    function valeuser(){
        $user=filter_input(INPUT_POST,'username',FILTER_VALIDATE_STRING);
        echo $user;
        //var_dump($email);
        $res = $this->model->validate_user($user);
        if(!res){
            $this->ajax(['msg'=>'User in use']);

        }else{
            $this->ajax(['msg'=>'Correct']);
        }
    }
}
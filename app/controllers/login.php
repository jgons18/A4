<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 18/12/18
 * Time: 17:46
 */

namespace Framework\App\Controllers;

use Framework\Sys\Controller;
use Framework\App\Views\vLogin;
use Framework\App\Models\mLogin;
use function PHPSTORM_META\type;

class Login extends Controller
{


    function  __construct($params){
        parent::_construct($params);
        $this->addData([
            'page'=>'Login'
        ]);
        $this->model=new mLogin();
        $this->view=new vLogin($this->dataView,$this->dataTable);
        $this->view->show();
        print_r($this->dataView);

    }
    function home(){

    }

    function log(){
        //comprobación de formulario

        $username=filter_input(INPUT_POST,$_POST['username'],FILTER_VALIDATE_STRING);
        $password=password_hash(INPUT_POST,$_POST['password']);
        $this->model->log($username,$password);

        //var_dump();

        $this->ajax([''=>'']);
    }

}
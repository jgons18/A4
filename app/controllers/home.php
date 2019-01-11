<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 27/11/18
 * Time: 17:30
 */

namespace Framework\App\Controllers;

use Framework\Sys\Controller;
use Framework\App\Views\vHome;
use Framework\App\Models\mHome;

class Home extends Controller
{
    function  __construct($params){
        parent::_construct($params);
        $this->addData([
            'page'=>'Home'
        ]);
        $this->model=new mHome();
        $this->view=new vHome($this->dataView,$this->dataTable);

        //print_r($this->dataView);


        //print_r($this);
        //echo 'controlador home<br>';
    }
    function home(){
        /*print_r($this);//es lo mismo que el de arriba
        echo 'accionhome<br>';//a parte de contruirlo llamara a l funcion home*/
        $this->view->show();
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 19/12/18
 * Time: 17:06
 */

namespace Framework\App\Views;

use Framework\Sys\View;

class vLogin extends View
{

    function __construct($dataview = null,$dataTable=null)
    {
        parent::__construct($dataview,$dataTable);
        $this->output=$this->render('tlogin.php');
    }
}
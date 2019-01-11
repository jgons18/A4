<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/12/18
 * Time: 19:12
 */

namespace Framework\App\Views;

use Framework\Sys\View;

class vReg extends View
{

    function __construct($dataview = null,$dataTable=null)
    {
        parent::__construct($dataview,$dataTable);
        $this->output=$this->render('treg.php');
    }
}
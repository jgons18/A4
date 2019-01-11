<?php
/**
 * Created by PhpStorm.
 * User: Jennifer
 * Date: 28/11/2018
 * Time: 17:37
 */

namespace Framework\App\Views;

use Framework\Sys\View;

class vHome extends View
{
    function __construct($dataview = null,$dataTable=null)
    {
        parent::__construct($dataview,$dataTable);
        $this->output=$this->render('thome.php');
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 18/12/18
 * Time: 17:51
 */

namespace Framework\App\Models;

use Framework\Sys\Model;

class mLogin extends Model
{

    function  __construct()
    {
        parent::__construct();
    }

    function log($username,$password){
        $this->query('SELECT * FROM user(username,password) VALUES(:username,:password)');
        $this->bind(':username',$username);
        $this->bind(':password',$password);

    }
}
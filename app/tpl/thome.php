<?php
/**
 * Created by PhpStorm.
 * User: Jennifer
 * Date: 28/11/2018
 * Time: 17:42
 */

include 'head_common.php';
?>

<body>
    <h1><?= $this->page  ;?></h1>
    //el formulario iria aqui
    <h2>Bienvenido</h2>
    <a href="/reg/reg"><button name="signup">Sign up</button>
    <a href="/login/login"><button name="login">Login</button>
<?php

    include 'footer_common.php';
?>
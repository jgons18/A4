<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/12/18
 * Time: 19:03
 */
include 'head_common.php';
?>

    <body>
    <h1><?= $this->page  ;?></h1>
        <div class="contrainer-fluid">
            <form id="form-reg" class="form-horizontal" method="post" action="reg/reg">

                <div class="form-group">
                <label for="username">Nombre usuario</label>
                <input type="text" name="username" >
                </div>

                <!--<div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email-reg">
                </div>-->

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password">
                </div>

                <div class="form-group">
                    <label for="password2">Repite el password</label>
                    <input type="password" name="password2">
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age">
                </div>

                <div class="form-group">
                    <button type="submit" id="btn-reg" class="btn btn-default">Registarse</button>
                </div><br>

                <div class="form-group">
                    <input type="textarea" name="msg" id="msg">
                </div>

            </form>
        </div>

    </body>
<?php

include 'footer_common.php';
?>
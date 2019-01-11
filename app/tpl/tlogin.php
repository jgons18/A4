<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 18/12/18
 * Time: 17:56
 */
include 'head_common.php';
?>

    <body>
    <h1><?= $this->page  ;?></h1>
    <div class="contrainer-fluid">
        <form id="form-login" class="form-horizontal" method="post" action="/home/home">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <div class="form-group">
                <button type="submit" id="btn-login" class="btn btn-default">Login</button>
            </div>

        </form>
    </div>

    </body>
<?php

include 'footer_common.php';
?>
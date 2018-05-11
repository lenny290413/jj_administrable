<?php
/**
 * Created by PhpStorm.
 * User: STI Gold4
 * Date: 8/05/2018
 * Time: 5:06 PM
 */

    session_start();
    session_destroy();
    header("location:/nuevo/login.php")
?>
<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 26.8.2017
 * Time: 15:03
 */
include_once "vendor/autoload.php";

use app\controllers\mycontrol;



print_r((new mycontrol())->anasayfa() );



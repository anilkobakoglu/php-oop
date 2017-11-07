<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 24.8.2017
 * Time: 13:55
 */

include_once"vendor/autoload.php";

//use app\controllers\control; böylede olurdu alltaki gibi dinamik olur.
//echo(new control())->deneme();
$a="control";
$class= "app\\controllers\\$a";//çift tırnak içinde yazdığım için \\ böyle yaptım
echo(new $class())->deneme();

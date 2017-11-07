<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 22.8.2017
 * Time: 14:28
 */


include_once "system/router/router.php";


(new router($_GET["url"]));//router classına url yi gönderiyoruz
include_once "system/router/web.php";



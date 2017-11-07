<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 22.8.2017
 * Time: 14:32
 */

include_once "system/autoload.php";


class router
{
        private static $url;

    public function __construct($rqurl)
    {

            self::$url=$rqurl; //indexden aldığımız url yi çekiyoruz. indexten buraya yolladık
    }

    public static function get($myurl,$callback){


      if($_SERVER["REQUEST_METHOD"]==="GET"){ //GET metdou ise demek.

        $myurl=trim($myurl,"/");
        self::$url=trim(self::$url,"/");
          if(self::$url==$myurl){ //eğer url ile webde callbackin içine yazdığım benim ki eşitse demek

              call_user_func($callback);//eşitse callback i çalıştır
          }


      }

    }

}
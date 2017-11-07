<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 19.8.2017
 * Time: 18:47
 */

class DENEME {

    public function ders(){


        return "merhaba";
    }

}
class router
{

   public static function get($url,$callback){



       call_user_func_array($callback,array(5,4));

   }


}
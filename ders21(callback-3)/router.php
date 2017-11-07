<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 19.8.2017
 * Time: 18:47
 */

class DENEME {


    public function ders($a,$b){

        echo  $b;
    }
}
class router{

    public static function get($url,$callback){

        if(is_callable($callback))//bu callback çağıralabiliyorsa demek
        {

            call_user_func($callback);
        }
else{
    //diyelim callback cağrılmadı  //router::get("/home","DENEME@ders"); diye bir işlem yaptık o zaman explode ile onu çekiyoruz



    $controller=explode("@",$callback)[0];//controllerde deneme yazar
    $method=explode("@",$callback)[1]; //method da ders yazar

    $url=explode("/",$_SERVER["REQUEST_URI"]);
    call_user_func_array(array(new $controller,$method),$url);//explode ettiğimiz için array içinde yazmaya gerek yok
}


    }


}
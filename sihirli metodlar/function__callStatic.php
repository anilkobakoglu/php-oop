<?php 


class deneme{


public static function __callStatic($name,$arguments){


	echo"$name adlı method".__CLASS__."adlı classta bulunmamaktadır";
}




}//class end



deneme::yaz();

 ?>
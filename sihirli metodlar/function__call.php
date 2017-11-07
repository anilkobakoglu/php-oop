<?php 


class deneme{



public function __call($name,$arguments){

echo"<pre>";

	echo "'$name' adlı methot '".__CLASS__."' adlı class ta bulunmamaktadır."; //eğer bu sunınıf çağrılıp içerisinde olmayan bir metot çağrılırsa böyle bir hata verir.

//print_r($arguments);


}





}//class end


$class=new deneme();

echo $class->yaz(); 
//echo $class->yaz(4,5);// eğer içine argüman girilirse yukarıda böylr çekilir: $print_r($argumants)

 ?>
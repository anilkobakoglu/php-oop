<?php 

/* 
Bu sihirli methot classı fonksiyon gibi algılanmasını sağlar yani direkt class içine değer atayabiliriz.



*/

class deneme{



public function __invoke($a){



echo "$a";//ekrana 45 yazar


}






}//class end




$class=new deneme();
$class(45);



 ?>
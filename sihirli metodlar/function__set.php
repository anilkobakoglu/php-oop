<?php 

/* 


classa dışarıdan girilen değişkene isterse izin verir istemezse vermez yada değişkenin değerini değiştirebilir.
Değişkenin ismini ve değerini de çekebilir


*/

class deneme{



public function __set($name,$arguments){


echo "girilen değişken ismi =$name <br>";
echo "Değişkene girilen değer=$arguments<br>";

echo"değişkenin ismini ve değerini değiştiriyorum=".$this->$name="ako"."<br>";
echo"eğer izin vermek isteseydim=".$this->$name=$arguments;
	
}




}//class end


$class=new deneme();
$class->a=132456;



 ?>
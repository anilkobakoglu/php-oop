<?php 

/* 
bu methodu yazmadan örneğin direkt echo $class yapsak hata alırdık.
ama bu fonksiyondan sonra direk sadece class yazdırılmak istenirse bu method çalışır.


*/

class deneme{


public function __toString(){




return "merhaba dünya";

}









}//class end




$class=new deneme();
echo $class;



 ?>
<?php 


/*

classtan bir değişken çağrdıldığın da o değişkenin ı classta olup olmadığına bakar.


*/

class deneme{



public function __get($name){


echo"$name adlı bir değişken bu classta-<b>".__CLASS__."</b>-bulunmamaktadır";

//return null; BÖYLE YAPARSAK HATA ALMAYIZ

}


}//class end




echo (new deneme())->a;


 ?>
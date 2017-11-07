<?php 


/*

sihirli methotlar arasından sadece construct içinde fonksiyon aöabiliriz.
Bkz.maincontroller..

*/

class deneme{

	public function __construct(){



			function view($isim){

				echo "view fonksiyonuna gelen param=$isim";

			}

	}//construct end



	public function eylem(){



		return view("ako");

	}

}//class end



$class=new deneme();
$class->eylem();

 ?>
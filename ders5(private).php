<?php 
/*


class ders {

private $deger;
 
public function fizik(){			// PRİVATE OLDUĞU İÇİN CLASS DIŞINDA DEGERİ KULLANAMIYORUZ . ÖRNEĞİN PUBLİC OLSAYDI OLURDU


return"merhana dünya";


}



}

$a=new ders();
echo $a->deger;

*/
 ?>





<?php 



class ders {

private $deger;
 
public function fizik(){	


$this->deger=123456;		 // BURADA PRİVATE DEĞERİNİ CLASS İÇİNDE KULLANDIĞIMIZ İÇİN HATA ALMIYORUZ.

return $this->deger;


}



}

$a=new ders();
echo $a->fizik();


 ?>
<?php 

class ders {


	public $deger;

public function fizik ($a=false){// eğer =false yapmasaydım aşağıda bu bir fiziktir gibi bir değer girmeseydim boş kalsaydı hata verecekti


$this->deger=$a; // deger yazarken $ işareti koyulmuyor dikkat et.
return $this->deger;


}



}

$a= new ders();
echo $a->fizik("bu bir fizik dersidir");
//var_dump($a->fizik("bu bir fizik dersidir")); EK BİLGİ DİYE YAZDIM VAR_DUMP YAPARSAN KODUN SIRASINI VS GÖSTERİR İLERİDE TEKRAR DENE ;)



 ?>

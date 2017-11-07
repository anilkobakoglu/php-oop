<?php 

class ders {


	public $deger;

public function fizik ($a=false){// eğer =false yapmasaydım aşağıda bu bir fiziktir gibi bir değer girmeseydim boş kalsaydı hata verecekti


$this->deger=$a;
return $this->deger;

										//THİS İLE DEGERİN İÇİNE $A YI ATMIŞTIK YUKARIDA AŞAĞIDA BİR FONKİSYON DAHA OLUŞTURDUK MAT FONKİSYONUNDA DA ONU KULLANABİLDİK 
}

public function mat(){


return $this->deger;

}

}

$a= new ders();
 $a->fizik("bu bir fizik dersidir");
 echo $a->mat();




 ?>

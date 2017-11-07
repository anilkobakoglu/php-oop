<?php

interface kural { // BURADA BİR KURAL BELİRLİYORUZ EĞER BU KURALI BELİRLEYİP BİR SINIFTA İMPLEMENTS YAPARSAN ALTTAKİ FONKSİYONU DA EKLEMEK ZORUNDASIN


	public function fizik();
// İNTERFACEDE DEĞİŞKEN TANIMLAYAMAM.
	
}

class ders implements kural{ // İMPLEMENST YAPTIK KURAL CLASSINDA Kİ FİZİK FUNCTİONUNU ÇALIŞTIRMAM LAZIM YOKSA HATA ALIRIM.


	public function fizik(){


		return 	"bubir fizik dersidir";
	}
}


class dersler{
public function mat() {


	return "bu bir mat dersidir";

}

}


$a= new ders();
echo $a->fizik();

?>
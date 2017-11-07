<?php 

/*CLASS İLE SINIF OLUŞTURDUĞUMUZDA BİRDEN FAZLA SINIFI EXTENDS YAPAMIYORUZ BUNUNN İÇİN TRAİT KULLANIRIRIZ.
 


class A {


}

CLASS B {

}
CLASS C extends A, B { BUNU YAPAMIYORUZ

} */



trait ders1 {


	public function fizik(){

		return "bu fizik dersidir";
	}
}


trait  ders2 {

public function mat() {

	return "bu mat dersidir";
}


}

class ders3{

	public $deger=1234;
	use ders1,ders2; // extends ile bunu yapamayız ama ders1 ve ders 2 trait olduğu için USE ile bu classlardaki method ve fonksiyonları ders3 classı na çekiyoruz.

	public function ingilizce(){

		return self::fizik();  // USE yaptığım için ders1 ve ders2 fonksiyonları bu classda da olduğu için SELF yapıyorum. Ekrena fizik fonksiyonunu  yazdırıyorum

	}
}

class ders4 extends ders3 {


	public function bilisim(){

	echo $this->deger; echo"<br>";
	return parent::mat(); // kendi classında matematik fonksiyonu olmadığı için parent yapıyoruz. Karıştırırsan bir parent yap bak olmadı self ;)
		
	}
}



$a= new ders4();
echo $a->bilisim(); // Ekrana bu bir mat dersidir yazar.

/*$a= new ders3();
echo $a->ingilizce() BÖYLE OLSAYDI EKRANA BU BİR FİZİK DERSİDİR YAZARDI.
*/
 ?>

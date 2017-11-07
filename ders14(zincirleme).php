<?php 

class bir {


public function ad(){

echo"bu isim <br />";
	return $this;


}


	public function soyad(){

echo"bu soy isim <br>";
		return $this;
	
}


	public function no(){

echo"buda no";
	
}
}

$a= new bir();
echo $a->ad()->soyad()->no(); // böyle yanyana yazarken return this yapman gerekiyor no da yok o en sonda olduğu için gerek yok yazsanda sıkıntı olmaz

 ?>
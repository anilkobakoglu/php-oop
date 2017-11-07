<?php 

class ders {

protected $deger; 
}


class dersler extends ders {  // ders classındaki tüm metod ve fonksiyonları dersler classında tanı demektir. public yapsaydık sıkıntı olmazdı private yapsak kullanamazdık ama protected yapınca extends özelliğini yaparak bir classtaki verileri istediğimiz bir classta kullanabiliriz.


public function fizik(){

$this->deger=123456;

return $this->deger;

}

}

$a=new dersler();
echo $a->fizik();

 ?>

<?php

abstract class  kural {

public $deger; // ABSTRATCT DA DEĞER TANIMLAYABİLİYORUZ

abstract public function fizik($b);

}


class mat extends kural { // ABSTRACT DA İMPLEMENTS KULLANMAYA GEREK YOKRUR


public function fizik($b){

	

	$this->deger=$b;
	return $this->deger;

}
}
$c=new mat();
echo $c->fizik("merhaba dünya");



?>
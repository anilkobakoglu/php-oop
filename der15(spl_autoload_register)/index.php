<?php 



spl_autoload_register(function($class){   //SÜREKLİ İNCLIUDE ETMEK YERİNE TEK SEFERDE BÖYLE HAL EDİYORSUN FAKAT SAYFAİSMİ İLE CLASS İSMİ AYNI OLMALI ÖRN. BURADA BİR SAYFASININ İÇİNDE BİR CLASSI VAR

	include_once $class.".php";
});

$c= new bir();
echo $c->a();
echo"<br />"; 

$d= new iki();
echo $d->b();


 ?>

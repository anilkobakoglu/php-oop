<?php 

class DERS {


public static  function topla(){



//static $deger; STATİC DEĞİŞKENLER İLK VERDİĞİN DEĞERİ KABUL EDER EĞER BÖYLE YAPSAYDIK ÇIKTI OLARAK 1 1 1 YAZACAKTI
//$deger=0;

static $deger=0; // BURADA İLK DEĞER OLARAK VERDİĞİMİZ İÇİN 1 2 3 YAZDI.. fONKSİYON BİR KERE ÇALIŞTIKTAN SONRA BU SATIR
$deger=$deger+1;
return $deger;



}




}

echo DERS::topla(); echo"<br />";
echo DERS::topla(); echo"<br />";
echo DERS::topla(); echo"<br />";




 ?>

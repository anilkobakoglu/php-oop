

<?php 

include_once 'cek.php'; // bu sayfadaki bilgileri çekiyoruz
include_once 'deneme.php';

use \ders1\ders; // namespace si ders1 class ı ders olanı çek.
$a=new ders();
echo $a->mat();

echo" <hr> ";



use \ders2\ ders as ako; // iki tane ders adında class olduğu için direkt aynısını yazamadık her ne kadar namespaceleri farklı olsa da bunun için as methodunu kullanıyoruz 
$b= new ako(); // as yerine yazdığımızı burada kullanıyoruz
echo $b->fizik();






?>
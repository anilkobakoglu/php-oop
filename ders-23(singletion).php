<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 23.8.2017
 * Time: 17:44
 */

class database
{
 private static $intstance;
    public function __construct()
    {

        echo" db connect <br>";
    }


     static function singletion(){

if(!self::$intstance){

    self::$intstance=new self();//new self bu sınıf demek yani "database"
}
         return self::$intstance;
     }

    public function get()
    {


        echo "bu get medtodu<br>";
    }

    public function delete()
    {


        echo "bu delete methodu <br>";
    }




}

$db = new database();
$db->delete();
$db->get();
$cc = new database();
$cc->delete();

/*ÇIKTISI
db connect
bu delete methodu
bu get medtodu
db connect
bu delete methodu
yani iki kere db connecti çekti gereksiz işlem
*/
echo"<hr>";

$db = database::singletion();
$db->delete();
$db->get();
$cc = database::singletion();
$cc->delete();

/* ÇIKTISI
db connect
bu delete methodu
bu get medtodu
bu delete methodu


*/
/* örneğin birden fazla kez veritabanına bağlanmayı önler */









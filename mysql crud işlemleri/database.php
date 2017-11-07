<?php


require "vtbaglan.php";


/*
                            SELECT İŞLEMLERİ
                              (1)
$query = $db->prepare("select * from kullanicilar where ogrenci_id=?");
$query->execute(array("0"));
$query->fetch(PDO::FETCH_ASSOC);
if ($query->rowCount()) {
    echo "<pre>";
    print_r($query->fetchall());
}
                              (2)

$query = $db->query("select * from kullanicilar", PDO::FETCH_ASSOC);
if ($query->rowCount()) {
    echo "<pre>";

    print_r($query->fetchAll());
}

                             (3)

$query = $db->prepare("select * from kullanicilar");
$query->execute();
$query->fetch(PDO::FETCH_ASSOC);
if ($query->rowCount()) {

    foreach ($query as $cek) {

        $yaz = $cek['ogrenci_id'];
        echo "$yaz<br>";
    }

}}

                                (4)


$query = $db->prepare("select * from kullanicilar where ogrenci_id=:id");
$query->execute(array(
    "id" => "8"

));

if ($query->rowCount()) {
    echo "<pre>";

    print_r($query->fetchAll());
}

                        İNSERT İŞLEMİ

                               (1)
$id = 6; $no = 62; $parola = "ako";
$query = $db->prepare("insert into kullanicilar set ogrenci_id=?, okulno=?, parola=?");
$query->execute(array($id, $no, $parola));

if ($query->rowCount()) {

    echo "kayıt işlemi başarı ile gerçekleştirildi ";

} else echo "olmadı bea";
                              (2)

$query = $db->prepare("insert into kullanicilar set ogrenci_id=:id, okulno=:no,parola=:sifre");
$query->execute(array(
    "id" => 10,
    "no" => 9,
    "sifre" => "sife"
));

if ($query->rowcount()) {

    echo "oldu";
} else
    echo "olmadı";






                               UPDATE

                               (1)
$query = $db->prepare("update kullanicilar set parola=:yeniparola where parola=:eskiparola");
$query->execute(array(

    "eskiparola" => "sifre",
    "yeniparola" => "sifreler"
));

$query->fetch(PDO::FETCH_ASSOC);
if ($query->rowCount()) {

    echo "işleminiz başarı ile gerçekleştirildi";

} else echo "olmadı";

                                   (2)
$query = $db->prepare("update kullanicilar set parola=? where parola=?");
$query->execute(array("sifre", "sifreler"));
$query->fetch(PDO::FETCH_ASSOC);
if ($query->rowCount()) {

    echo "işlemini başarı ile gerçekleştirilmiştir";

} else echo "olmadı";


                               // DELETE
                                    (1)
$query=$db->prepare("delete from kullanicilar where parola=?");
$query->execute(array("1"));
if($query->rowCount()){

    echo "işleminiz başarı ile gerçekleştirilmiştir";
}
                                    (2)

$query=$db->prepare("delete from kullanicilar where ogrenci_id=:id");
$query->execute(array(
    "id"=>"7"
));
if($query->rowCount()){
            echo"silme işleminiz başarı ile gerçe..";

}

else echo"olmadı";



                    BİNDCOLUMN

$query=$db->prepare("select * from kullanicilar where ogrenci_id=? ");
$query->execute(array("11"));
if($query->rowCount()){


    $query->bindColumn("okulno",$numara);
    $query->bindColumn("parola",$sifre);
    $query->fetch(PDO::FETCH_BOUND);

    echo "ogrenci numara: $numara parola: $sifre";

}


                   // PDO::FETCH_ASSOC

$query = $db->prepare("select * from kullanicilar where ogrenci_id=?");
$query->execute(array("1",));
while ($cek = $query->fetch(PDO::FETCH_ASSOC)) {

    echo $cek["okulno"];
    echo "<br>";

   // $array=array( $cek["okulno"],$cek["ogrenci_id"]); echo"<br>";
    //print_r($array); böylede array olarak alıyoruz
}


                                                //FETCHALL()

//prepare() ve execute() ile çalıştırılan bir SQL sorgusuna ait sonuç kümesinin tüm satırlarını içeren bir dizi döndürür.
//fetchAll() bir tablodaki kayıtlı satırların sonuçlarını bir ilişkisel dizi olarak elde edebildiği gibi sayısal bir dizi
// olarak da elde eder.Ya da her iki biçimde de sonuçları karma olarak döndürebilir

$query = $db->prepare("select * from kullanicilar where ogrenci_id=?");
$query->execute(array("1"));
if ($query->rowCount()) {


    foreach ($query->fetchAll() as $cek) {

        // echo $cek["okulno"];
        echo $cek["0"];// bununla aynı şeydir. mesela id leri çekeceksek her zaman o 0dır. bunda numarada yazabiliyoruz fetchassoc da bu yok
        echo "<br>";


    }


} else echo "buna ait sonuç bulunamadı";
*/
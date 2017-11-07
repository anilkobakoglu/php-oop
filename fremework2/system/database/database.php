<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 26.8.2017
 * Time: 15:18
 */


namespace system\database;
class database
{
    private $db, $table, $findquery, $findAllquery, $selectquery, $arrayExecute, $where, $order, $limit, $deletequery
    , $insertquery, $insertName, $insertValue, $updatequery;

    private $neyi, $eski, $yeni;

    function __construct()
    {
        $this->table = static::$table;
        $this->db = new \PDO("mysql:host=localhost;dbname=okuldeneme;charset=utf8", "root", "");
    }


    /**
     * @param $id
     * @return mixed
     */
    function find($id)
    {


        $this->findquery = $this->db->prepare("select * from $this->table where ogrenci_id=:id");
        $this->findquery->bindParam("id", $id);
        $this->findquery->execute();
        return $this->findquery->fetch(\PDO::FETCH_ASSOC);

    }


    /**
     * @param $id
     * @return array
     */
    function findall($id)
    {


        $this->findAllquery = $this->db->prepare("select * from $this->table where ogrenci_id=:id");
        $this->findAllquery->bindParam("id", $id);
        $this->findAllquery->execute();
        return $this->findAllquery->fetchAll();


    }


    /**
     * @return array
     */
    function select()
    {


        $this->selectquery = $this->db->prepare("select * from $this->table $this->where $this->order $this->limit");
        $this->selectquery->execute($this->arrayExecute);
        return $this->selectquery->fetchAll();


    }


    /**
     * @param $name
     * @param $value
     * @return $this
     */
    function where($name, $value)
    {

        if (!$this->where) {//where boş ise

            $this->where = " where $name=? ";
            $this->arrayExecute[] = $value;//executenin içini dolduruyoruz
        } else {

            $this->where .= " and $name=?"; // varsa nokta ile devamını getiriyoruz
            $this->arrayExecute[] = $value;

        }


        return $this;//zincirleme method olduğu için bunu yapmak gerek.
    }


    /**
     * @param string $asccolumn
     * @return $this
     */
    function asc($asccolumn = "ogrenci_id")
    {//içi boşsa id ye göre yap


        $this->order = " order by $asccolumn asc ";
        return $this;
    }

    /**
     * @param string $desccolumn
     * @return $this
     */
    function desc($desccolumn = "ogrenci_id")
    {


        $this->order = " order by $desccolumn desc ";
        return $this;
    }

    /**
     * @return bool
     */
    function delete()
    {
        $this->deletequery = $this->db->prepare("delete from $this->table $this->where");
        $this->deletequery->execute($this->arrayExecute);
        if ($this->deletequery->rowCount()) {

            echo "silme işlemi başarı ile gerçekleştirildi";

        } else {
            echo"silme işleminde bir hata oluştu";
        }
    }

    /**
     * @param $baslangic
     * @param bool $bitis
     * @return $this
     */
    function limit($baslangic, $bitis = false)
    {
        if (!$bitis) {

            $this->limit = " limit $baslangic";
            return $this;
        } else {
            $this->limit = " limit $baslangic, $bitis";
            return $this;

        }


    }


    /**
     * @param array $insert
     */
    public function insert(array $insert)
    {
        $this->insertName = implode(',', array_keys($insert));//"ogrenci_id"=>335,"okulno"=>250,"parola"=>22 ilk değerleri alır
        $this->insertValue = implode(',', array_fill(0, count($insert), '?'));//array değer sayısı kadar ? koyar

        $this->insertquery = $this->db->prepare("INSERT INTO " . $this->table . " ($this->insertName) VALUES ($this->insertValue)");
        $this->insertquery->execute(array_values($insert));//ikinci değerleri alır.
        if ($this->insertquery->rowCount()) {
            echo "kaydnınız başarı ile gerçekleştirilmiştir";
        } else {
            echo "kayıt sırasında bir hata olmuştur tekrar gözden geçir";
        }


    }


    /**
     * @return bool
     */
    function update()
    {

        $this->updatequery = $this->db->prepare("update $this->table set $this->neyi where $this->neyi");
        $this->updatequery->execute(array($this->yeni, $this->eski));
        if ($this->updatequery->rowCount()) {

            echo "güncelleme başarı ile tamamlanmıştır";

        } else {
            echo "güncelleme sırasında bir hata oldu";
        }
    }

    /**
     * @param $neyi
     * @return $this
     */
    function neyi($neyi)
    {

        $this->neyi = " $neyi=?";

        return $this;


    }

    /**
     * @param $eski
     * @return $this
     */
    function eski($eski)
    {


        $this->eski = $eski;
        return $this;
    }

    /**
     * @param $yeni
     * @return $this
     */
    function yeni($yeni)
    {


        $this->yeni = $yeni;
        return $this;
    }


}


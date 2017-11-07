<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 24.8.2017
 * Time: 14:13
 */

//burada ver tabanı işlemlerini yapacağız
namespace system\crud;
trait crud

{


    public function get($a){


return "$this->table $a";
    }

}
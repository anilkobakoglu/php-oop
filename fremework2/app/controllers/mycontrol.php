<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 26.8.2017
 * Time: 15:29
 */

namespace app\controllers;

use app\models\mymodel;

use app\controllers\maincontroller;

class mycontrol extends maincontroller
{

    public function anasayfa()
    {

        echo "<pre>";

        $a= (new mymodel())->where("ogrenci_id",5)->select();


        return view("anasayfa",compact("a") );
    }
    public function deneme()
    {

        echo "<pre>";

        $b= (new mymodel())->where("ogrenci_id",5)->select();


        return view("anasayfa",compact("b") );
    }
}
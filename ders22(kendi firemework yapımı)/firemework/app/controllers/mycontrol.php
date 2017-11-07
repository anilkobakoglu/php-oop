<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 22.8.2017
 * Time: 15:24
 */

class mycontrol extends maincontroller
{
public $degisken;
    public function method(){
$data=(new deneme())->get();
$degisken=123456;
        return  view("sayfa",compact("degisken","data"));
    }





    public function selam(){
$degisken="ako mine zelite";

        return  view("selam",compact("degisken"));
    }
}
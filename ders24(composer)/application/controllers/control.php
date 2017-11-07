<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 24.8.2017
 * Time: 14:04
 */



namespace app\controllers;
use app\models\mymodel;
class control
{

    public function deneme(){


        return (new mymodel())->get("132");
    }

}
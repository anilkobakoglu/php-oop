<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 26.8.2017
 * Time: 23:21
 */

namespace app\controllers;

use app\controllers\mycontrol;
class maincontroller
{


    public function __construct(){

         function view($file,$degisken=false){

            is_array($degisken) ? extract($degisken): ''; // değişken arraysa extract ediyor

            include_once "app/views/$file.php";

        }




    }

}
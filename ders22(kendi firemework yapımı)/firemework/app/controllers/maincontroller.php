<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 22.8.2017
 * Time: 15:36
 */

class maincontroller
{


  public function __construct(){

      function view($file,$degisken=false){

is_array($degisken) ? extract($degisken): ''; // değişken arraysa extract ediyor
          include_once "app/views/$file.php";

      }




  }

}
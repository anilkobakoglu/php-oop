<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 22.8.2017
 * Time: 14:34
 */



router::get("selam",function(){ //urlye selam yazarsan alttaki adrese gider

    (new mycontrol())->selam();

});

router::get("controller", function(){

    (new mycontrol())->method();

}

);

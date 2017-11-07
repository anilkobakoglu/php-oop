<?php

class other{

    public function other(){

        return "bu other fonksiyonu";
    }
}

class request{

    public function input(){


        return "bu input fonksiyonu";
    }

}


class controller{

    public function eylem(other $a){ //$a dan önceki class ismi haricinde işlem yapılmaz
        return $a->other();
    }

}

$a= new controller();
echo $a->eylem(new other());
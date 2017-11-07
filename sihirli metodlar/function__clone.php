<?php 


class deneme{


public function __clone(){


	echo"bu clone methotudur.";
}


}//class end



$class=new deneme();
$b=clone $class;



 ?>
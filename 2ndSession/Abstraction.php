<?php

abstract class a{
var $a;
var $b;

function abstraction($a,$b){
    $this->a=$a;
    $this->b=$b;

}
abstract function show();
}

class b extends a{

    function show(){
        echo $this->a."<br>";
        echo $this->b;

    }
}

$obj=new b();
$obj->abstraction(3,4);
$obj->show();


?>
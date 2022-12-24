<?php

class a{

    var $a;
    var $b;

function get(){
        echo "A variable values :".$this->a."<br>"."A variable values :".$this->b."<br>";
    }
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;

    }
    function show(){
        echo $this->a."<br>".$this->b;
    }
}

$obj=new a("ram","Azamgarh");
$obj->get();
$obj->show();



?>
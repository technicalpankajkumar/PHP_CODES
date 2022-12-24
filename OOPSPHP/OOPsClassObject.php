<?php

class calculation{
    public $a,$b,$c,$d;

    function sum(){
        $this->d=$this->a+$this->b;
        return $this->d;
    }
    function sub(){
        echo $this->c=$this->a-$this->b;
    
    }
}

$object=new calculation();
$object->a=10;
$object->b=20;

echo $object->sum()."<br>";

$object->sub();

?>
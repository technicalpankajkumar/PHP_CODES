<?php
class Constructoruse{
public $a, $b, $c;

function __construct($a, $b){
    echo "Hello constructor <br>";
    
    echo "First value is : ".$this->a=$a."<br>";
    echo "Second value is :".$this->b=$b."<br>";
}
function division(){
    $this->c=$this->a/$this->b;
    return $this->c;
}

}
$object=new Constructoruse(10,20);


 echo "Division value is : ".$object->division();

?>
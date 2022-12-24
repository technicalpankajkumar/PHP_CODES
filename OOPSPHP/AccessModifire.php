<?php

class AccessModifire{

    protected $name;

    // function __construct($cons){
    //     echo $this->name=$cons;
    // }
    protected function get(){
        echo"this is show";
    }

}
class access extends AccessModifire{

    public function show(){
        echo"<br>this is show\n";
    }
}
$a=new access();
$a->name="chacha";
$a->show();



?>
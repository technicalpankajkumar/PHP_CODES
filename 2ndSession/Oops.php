<?php
// Encapsulation in oops php

class Encapsulet{

    private $id;
    private $name;
    private $branch;
    private $year;
    private $mobile;

    function set($a,$b,$c,$d,$e){
        $this->id=$a;
        $this->name=$b;
        $this->branch=$c;
        $this->year=$d;
        $this->mobile=$e;
        
    }
    public function get(){
        echo $this->id;
        echo "<br>". $this->name;
        echo "<br>".$this->branch;
        echo"<br>". $this->year;
        echo"<br>". $this->mobile;
    }
}

$obj=new Encapsulet();
$obj->set(1,"pankaj kumar","computer science",2022,8572931748);
echo $obj->get();


?>
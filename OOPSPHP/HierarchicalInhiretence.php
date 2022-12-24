<?php

class parentclass{
    function show(){
        echo "this is parent class<br>";
    }
}
class child1 extends parentclass{
    function get(){
        echo "this is child1 class<br>";
    }
}
class child2 extends parentclass{
    function set(){
        echo "this is child2 class";
    }
}

$obj=new child1();
$obj->show();
$obj->get();
$obj2=new child2();
$obj2->show();
$obj2->set();
?>
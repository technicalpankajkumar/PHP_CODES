<?php

class a{

    function show(){
        echo "this is parent class<br>";
    }
}
class b extends a{

    function set(){
        echo "this is child b class <br>";
    }
}
class c extends b{

    function get(){
        echo "this is child c class <br>";
    }
}

$obj=new c(); 
$obj->show();
$obj->set();
$obj->get();
?>
<?php
abstract class parentone{
    abstract function show();

    public function showme(){
        echo"hello i am abstract class public function<br>";
    }
}
class child extends parentone{
    public function show(){
        echo"i am child show function";
    }

}
$obj=new child();
$obj->showme();
$obj->show();

?>
<?php

class Encapsule{

    private $userId;
    private $password;

    public function updates($userId,$password){
        echo"function to updates user :- ".$userId."<br>";
        echo"function to updates  password :- ".$password;

        echo "<br>";
    }

    public function course($userId){

        echo $this->userId=$userId;

    }
}

$obj=new Encapsule();
$obj->updates("Pankaj","12345678");
$obj->course("pankajkumar");
?>
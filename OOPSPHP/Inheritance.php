<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        echo "<h4>Employee Profile</h4>";
        echo "Employee name : ".$this->name."<br>";
        echo "Employee age : ".$this->age."<br>";
        echo "Employee salary : ".$this->salary."<br>";
    }
}
class manager  extends employee {

    public $travelAliences=1000;
    public $phoneCharge=240;
    public $totalSalary;

    function info(){
        $this->totalSalary=$this->travelAliences + $this->phoneCharge+$this->salary;
        echo "<h4>Manager Profile</h4>";
        echo "Employee name : ".$this->name."<br>";
        echo "Employee age : ".$this->age."<br>";
        echo "Employee salary : ".$this->totalSalary."<br>";
}
}
$obj=new manager("Pankaj",21,2000000);
$obj->info();


?>
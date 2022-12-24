
<?php
session_start();
?>
<?php

class abc{
    public $a;

    public function __construct(){
        echo "<br>This is Constructor function<br>";
    }
    public function hello(){
        echo "This is Hello function<br>";
    }
    public function __destruct(){
        echo "This is Destructor function<br>";
    }
}
$ob=new abc(10);

$ob->hello();

echo $_SESSION["user"]."<br>";

session_unset();
     session_destroy();
     echo "Session is destroy<br>";

// Just example in destructor methode

// class Mysql{
    
//     private $conn;

//     public function __construct(){
//         $this->conn=mysqli_connect();
//     }
//     public function insert(){
//         echo"hello everyone";
//     }
//     public function __destruct(){
//         mysqli_close($this->conn);
//     }
// }

?>
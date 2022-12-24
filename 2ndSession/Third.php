<?php
echo"<h4>Indexes array in php</h4>";

$a1=array(1,"pankajkumar",4,9.0);

$a1[5]="jay";
$a1[6]=99;
$a1[7]="Kisan";
$a1[8]=44;
$a1[9]="member";

echo" <pre>";
print_r($a1);
echo "</pre>";

echo "<h4>Associated array in php</h4>";

$b=array("data1"=>"Pankaj kumar","data2"=>"Arun kumar","data3"=>"Kulvant kumar");

echo" <pre>";
print_r($b);
echo "</pre>";

echo "<h4>Multidimensional array in php</h4>";

$c=array(
    array("pankaj kumar","Akash kumar","Vikas kumar"),
    array(1,2,3,4,5,6,7,8),
    array(4.5,3.3,5.44,24.33)
);
echo" <pre>";
print_r($c);
echo "</pre>";

echo "<h4>Multidimensional Associative array in php</h4>";

$d=array(
    "NAME"=>array("pankaj kumar","Akash kumar","Vikas kumar"."Arun kumar","Kulwant Gautam"),
    "ID"=>array(1,2,3,4,5),
    "VALUES"=>array(4.5,3.3,5.44,24.33,5.5)
);
echo" <pre>";
print_r($d);
echo "</pre>";

echo "<h4>echo one by one all array in php</h4>";

echo $a1[2]."<br>";
echo $b["data2"]."<br>";
echo $c[1][2]."<br>";
echo $d["NAME"][0];

echo "<h4>echo one by one all array using for each loop</h4>";

foreach($c as $j=>$l){
    foreach($l as $s=>$m){
        echo" <pre>";
    echo "key :".$j." key :".$s," ". $m;
    echo "</pre>";
}}






?>
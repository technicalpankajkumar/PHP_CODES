<?php
// Array functions
echo "<h4>Array Search function. value is present its return 1 another _:</h4>";
$a1=array(1,"pankajkumar",4,9.0);

echo "Search value: Pankajkumar <br>";
$a=array_search("pankajkumar",$a1);

echo "Search is: ".$a;

echo "<h4>Array Count function:</h4> ";

$b=count($a1);
echo $b;


echo "<h4>Array replace function:</h4> ";

$c=array(9,2,3,8,4);
echo "<h6>Actual array is :</h6> ";
print_r($c);
echo"<br>";
echo"<br>";
echo "Replaced array <br>";
$j=array_replace($c,$a1);
print_r($j);

echo "<h4>Array reverse function:</h4> ";

$r=array_reverse($c);

print_r($r);


echo "<h4>Array sort function:</h4> ";

 $sort=sort($c)."<br>";

print_r($c);




?>"
<?php

//sum of all even numbers from 0 to 1200

$start = 0;
$stop = 1200;
$sum = 0;

for ($i=$start; $i <= $stop; $i = $i + 2) { 
	$sum = $sum + $i;
}
echo $sum;
echo "<p></p>";
//sum of all odd numbers from 20 to 800
$start1 = 19;
$stop1 = 801;
$sum1 = 0;

for ($j=$start1; $j < $stop1 ; $j=$j+2) { 
	$sum1 = $sum1 + $j;
}
echo $sum1;
echo "<p></p>";
echo "<p></p>";

//sum of all numbers from 1000 to 1;

$start2 = 1000;
$stop2 = 1;
$sum2 = 0;
for ($k=$start2; $k >$stop2 ; $k--) { 
	$sum2 = $sum2 + $k;
}
echo $sum2;


echo "<p></p>";
$start3 = 1;
$stop3 = 1000;
$sum3 = 0;
for ($x=$start3; $x <$stop3 ; $x++) { 
	$sum3 = $sum3 + $x;
}
echo $sum3;



?>
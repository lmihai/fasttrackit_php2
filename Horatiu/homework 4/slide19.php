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







?>
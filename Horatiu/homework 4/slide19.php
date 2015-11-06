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
$start1 = 20;
$stop1 = 800;
$sum1 = 0;

for ($j=$start1; $j < $stop1 ; $j++) { 
	if ($j %2 != 0) {
		$sum1 = $sum1 + $j;
	}
}
echo $sum1;
echo "<p></p>";
echo "<p></p>";

//sum of all numbers from 1 to 1000;

$start2 = 1000;
$stop2 = 1;
$sum2 = 0;
for ($k=$start2; $k >=$stop2 ; $k--) { 
	$sum2 = $sum2 + $k;
}
echo $sum2;


echo "<p></p>";
$start3 = -99;
$stop3 = 99;
$product = 1;
for ($x=$start3; $x <=$stop3 ; $x++) { 
	$product *= $x;
}
echo $product;

//while loops - same exercise - slide 19
//sum of all even numbers from 0 to 1200
echo "<p></p>";
$i = 0;
$end = 1200;
$sum = 0;

while ( $i <= $end) {
 	if ($i %2 == 0) {
 		$sum+= $i;
 	 }
 	 $i++;
 } 
echo $sum;
echo "<p></p>";

//sum of all odd numbers from 20 to 800
$i =  20 ;
$stop = 800;
$sum = 0;

while ( $i  <=$stop) {
	if ($i %2 != 0) {
		$sum += $i;
	}
	$i++;
}
echo $sum;
echo "<p></p>";
//sum of all numbers from 1000 to 1

$i = 1000;
$stop = 1;
$sum = 0;

while ( $i >= $stop) {
	$sum += $i;
	$i--;
}
echo $sum;	
echo "<p></p>";

//the product of the numbers -99 and +99
$start = -99;
$stop = 99;
$product = 1;

while ($start <= $stop) {
	$product = $product * $start;
	$start++;
}
echo $product;
echo "<p></p>";

$lista = array('gogosi', 'cipsuri', 'bomboane', 'miere', 'jeleuri', 'banane');
for ($i=0; $i < count($lista) ; $i++) { 
	echo $lista[$i];
	echo "<br>";
}









?>
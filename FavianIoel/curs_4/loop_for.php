<?php
//list 1-10 
for ($i=1; $i<11 ; $i++) { 
	echo $i ;
	echo "<br>";
}

//Calculate the sum of numbers 1 to 3 :
print("<strong>---------------</strong>"."<br>");
$start = 1;
$end = 3;
$sum  = 0;

for ($i=$start; $i <= $end ; $i++) { 
	$sum = $sum + $i ;
}
print $sum . "<br>";


//Calculate the sum of numberrs 1 to 1000:
print("<strong>---------------</strong>"."<br>");

$start = 1;
$end = 1000;
$sum  = 0;

for ($i=$start; $i <= $end ; $i++) { 
	$sum = $sum + $i ;
}
print $sum . "<br>";
//========================================================
//========================================================
//----------------=======EXERCISES=======-----------------
//=========================================================
//=========================================================
print("=========="."<strong>EXERCISES</strong>"."============<br>");

// 1. Find out the sum of all even numbers from 0 to 1200.

echo "<strong><p>1) Find out the sum of all even numbers from 0 to 1200.</p></strong>";

$start = 0;
$end  = 1200;
$sum = 0;

 for($i = $start; $i <= $end; $i ++)  {

     if($i % 2 == 0) {
			$sum += $i;
			}
 }
		echo  "Sum = ".$sum.'<br>';


// 2. Find out the sum of all odd numbers from 20 to 800.

echo "<strong><p>2) Find out the sum of all odd numbers from 20 to 800.</p></strong>";
		
 $sum = 0;

for($i=20; $i <= 800; $i ++) {
	if($i % 2 != 0) {
			$sum += $i;
			}
		}
		print   "Sum = ".$sum.'<br>';


// 3. Find out the sum of all numbers from 1000 to 1.
echo "<strong><p>3) Find out the sum of all numbers from 1000 to 1.</p></strong>";

$start = 1000;
$end = 1;
$sum = 0;

for ($i=$start; $i>=$end ; $i--) { 
	$sum += $i ;
}
echo "Sum = ".$sum."<br>";

// 4. Find out the product of all numbers from -99 to 99 .
echo "<strong><p>4) Find out the product of all numbers from -99 to 99.</p></strong>";

$start= -99 ;
$end= 99;
$product = 0;

for ($start ; $start<=$end; $start++){
	$product *= $start ;
}
 echo "Product = ".$product;

?>

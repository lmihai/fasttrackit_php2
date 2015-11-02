<?php

echo('<strong><h1>Loops: WHILE</h1></strong>');


$counter = 3;

while ( $counter>=1) {

echo $counter. '<br>';
$counter--;
                 

}

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

while ( $start <= $end) {

	 
	         if ($start % 2 == 0) {
	         		$sum += $start;
	         }
$start++;  
	
}
echo  "Sum = ".$sum.'<br>';

		


// 2. Find out the sum of all odd numbers from 20 to 800.

echo "<strong><p>2) Find out the sum of all odd numbers from 20 to 800.</p></strong>";
		
$start = 20;
$end  = 800;
$sum = 0;

while ( $start <= $end) {

	 
	         if ($start % 2 != 0) {
	         		$sum += $start;
	         }
$start++;  
	
}
echo  "Sum = ".$sum.'<br>';

// 3. Find out the sum of all numbers from 1000 to 1.
echo "<strong><p>3) Find out the sum of all numbers from 1000 to 1.</p></strong>";

$start = 1000;
$end = 1;
$sum = 0;

while ( $start >= $end) {

   $sum += $start;
   //Am afisat tot calculul intentionat ca sa se vada calculul inceput de la 1000 !!!
   //ca sa se afiseze doar rezultatul trebuia pus "echo"-ul dupa acolada !!! 
   echo "Sum = ".$sum."<br>";
   $start--;  
	
}


// 4. Find out the product of all numbers from -99 to 99 .
echo "<strong><p>4) Find out the product of all numbers from -99 to 99.</p></strong>";

$start= -99 ;
$end= 99;
$product = 0;

while ( $start <= $end) {
  $product *= $start ;
  $start++;  
}
 echo "Product = ".$product;

?>



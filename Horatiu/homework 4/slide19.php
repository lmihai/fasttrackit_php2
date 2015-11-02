<?php

//sum of all even numbers from 0 to 1200

$start = 0;
$stop = 1200;
$sum = 0;

for ($i=$start; $i <= $stop; $i = $i + 2) { 
	$sum = $sum + $i;
}
echo $sum;








?>
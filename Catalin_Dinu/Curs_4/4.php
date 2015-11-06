<?php
$start =  0;
$end = 1200;
$sum = 0;
for ($i = $start; $i <= $end; $i++) {
	if ($i % 2 == 0) {
	$sum = $sum + $i;
	}
}
echo $sum;
?>
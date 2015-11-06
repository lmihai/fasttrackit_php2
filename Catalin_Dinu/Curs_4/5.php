<?php
$start =  0;
$end = 20;
$sum = 800;
for ($i = $start; $i <= $end; $i++) {
	if ($i % 2 != 0) {
	$sum = $sum + $i;
	}
}
echo $sum;
?>
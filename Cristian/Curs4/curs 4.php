<?php
	$sum = 0;
	for($i = 1; $i<1001; $i++)
	{
		$sum += $i;
	}
	print("<p> Suma este: $sum. </p>");
	$i=1;
	while($i < 100)
	{
		$i++;
		if($i == 50)
			break;
	}
	
	$i = 1;
	$end = 1000;
	$sum = 0;
	while($i <= $end)
	{
		$sum += $i;
		$i++;
	}
	echo $sum;

?>
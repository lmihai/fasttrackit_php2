<?php

	$start = 1;
	$end = 3;
	$sum = 0;
	for ($i = $start; $i <= $end; $i++) { 
		$sum =$sum + $i;
	}

	print $sum;

	$start = 1;
	$end = 1000;
	$sum = 0;
	for ($i = $start; $i <= $end ; $i ++) {
		$sum += $i;
	}
	print "<p>$sum</p>";

	$i = 1;
	$end = 1000;
	$sum = 0;
	while ($i <= $end) {
		$sum += $i;
		$i++;
	}
	print"<p>$sum</p>";

	$colors = array("red", "blue", "green");
	print $colors[1];
	//$colors = array(1 => "red", "blue", "green");
	print ("<br>" . $colors[1]);
	print_r($colors);
	echo '<br>';
	$team = array();
	$team['PM'] = 'John';
	$team['Developer'] = 'Jack';
	$team['Tester'] = 'Mike';
	foreach ($team as $key => $value) {
		echo $key;
		echo ': ';
		echo $value;
		echo '<br>';
	}

?>



 
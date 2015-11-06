<?php

$players = array();
$players[] = array('first_name' => 'John','last_name' => 'Doe','tickets' => array(2,34,23,44,14,25));
$players[] = array('first_name' => 'Jane','last_name' => 'Foo','tickets' => array(7,38,22,11,9,33));
$players[] = array('first_name' => 'Elvis','last_name' => 'Peanutbutter','tickets' => array(5,43,21,19,15,4));

$players[2]['tickets'][] = "1";

for ($i = 0; $i < 6 ; $i++) { 
	unset($players[1]['tickets'][$i]);
}

for ($i=0; $i < count($players) ; $i++) { 
	echo $players[$i]['first_name'];
	echo " ";
	echo count($players[$i]['tickets']);
	echo "<br>";
}

$sum = 0;
for ($i = 0; $i < count($players); $i++) { 
	for ($j=0; $j < count($players[$i]['tickets']); $j++) { 
		$sum += $players[$i]['tickets'][$j];
	}
}

echo $sum;
echo "<br>";

$max=0;
for ($i = 0; $i < count($players); $i++) { 
	for ($j=0; $j < count($players[$i]['tickets']); $j++) { 
		if ($players[$i]['tickets'][$j] > $max) {
			$max = $players[$i]['tickets'][$j];
		}
	}
}
echo $max;
echo "<br>";
print_r($players);
?>
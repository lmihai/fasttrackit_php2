<?php
$array = array(2,3,1,5,4);

for ($i=0; $i < 5; $i++) { 
	for ($j=0; $j < 5; $j++) { 
		if ($array[$i] < $array[$j]) {
			

			$k=$array[$i];
			$array[$i]=$array[$j];
			$array[$j]=$k;
		}
	}
}
print_r($array);


?>
<?php
/*Write a program that prints the numbers from 1 to 100. But for multiplies of three print "Fast" instead of the
number and for the multiplies of 5 prints "Track". For numbers which are multiplies of both 3 and 5 print "Fasttrack"*/

$start = 1;
$stop = 100;
$multiplies_of_3 = 3;
$multiplies_of_5 = 5;
$multiplies_of_both35 = 15;

for ($i=$start; $i <= $stop ; $i++) 
{ 
	if ($i == $multiplies_of_both35) {
		$multiplies_of_3 = $multiplies_of_3 + 3;
		$multiplies_of_5 = $multiplies_of_5 + 5;
		$multiplies_of_both35 = $multiplies_of_both35 + 15;
		echo "Fasttrack".$i."<br>";
	}	
	elseif ($i == $multiplies_of_5) {
		$multiplies_of_5 = $multiplies_of_5 + 5;
		echo "Track".$i."<br>";
	}
	elseif ($i == $multiplies_of_3) {
		$multiplies_of_3 = $multiplies_of_3 + 3;
		echo "Fast".$i."<br>";
	}	
}

?>

<?php
//sa adun numerele impreuna

$array1 = {1, 2, 3, 4, 5, 6, 7};
$array2 = {1, 2, 3, 4, 5, 6, 7};
$array3 = ();

for ($i=0; $i < count($array1); $i++) 
{ 
	for ($j=0; $j < count($array2); $j++)
	{ 
		if ($i == $j) 
		{
			$sum = $array1[$i] + $array2[$j];
			$array3[] = $sum;		
		}
		
	}
}
	for ($i=0; $i < count($array3) ; $i++) 
	{ 
		echo "Suma numerelor ".$array3[$i]."<br>";
	}






?>
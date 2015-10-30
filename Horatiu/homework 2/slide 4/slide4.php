<?php

$a = 3;
$c = 21;
$e = 1;


//Comparandu-le aceste variabile, sa fac astfel incat sa le printez in ordine crescatoare 

$numbers = array($a, $c, $e);
sort($numbers);

$lista = count($numbers);
for ($i=0; $i < $lista; $i++) { 
	echo $numbers[$i];
}






?>
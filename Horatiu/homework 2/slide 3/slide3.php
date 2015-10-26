<?php

$x = 5;
$y = 6;

//Subpunctul 1
 $z1 = !($x > 6);

if ($z1) {
	echo "Se citeste 'Negatia ca x e mai mare ca 6' ";
} else {
	echo "Se citeste 'Negatia ca x nu e mai mare ca 6' ";
}

echo "<p></p>";
//Subpunctul 2

if ($x==6 && $x==5) {
	echo "Acestea sunt egale";
} else {
	echo "Acestea nu sunt egale";
}
echo "<p></p>";

//subpunctul 3 

switch ($x == 6 || $x ==5) {
	case $x ==6 :
		echo "Numarul este 6";
		break;
	case $x==5:
		echo "Numarul este 5";
		break;
	default:
		echo "Nici unul dintre acestea";
		break;
}

echo "<p></p>";
//subpunctul 4

switch ($x>-1 && $y<10) {
	case $x>-1:
		echo "X este mai mare decat -1";
		break;
	case $y<10:
		echo "Y este mai mic decat 10";
		break;
	case ($x>-1 && $y<10):
		echo "Ambele sunt mai mare decat -1, respectiv mai mic decat 10";
		break;
	default:
		echo "Nici unul nu corespunde";
		break;
}












?>
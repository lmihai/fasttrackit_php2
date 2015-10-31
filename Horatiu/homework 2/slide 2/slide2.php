<?php
//Slide-ul numarul 2 al temei :

$a = true ; 
$b = false ; 
$c = 1;
$d = 0;
//exemplul 1
if (!($a) && $b) {
	echo " pozitiv";
}
else {
	echo "negativ";
}

echo "<p></p>";
//exemplul 2

if ($a || $b) {
	echo "A sau B ?";
} 

//exemplul 3

$x1 =(!$a || $b); 

if ($x1) {
	echo "Rezultatul subpunctului 3";
}
//irelevant
echo "<p></p>";

//exemplul 4   

if ($a === $c ) {
 	echo "A este egal cu C si ca functie";
 } else {
 	echo "A nu este egal cu C";
 }
  
//Exemplul 5

echo "<p></p>";


 if ($a && $c || $d) {
 	echo "Exemplul numarul 5 functioneaza";
 }

//Exemplul 6 
echo "<p></p>";
 $x2 = !($c) == $b;

 if ($x2) {
 	echo "Exemplul numarul 6 functioneaza";
 } else {
 	echo "Negativ...";
 }

 //Exemplul 7 
 echo "<p></p>";
 
if ($a == $c) {
	echo "A si C  s-au demonstrat a fi egale";
} else {
	echo "A si C s-au demonstrat a nu fi egale";
}

echo "<p></p>";

//Exemplul 8 

$x3 = !($b) === $c;

if ($x3) {
	echo "Este egala afirmatia din subpuctul 8";
} else {
	echo "Nu este egala afirmatia din subpunctul 8";
}

echo "<p></p>";

//Exemplul 9

$x4 = $a || !($b);

if ($x4) {
	echo "Subpunctul 9 este relevant";
}


















?>
<?php
$a = true;
$b = false;
$c = 1;
$d = 0;
// not ($a) and $b;   - false;
if ((!($a) && $b) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// $a or $b;          - true;
if (($a || $b) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// not($a or $b);     - false;
if (!($a || $b) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// $a === $c;         - false;
if ( $a === $c) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// $a and $c or $d;  - true;
if (($a && $c || $d) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// not($c) == $b;     - true;
if ( !($c) == $b) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// $a == $c;          - true;
if ($a == $c) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// not($b) === $c;    - false;
if ( !($b) === $c) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// $a or not($b);     - true;
if (($a || !($b)) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
?>
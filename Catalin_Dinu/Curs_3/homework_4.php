<?php
$a = 3;
$c = 21;
$e = 1;
if ($a < $c && $c < $e) {
	echo $a . ", " . $c . ", " . $e ."<br>";
}
elseif ($a < $e && $e < $c) {
	echo $a . ", " . $e . ", " . $c ."<br>";
}
elseif ($c < $e && $e < $a) {
	echo $c . ", " . $e . ", " . $a ."<br>";
}
elseif ($c < $a && $a < $e) {
	echo $c . ", " . $a . ", " . $e ."<br>";
}
elseif ($a < $c && $c > $e) {
	echo $e . ", " . $a . ", " . $c ."<br>";
}
else {
	echo $e . ", " . $c . ", " . $a ."<br>";
}



// a a c c e e
// c e e a a c
// e c a e c a
?>

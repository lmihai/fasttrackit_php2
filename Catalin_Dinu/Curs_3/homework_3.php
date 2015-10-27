<?php
$x = 5;
$y = 6;
// !(x > 6) 		  - adevarat pentru ca 5 nu este mai mare decat 6;
if (!($x > 6) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// (x == 6 && x == 5) - fals pentru ca este indeplinita doar o conditie din 2
if (($x == 6 && $x == 5) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// (x == 6 || x == 5) - adevarat pentru ca cel putin o conditie este indeplinita
if (($x == 6 || $x == 5) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
// (x >-1 && y < 10)  - adevarat pentru ca sunt indeplinite ambele conditii
if (($x > -1 && $y < 10) == true) {
	echo "true" . "<br>";
}
else {
	echo "false" . "<br>";
}
?>
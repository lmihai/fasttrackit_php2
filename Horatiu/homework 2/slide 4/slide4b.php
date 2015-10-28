<?php


$a = 3;
$b = 21;
$c = 1;

if (($a > $b) && ($a < $c)) {
	print($b.', &nbsp'.$a.', &nbsp'.$c);
}
elseif (($a > $c) && ($a < $b)) {
	print($c.', &nbsp'.$a.', &nbsp'.$b);
}
elseif (($a > $c) && ($c < $b)) {
	print($c.', &nbsp'.$b.', &nbsp'.$a);
}
elseif (($a < $c) && ($c < $b)) {
	print($a.', &nbsp'.$c.', &nbsp'.$b);
}


 else {
	echo "Nimic nu e bun si trebuie sa te verifici din nou.";
}



?>
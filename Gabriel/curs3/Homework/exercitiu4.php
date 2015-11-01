<?php

	 $a = 3;
	 $c = 21;
	 $e = 1;

	 if (($a < $c) && ($a < $e)) {
	 	if ($c < $e) {
	 		print($a . " " . $c . " " . $e);
	 	}
	 	else{
	 		print($a . " " . $e . " " . $c);
	 	}
	 }
	 elseif  (($c < $a) && ($c < $e)) {
	 	if ($a < $e) {
	 		print($c . " " . $a . " " . $e);
	 	}
	 	else{
	 		print($c . " " . $e . " " . $a);
	 	}
	 }
	elseif  (($e < $a) && ($e < $c)) {
	 	if ($a < $c) {
	 		print($e . " " . $a . " " . $c);
	 	}
	 	else{
	 		print($e . " " . $c . " " . $a);
	 	}
	 }



?>
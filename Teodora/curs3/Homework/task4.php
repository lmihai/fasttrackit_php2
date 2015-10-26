<html>
<head>
	<title>Homework curs3 PHP task4</title>
</head>
<body>
	<p>if, elseif </p>
		<?php

		$a = 3;
		$c = 21;
		$e = 1;

		if(($a < $c) && ($e > $c)) {
			print ($a . "<br />" . $c . "<br />" . $e); //a c e	
		}
		elseif(($a < $e) && ($c > $e)) {
			print ($a . "<br />" . $e . "<br />" . $c);// a e c
		}
		elseif(($c < $a) && ($e > $a)) {
			print ($c . "<br />" . $a . "<br />" . $e);// c a e
		}
		elseif(($c < $e) && ($a > $e)) {
			print ($c . "<br />" . $a . "<br />" . $e); // c e a
		}
		elseif(($e < $a) && ($c > $a)) { //varianta corecta // e a c
			print ($e . "<br />" . $a . "<br />" . $c);
		}
		elseif(($e < $c) && ($a > $c)) {
			print ($e . "<br />" . $c . "<br />" . $a);// e c a 
		}
		?>

		<!-- metoda SWITCH -->
		<p>SWITCH</p>
		<?php

		
		switch($a) {
			case(($a < $c) && ($e > $c)): {
			print ($a . "<br />" . $c . "<br />" . $e); //a c e	
			break;
			}
			case(($a < $e) && ($c > $e)): {
			print ($a . "<br />" . $e . "<br />" . $c);// a e c
			break;
			}
			case(($c < $a) && ($e > $a)): {
			print ($c . "<br />" . $a . "<br />" . $e);// c a e
			break;
			}
			case(($c < $e) && ($a > $e)): {
			print ($c . "<br />" . $a . "<br />" . $e); // c e a
			break;
			}
			case(($e < $a) && ($c > $a)): { //varianta corecta // e a c
			print ($e . "<br />" . $a . "<br />" . $c);
			break;
			}
			case(($e < $c) && ($a > $c)): {
			print ($e . "<br />" . $c . "<br />" . $a);// e c a 
			break;
			}
		}

		?>
	

</body>
</html>
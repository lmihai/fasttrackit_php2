<html>
<head>
	<title>Homework curs3 PHP task2</title>
</head>
<body>
	<p>
		<?php
			$a = true;
			$b = false;
			$c = 1;
			$d = 0;
			//print results for expressions:

			$x =!($a) && $b;
				//print var_dump($x);//false
				print "<br />";
				if ($x == false) {
					print "False and false result false!";
				}

			print "<br />";
			$y = $a || $b;
				//print var_dump($y);// true
				print "<br />";
				if ($a || $b) {
					print "Result is true for true or false!";
				}

			print "<br />";
			$z = !($a || $b);
				//print var_dump($z);// false
				print "<br />";
				if ($z == false) {
					print "Result for not true is false! ";
				}

			print "<br />";
			$i = $a === $c;
				//print var_dump($i);
				print "<br />";
				if ($i == false){
					print "True is not identical with 1!";	
				}

			print "<br />";
			$f = $a && $c || $d;// ATENTIE && ARE PRIORITATE FATA DE ||
				//print var_dump($f);// result true
				// expresia se interpreteaza: ($a && $c)|| $d true or false intoarce true
				print "<br />";
				if($f == true) {
					print "Expression is true!";
				}
				else {
					print "Expression is false!";
				}

			print "<br />";
			$t = !($c) == $b;
				print "<br />";
				//print var_dump($t);// true
				/* 
				!($c) rezultat: false
				false == false (rezulta true)
				*/
				print "<br />";
				if ($t == true){
					print "Result is true!";
				}
				else {
				print "Result is false!";
				}

			print "<br />";
			$m = $a == $c;
				//print var_dump($m);//true
				print "<br />";
				/*
				$a = true;
				$c = 1 (convertit = true);
				true == true (intoarce true);
				*/
				if ($m == true) {
				print "Rezultatul este adevarat!";
				}

			print "<br />";
			$p = !($b) === $c;
			//print var_dump($p);//false
			print "<br />";
			if ($p == false) {
				print "Result for this expression is false!";
			} 

			print "<br />";
			$r = $a || !($b);
			//print var_dump($r);//true (true or true)
			print "<br />";
			if ($r == true) {
				print "Expression result is true!";
			}

			
		?>

	</p>

</body>
</html>
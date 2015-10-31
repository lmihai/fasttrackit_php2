<html>
<head>
	<title>Homework curs3 PHP task3</title>
	<style>
		span {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h3>Solve and explain the results for</h3>
		<h5>$ x = 5</h5>
		<h5>$y = 6</h5>
		<ol>
			<li ><span>$a = !($x > 6);</span>
				<?php
				$x = 5;
				$y = 6;

				$a = !($x > 6);
				//print var_dump ($a); intoarce true
				if ($a == true) {
					print "Rezulatul este true deoarece: (5 > 6) rezulta false iar !(false) inseamna true";
				}
				?>
			</li>
			<li><span>($x == 6 && $x == 5);|</span>
				<?php
				$b = (($x == 6) && ($x == 5));
				//print var_dump($b) intoarce false	
				if ($b == false) {
					print "Rezultatul este false deoarece: false AND true rezulta false";
				}	
				?>
			</li>
			<li><span>($x == 6 || $x == 5);</span>
				<?php
				$c = ($x == 6 || $x == 5);
				// print var_dump($c); intoarce true
				if ($c == true){
					print "Rezultatul este true deoarece: false OR true rezulta true";
				}			
				?>				
			</li>
			<li><span>($x > -1 && $y < 10);</span>
				<?php
				$d =(($x > -1 && $y < 10)); 
				//print var_dump($d); intoarce true
				if ($d == true) {
					print "Rezultatul este true deoarece true AND true rezulta true";
				}
				?>				
			</li>
		</ol>
</body>
</html>
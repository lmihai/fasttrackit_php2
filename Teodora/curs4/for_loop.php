<html>
<head>
	<title>Curs 4 PHP for_loop</title>
</head>
<body>
	<h3>For loop</h3>
	<p>
		<?php
		// calculate the sum of numbers 1 to 3
		$start = 1;//start value , common name is iterator ($i)
		$end  = 3;// stop condition, loops while condition is true
		$sum = 0;

		for($i = $start; $i <= $end; $i ++) {
			$sum = $sum + $i;
		}
		print "The sum of numbers 1 to 3 is: " . $sum;
		?>
	</p>
	<p>
		<?php
		// calculate the sum of numbers 1 to 1000
		$start = 1;
		$end  = 1000;
		$sum = 0;

		for($i = $start; $i <= $end; $i ++) {
			$sum = $sum + $i;
		}
		print "The sum of numbers 1 to 1000 is: " . $sum;
		?>
	</p>
	<p>
		<?php
		// find out the sum of all even numbers from 0 to 1200;
		
		$start = 0;
		$end  = 1200;
		$sum = 0;

		for($i = $start; $i <= $end; $i ++) {
			if($i % 2 == 0) {
			$sum = $sum + $i;
			}
		}
		print "The sum of all even numbers from 0 to 1200 is: " . $sum;
		?>
	</p>

	<p>
		<?php
		// find out the sum of all odd numbers from 20 to 800;
		$i = 20;		
		$sum = 0;

		for($i; $i <= 800; $i ++) {
			if($i % 2 != 0) {
			$sum = $sum + $i;
			}
		}
		print "The sum of all odd numbers from 20 to 800 is: " . $sum;
		?>
	</p>

	<p>
		<?php		
		// find out the sum of all  numbers from 1000 to 1;
		$start = 1000;
		$end  = 1;
		$sum = 0;

		for($i = $start; $i >= 1; $i --) {
			$sum = $sum + $i;
		}		
		print "The sum of all numbers from 1000 to 1 is: " . $sum;		
		?>
	</p>

	<p>
		<?php		
		// find out the product of all  numbers from -99 to 99;
		$start = -99;
		$end  = 99;
		$product = 1;

		for($i = $start; $i <= $end; $i ++) {
			$product = $product * $i;
		}		
		print "The product of all numbers from -99 to 99: " . round($product);		
		?>
	</p>

	

</body>
</html>
<html>
<head>
	<title>curs4 PHP while</title>
</head>
<body>

	<h3>While loop</h3>
	<p>
	<?php

		$i = 1;
		$end = 1000;
		$sum = 0;

		while ($i <= $end) {
			$sum = $sum + $i;
			$i ++;
		}
		print "The sum of numbers 1 to 1000 is: " . $sum;
			
	?>
	</p>
	<p>
		<?php
		// find out the sum of all even numbers from 0 to 1200;
		$i = 0;
		$end = 1200;
		$sum = 0;

		while($i <= $end) {
			if($i % 2 == 0) {
			$sum = $sum + $i;
			}
			$i ++;			
		}
		print "The sum of all even numbers from 0 to 1200 is: " . $sum
		?>
	</p>
	<p>
		<?php 
		// find out the sum of all odd numbers from 20 to 800;
		$i = 20;
		$end = 800;
		$sum = 0;

		while($i <= 800) {
			if($i % 2 != 0) {
				$sum = $sum + $i;
			}
			$i ++;
		}
		print "The sum of all odd numbers from 20 to 800 is: " . $sum;
		?>
	</p>		
	<p>
		<?php
	 	// find out the sum of all  numbers from 1000 to 1;
		$i = 1000;
		$end  = 1;
		$sum = 0;

		while($i >= 1 ){
			$sum = $sum + $i;
			$i --;
		}
		print "The sum of numbers 1000 to 1 is: " . $sum;
		?>
	</p>

</body>
</html>  
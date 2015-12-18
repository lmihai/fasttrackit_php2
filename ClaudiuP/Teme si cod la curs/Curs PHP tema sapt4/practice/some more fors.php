<!doctype html PUBLIC>
<html>
	<head>
		<title>
			Some more "For" loops
		</title>

	</head>
	<body>

		<center>
			<br>
			<?php echo "<br>";?>
			<br> <?php echo "<hr>";?>
			<p>The sum of all even numbers from 0 to 1200 using for loop is: </p>
			<?php
			/*sum of all even numbers from 0 to 1200; in order to check results, 
			I commented the entire if sequence, and the result should have been 600 less than double 
			the amount, given "if" included.*/
				$first = 0;
				$last = 1200;
				$sum = 0;

					for ($i=$first; $i<=$last; $i++)
					{
						if ($i%2 == 0)
						{
							$sum = $sum+$i;
						}
					}
					print $sum;
			?>

			<br> <?php echo "<p>The sum of all odd numbers from 20 to 800 using for loop is: </p>"; ?>
			<?php 
				
				/* The sum of all odd numbers from 20 to 800 */

				$firstVar = 20;
				$lastVar = 800;
				$sum = 0;

					for ($i=$firstVar; $i<=$lastVar; $i++)
					{
							if ($i%2 != 0) 
							{
								$sum = $sum + $i;
							}
					}
					print $sum;

			?>

			<br><p>The sum of all numbers from 1000 to 0 using for loop is: </p>

				<?php 
				/* The sum of all numbers from 1000 to 0 */

				$varOne = 1000;
				$varEnd = 0;
				$sum = 0;

					for ($i=$varOne; $i>=$varEnd; $i--)
					{
								$sum = $sum + $i;
					}
					print $sum;

				?>

				<br><p>The sum of all numbers from -99 to 99 using for loop is: </p>

				<?php 
				/* The sum of all numbers from 1000 to 0 */

				$varNeg = -99;
				$varPos = 99;
				$sum = 0;

					for ($i=$varNeg; $i<=$varPos; $i++)
					{
								$sum = $sum + $i;
					}
					print $sum;

				?>

		</center>
	
	</body>
</html>


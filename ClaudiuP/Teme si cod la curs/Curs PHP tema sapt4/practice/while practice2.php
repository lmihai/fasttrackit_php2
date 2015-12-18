<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			While exercises
		</title>

	</head>
	<body>

		<center>
			<br><br><br><hr>
			<?php
			//sum from 1 to 3 using while
			echo "The sum from 1 to 3 using a while loop is: ";
			echo "<br>";
				$i = 1;
				$end = 3;
				$sum = 0;

				while ($i<= $end)
				{
					$sum = $sum + $i;
					$i++;
				}
				echo $sum;
		
			?>
			<br><br>
			<?php 
			// sum of all odd numbers from 20 to 800 using while loop;
			echo "The sum of all odd numbers from 20 to 800 using while loop is: ";
			echo "<br>";

				$i = 20; 
				$end = 800;
				$sum = 0;
					while ($i<=$end)
					{
						if ($i%2!=0)
						{
							$sum = $sum +$i;
						}
						$i++;
					}
					echo $sum;
			?>
			<br><br>
			<?php 
			// sum of all numbers from 1000 to 1 using while loop;
			echo "The sum of all numbers from 1000 to 1 using while loop is: ";
			echo "<br>";

				$i = 1000; 
				$end = 1;
				$sum = 0;
				
					while ($end<=$i)
					{
						$sum = $sum +$i;
						$i--;
					}
					echo $sum;
			?>
			<br><br>
			<?php 
			// sum of all numbers from -99 to 99 using while loop;
			echo "The sum of all numbers from -99 to 99 using while loop is: ";
			echo "<br>";

			$i = -99;
			$end = 99;
			$sum = 0;

				while ($i<=$end)
				{
					$sum = $sum +$i;
					$i++;
				}
				print $sum;

			?>
	
		</center>
	
	</body>
</html>


<!doctype html public>
<html lang="en">
	<head>
		<title>While practice</title>	
	</head>
	<body>
		<center>

		<?php 
		//media ponderata a trei variabile predefinite cu ponderi respective
				$first = 1;
				$second = 2;
				$third = 3;
				$sum = 0;

					$firstM = 0.32;
					$secondM = 0.64;
					$thirdM = 0.04;

						echo (  ($first*$firstM)+($second*$secondM)+($third*$thirdM)  )/3;
		// one more for, because why not?
						echo "<br>";
						for ($i=$first; $i<=$third; $i++) 
						{
							$sum = $sum +$i;
						}

						echo $sum;
						echo '<br>';
						echo "am pus un < br> chiar inainte de acest mesaj, sa vedem daca merge.";

		?>


		</center>
	</body>

</html>
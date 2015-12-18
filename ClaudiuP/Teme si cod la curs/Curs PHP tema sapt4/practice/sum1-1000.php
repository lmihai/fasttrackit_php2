<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Hello world using variables
		</title>

		<link rel="stylesheet" type="text/css" href="oddandeven.css" />

	</head>
	<body>

		<center>
			<br><br><br><hr>
			<?php
				$start = 1;
				$end = 1000;
				$sum = 0;
					echo "Suma tuturor numerelor de la 1 la 1000 folosind functia for este: ";
					for ($i = $start; $i <= $end; $i++)
					{
						$sum = $sum +$i;
					}
					print $sum;
					?>


					<br>


					<?php
					echo "Suma tuturor numerelor de la 1 la 1000 folosind functia while este: ";
					while ($i <= $end) {
						$sum = $sum + $i;
						$i++;
					}
					echo "<br>";
					echo $sum;

			?>

		</center>
	
	</body>
</html>

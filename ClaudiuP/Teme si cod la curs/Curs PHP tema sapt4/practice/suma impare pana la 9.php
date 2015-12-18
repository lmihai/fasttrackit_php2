<!doctype html>
	<head>
		<title>Titlu</title>
	</head>

		<body>
			<h1>
			<center>

				<?php 

				$primul = 1;
				$ultimul = 9;
				$sum = 0;

				echo "Suma numerelor impare de la 1 pana la 9 este: ";
					for ($i = $primul; $i <= $ultimul; $i++)
					{
						if ($i%2 != 0) 
						{
							$sum = $sum +$i;
						}
					}
					echo $sum;

				?>




			</center>
			</h1>




		</body>

	</html>
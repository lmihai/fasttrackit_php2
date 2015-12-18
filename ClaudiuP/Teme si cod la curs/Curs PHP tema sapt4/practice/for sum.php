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
					$end = 3;
					$sum = 0;
						for ($i = $start; $i <= $end; ++$i)	
						{
							if ($i % 2 != 0 )
							{
								$sum = $sum + $i;
							}	
							
						}			
							echo $sum;
			?>
			<?php 
					$primul = 1;
					$ultimul = 3;
					$sum = 0;
						for ($i = $primul; $i <= $ultimul; $i++)
						{
							$sum = $sum + $i;
						}
							echo $sum;
			?>

			 <?php 
			 	echo </br>;
				 	$first = 1;
				 	$last = 3;
				 	$sum = 0;
				 		for ($i = $first; $i <= $last; $i++) 
				 		{
				 			$sum = $sum +$i;
				 		}
				 			echo $sum;
			 ?>

			 <?php 
				 	$tra = 1;
				 	$tralala = 3;
				 	$sum = 0;
				 		for ($i = $tra; $i <= $tralala; $i++)

				 		{
				 			$sum = $sum +$i;
				 		}
				 			echo $sum;
			 ?>

			 <?php 
			 		echo "is tralala equal to the sum of 1+2+3 and tra equal to the first variable defined?"
			 		if (($tralala == $sum) && ($tra == $first))
			 		{
			 			echo "both conditions are met";
			 		}
			 		elseif (($tralala == $sum ))
			 		{

			 		}
			 ?>


		</center>
	
	</body>
</html>



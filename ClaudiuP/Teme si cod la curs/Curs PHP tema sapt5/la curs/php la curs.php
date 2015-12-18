<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Hello world using variables
		</title>


	</head>
	<body>

		<center>
			<br><br><br><hr>
			<?php


				$first = 6;
				$last = 90;
				$sum = 0; 

				 for ($i=$first; $i<=$last; $i++)

				 {
				 	if (($i%2==0) && ($i%3==0) && ($i%5==0))
				 	{
				 		$sum = $sum+$i;
				 	}
				 }
				 echo $sum;
			?>

			<?php


			?>

		</center>
	
	</body>
</html>






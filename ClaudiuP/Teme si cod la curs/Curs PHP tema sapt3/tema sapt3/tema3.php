<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Tema Sapt3
		</title>

	</head>
	<body>
<br><br><br>

		<center>
			<h2><a href="tema1.php">Home</a></h2>
			<h4><a href="tema1.php">Tema 1 |</a><a href="tema2.php">Tema 2 |</a><a href="tema3.php">Tema 3 |</a><a href="tema4.php">Tema 4</a><h4>

				<h1> Tema Acasa curs PHP - Saptamana 3</h1>

				<h1>Tema 3</h1>
				<center><img src="homeworkScreen3.JPG"><h2>Rezultate si explicatii</h2></center>
				<p> </center>
		
					<?php 
					$x = 5;
					$y = 6;


//Case 1: : For !(x>6)
						echo 'Case 1: For "!(x>6)": ';
						?> </br> </br>
						<?php
						if (!$x > 6) {
							echo "The condition is false.";
						}
						else {
							echo "The condition itself is true, because x is less than 6, and given the order of operations, the condition asks whether x being greater than 6 is false.";
						}

					?>
					</p>
					<hr>
					

					<?php
//Case 2: : For (x==6 && x==5)
						echo 'Case 2: For "x==6 && x==5": ';
						?> </br> </br>
						<?php
						if (($x==5) && ($y== 6)) {
							echo "The condition is true because BOTH conditions are met.";
						}
						else {
							echo "The condition is false";
						}

					
					?>
					<hr>
					<?php
//Case 3: : For (x==6 || x==5)
						echo 'Case 3: For "x==6 || x==5": ';
						?> </br> </br>
						<?php
						if (($x==6) || ($x== 5)) {
							echo "The condition is true because ONE of the conditions is true, there's no need for an else function.";
						}
						else {
							echo "The condition is false";
						}

					
					?>
					<hr>
					<?php
//Case 4: : For (x>-1 && y<10)
						echo 'Case 3: For "x>-1 && y<10": ';
						?> </br> </br>
						<?php
						if (($x>-6) && ($y < 10)) {
							echo "The condition is true because BOTH of the conditions are met.";
						}
						else {
							echo "The condition is false";
						}
//<h3>S-ar putea sa ma insel in privinta primului exercitiu de aici, desi nu sunt sigur.</h3>
					
					?>
					<hr>


					



	</body>
</html>


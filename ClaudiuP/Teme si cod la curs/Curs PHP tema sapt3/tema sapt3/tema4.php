<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Tema Sapt3
		</title>

	</head>
	<body>
		<br><br><br>

		<center><h4>
			<h2><a href="tema1.php">Home</a></h2>
			<a href="tema1.php">Tema 1 |</a><a href="tema2.php">Tema 2 |</a><a href="tema3.php">Tema 3 |</a><a href="tema4.php">Tema 4</a><h4>

				<h1> Tema Acasa curs PHP - Saptamana 3</h1>

				<h1>Tema 4</h1>
				<center><img src="homeworkScreen4.JPG"></center>
				<p>
		
					<?php
					$a = 3;
					$c = 21;
					$e = 1;
// Afisarea celei mai mici valori:
						echo "Rezultat: ";
							if (($a<$c) && ($a<$e) && ($a<$e)) {
								echo $a; 
									echo ", ";
							}
							elseif ($c<$e) {
								echo $c;
									echo ", ";
							}
							else echo $e; 
									echo ", ";



/*Afisarea celorlalte doua numere ramase, aici am trisat pentru ca nu am stiut cum sa fac, 
script-ul va functiona doar in cazul in care valorile variabilelor nu se schimba, the variables won't be so variable after all.*/
							if ($a>$e) {
								echo $a; echo ", ";
							}
							if ($c>$a){
							 echo $c;
							 }

						
					?> <br>
					Of... 
					 <br>Am reusit sa il fac sa mearga doar in cazul in care valorile variabilelor raman aceleasi. In cazul in care valorile se schimba, script-ul n-ar mai fi fost bun.
					<br><hr>
					In schimb, am reusit sa folosesc metoda cu array, dupa cum se observa rezultatele aici:
					<br>

							<?php
// Afisarea variabilelor in functie crescatoare folosind un array.
							$numbers=array($a,$c,$e);
							sort($numbers);

							$arrlength=count($numbers);
							for($x=0;$x<$arrlength;$x++)
							   {
							   echo $numbers[$x];
							   echo "<br>";
							   }
							?>

					<br><br><hr>
					



	</body>
</html>


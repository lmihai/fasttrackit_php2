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

				<h1>Tema 1</h1>
				<center><img src="homeworkScreen1.JPG"></center>
				<p><h2> Rezolvari</h2></center>
		
					<?php
// Tema 1, metoda 1, in care afisam doar numele celei mai in varsta persoane dintre toate 5 variabile folosind functia max.
		
						echo 'Metoda 1: In cazul in care am dori sa ni se afiseze doar numele celei mai in varsta persoane,
						definim o noua variabila cu valoarea functiei "max" in PHP, pentru a compara toate varstele odata.'; 
						?>
					</br>
						<?php 
						$age_maria = 20;
						$age_ana = 25;
						$age_vlad = 17;
						$age_ionescu = 25;
						$age_george = 30;
						$maxim = max ($age_maria, $age_ana, $age_vlad, $age_ionescu, $age_george);


							echo "Rezultat: The oldest person in the room is ";
							if ($maxim == $age_maria) {
								echo "Maria";
							}
							elseif ($maxim == $age_ana) {
								echo "Ana";
							}
							elseif ($maxim==$age_vlad) {
								echo "Vlad";
							}
							elseif ($maxim == $age_ionescu) {
								echo "Ionescu";
							}
							else echo "George";
							echo " !";
						?>

							</br><hr>
				</p>
					<p><?php 
// Tema 1, metoda 2, fiecare caz in parte in functie de comparatiile cerute.
						echo "Metoda 2: Folosim niste if-uri pentru a afisa numele
						 fiecarei persoane din cele patru cazuri in particular:";
						 ?>
						</br></br>
						 <?php
		// Cazul 1.
						 		if($age_maria > $age_ana) {
									echo "Rezultat Cazul 1: Dintre Maria si Ana, Maria este mai in varsta. ";
										}
									else {
										echo "Rezultat Cazul 1: Dintre Maria si Ana, Ana este mai in varsta. ";
										} 
						?>
						</br></br>
						<?php
		// Cazul 2.

										echo "Rezultat Cazul 2, unde nu este nevoie de functia else: ";
						?>
						</br>
						<?php
										echo "Comparatia nu poate fi facuta, deoarece nu stim ce varsta are Alex, variabila nedefinita. ";		
						?>
						</br></br>
						<?php
		// Cazul 3.
									if ($age_ana > $age_ionescu) {
										echo "Rezultat Cazul 3: Dintre Ionescu si Ana, Ana este mai in varsta. ";
										}
									elseif ($age_ana < $age_ionescu) { 
										echo "Rezultat Cazul 3: Dintre Ionescu si Ana, Ionescu este mai in varsta. ";
										}
									else echo "Rezultat Cazul 3: Ionescu si Ana au aceeasi varsta";
									// Constientizez ca acest cod este cel ideal prin comparatie cu celelalte 3 cazuri (cu elseif inclus), 
									// deoarece se pot schimba variabilele. In momentul in care doua devin egale, codul va da rezultate gresite in celelalte cazuri. 
						?>
						</br></br>
						<?php
		// Cazul 4.
									if ($age_george > $age_vlad) {

										echo "Rezultat Cazul 4: Dintre George si Vlad, George este mai in varsta. ";
										}
									else {
										echo "Rezultat Cazul 4: Dintre George si Vlad, Vlad este mai in varsta. ";
									}
						?>
					</p>
					<hr>



	</body>
</html>


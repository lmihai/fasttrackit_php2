<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Array practice
		</title>

	</head>
	<body>

		<center>
			<br><br><br><hr>
			<?php

				$colors = array( "red", "blue", "green");
			/* se pare ca daca atribui doar o prima pozitie, programul va 
			 continua de la aceasta. In cazul de mai sus, array-ul nu contine nimic
			 pe pozitiile 0 si 1 dar pe 3 si 4 da.*/
				echo "rezultatul <strong>print</strong> pt pozitia 2 este acesta: ";echo "<br>";
				print $colors[2];
				echo "<br>";

			// metoda 2 de a defini un array. Se poate aplica acelasi principiu mentionat
			// mai sus si in cazul acesta.
				$culori = array();
					$culori[1] = "rosu";
					$culori[] = "galben";
					$culori[] = "albastru";
					echo "<br>";
					echo "rezultatul print_r este acesta: "; echo "<br>";
					print_r ($culori);

					echo "<br>";echo "<br>";
					echo "rezultatul var_dump este acesta: "; echo"<br>";
					var_dump($culori);

					echo "<br><br>";
					echo "inlocuim pozitia doi cu stringul galbui si ii dam print de pozitie 2: ";
					echo "<br>";
					$culori[2]="galbui";
					print $culori[2];
				//-----------------------------//
					unset($culori[1]);
				// dupa acest unset, daca incerc sa printez o pozitie din 
				// array ce a fost stearsa, programul da eroare, cum ar fi
				// print $culori[1]. Eroarea spune "undefined offset: 1";

					// iti merge bine?
				//Let's traverse the first array using the for loop.
					echo "<br><br>";
					print_r ($culori);
					echo "<br>";
					for ($i = 0; $i < count($colors); $i++)
					{
					echo $colors[$i];
					echo "<br>";
					}

			?>

		</center>
	
	</body>
</html>


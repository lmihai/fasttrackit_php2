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

				<h1>Tema 2</h1>
				<center><img src="homeworkScreen2.JPG"></center>
				<p><h2>Boolean results for the given expressions.</h2></center>
					<?php
// Case 1 boolean.
					$a = true;
					$b = false;
					$c = 1;
					$d = 0;
					echo 'Case 1: For "not($a) and $b", ';
						if (($a != true) and ($b == true)) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					
					<?php
// Case 2 boolean.
					echo 'Case 2: For "$a or $b", ';

						if (($a == true) or ($b == true)) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					<?php
// Case 3 boolean.
					echo 'Case 3: For "not($a or $b)", ';

						if (($a != true) or ($b != true)) {
							echo "the condition is false.";
							}
							else {
								echo "the condition is true.";
							}



					?></br>
					<?php
// Case 4 boolean.
					echo 'Case 4: For "$a = = = $c", ';

						if ($a === $c) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					<?php
// Case 5 boolean.
					echo 'Case 5: For "$a and $c or $d", ';

						if (($a == true) && ($c == true) or ($d == true)) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					<?php
// Case 6 boolean.
					echo 'Case 6: For "not($c) == $b", ';

						if (!$c == $b) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					<?php
// Case 7 boolean.
					echo 'Case 7: For "$a == $c", ';

						if ($a == $c) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					<?php
// Case 8 boolean.
					echo 'Case 8: For "not($b) === $c", ';

						if (!$b === $c) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>
					<?php
// Case 9 boolean.
					echo 'Case 9: For "$a or not($b)", ';

						if ($a or !$b) {
							echo "the condition is true.";
							}
							else {
								echo "the condition is false.";
							}



					?></br>


				</p>
				<hr>

		

	</body>
</html>


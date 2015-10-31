<?php
	
	$x = 5;
	$y = 6;
	if (!($x > 6)) {
		echo "<p>Conditia returneaza adevarat deoarece aceasta se mai poate scrie x<=6</p>";
	}

	if ($x == 6 && $x == 5) {
		echo "";
	}
	else{
		echo "<p>Conditia returneaza fals deoarece x nu poate fi egal si cu 5 si cu 6 in acelasi timp</p>";
	}

	if ($x == 6 || $x == 5) {
		echo "<p>Conditia returneaza adevarat deoarece una din cele doua conditii este adevarata x=5</p>";
	}

	if($x > -1 && $y < 10){
		echo "<p>Conditia returneaza adevarat deoarece x este mai mare ca -1 si y este mai mic ca 10";
	}


?>
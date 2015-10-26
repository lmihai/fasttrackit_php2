<?php

/*--------------------------TASK 1 ---------------------------------
compare the following ages and print the name of the oldest person:
a)maria vs Ana         c)Ionescu vs Ana
b)Alex vs ionescu      d)George vs Vlad 
*/


//given variables :
$age_maria = 20;
$age_ana = 25;
$age_ionescu = 25;
$age_george = 30;
// added 
$age_alex = 18;
$age_vlad = 19;

// a)
if ($age_maria > $age_ana ) {
	print("Maria");
}
	elseif ($age_maria < $age_ana) {
		print("Ana") ;
	}

echo "<p></p>";

// b)
	if ($age_alex > $age_ionescu) {
		print("Alex");
	}
	elseif ($age_alex < $age_ionescu) {
		print("Ionescu") ;
	}

echo "<p></p>";

// c)
	if ($age_ionescu > $age_ana) {
		print("Ionescu");
	}
	elseif ($age_ionescu < $age_ana) {
		print("Ana");
	}

echo "<p></p>";

// d)
	if ($age_george > $age_vlad) {
		print("George");
	}
	elseif ($age_george < $age_vlad) {
		print("Vlad") ;
	}

?>
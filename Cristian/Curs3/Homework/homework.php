

<?php
	$age_vlad = 17;
	$age_maria = 20;
	$age_ana = 25;
	$age_ionescu = 25;
	$age_george = 30;
	if ($age_ana>$age_maria) {
		print("<p>Ana</p>");
	}
	else
		print("<p>Maria</p>");
	if($age_ana>$age_ionescu)
		print("<p>Ana</p>");
	else
		print("<p>Ionescu</P>");
	if($age_george>$age_vlad)
		print("<p>George</p>");
	else
		print("<p>Vlad</p>");
// Part 4
	$a = 3;
	$b = 21;
	$e = 1;
	if($a>$b&&$b>$e){
		print("<p> $a $b $e </p>");
	}
	elseif ($b>$a&&$a>$e) {
		print("<p> $b $a $e </p>");
	}
	elseif ($b>$e&&$e>$a) {
		print("<p> $b $e $a </p>");
	}
	elseif($e>$a&&$a>$b){
		print("<p> $e $a $b");		
	}
	elseif ($e>$b&&$b>$a) {
		print("<p> $e $b $a </p>");
	}
	elseif ($a>$e&&$e>$b) {
		print("<p> $a $e $b </p>");
	}
?>
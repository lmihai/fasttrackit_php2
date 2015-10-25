<html>
<head>
	<title>Homework curs3 PHP task1</title>
</head>
<body>
	<p>
		<?php 
		$age_maria = 20;
		$age_ana = 25;
		$age_vlad = 17;
		$age_ionescu = 25;
		$age_george = 30;


		//Maria vs Ana
		if ($age_maria < $age_ana) {
			print "Ana";
		}
		elseif($age_ana == $age_maria)
			print "Ana has a same age with Maria";
		else {
			print "Maria";
		}
		?>
	</p>
	<p>
		<?php
		//Ionescu vs Ana
		if ($age_ionescu > $age_ana) {
			print "Ionescu";
		}
		elseif ($age_ionescu == $age_ana) {
			print "Ionescu has the same age with Ana.";
		}
		else {
			print "Ana";
		}
		?>
	</p>
	<p>
		<?php
		//George vs Vlad
		if ($age_george > $age_vlad) {
			print "George";
		}
		elseif ($age_george == $age_ana) {
			print "George has the same age with Vlad.";
		}
		else {
			print "Ana";
		}
		?>
	</p>


</body>
</html>
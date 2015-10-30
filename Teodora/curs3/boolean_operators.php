<html>
<head>
	<title>Boolean Operators</title>
</head> 
<body>
	<p>
		<?php
		//Example with comparation Operators
		$number = 3;
		$text = "3";

		if ($number == $text) {
			print "Same";
		}
		elseif ($number === $text) {
			print "The numbers are not identical!";
		}
		else {
			print "Not the same";
		}
		?>
	</p>

	<p>
		<?php
		//Example with comparation Operators
		$number = 3;
		$text = "3";

		if ($number === $text) {
			print "The numbers are identical!";			
		}
		else {
			print "The numbers are not identical!";
		}
		?>
	</p>

	<p>
		<?php
		//Example with comparation Operators
		$first_number = 6.5;
		$second_number = 7;

		if ($first_number < $second_number) {
			print "First number is smaller!";
		}
		else {
			print "Second number is smaller!";
		}
		?>
	</p>

	<p>
		<!-- LOGICAL OPERATORS -->
		<?php
		$salt = TRUE;
		$pepper = TRUE;
		if ($salt && $pepper) {
			print "Yummy!";
		}
		?>
	</p>

	<p>
		<!-- LOGICAL OPERATORS -->
		<?php
		$day = "saturday";
		$hour = 10;
		if ($day == "saturday" && $hour >= 10) {
			print "PHP course has started!";
		}
		?>
	</p>
	<!-- MORE THAN TWO OPTIONS -->
	<p>
		<?php
		$username = "admin";
		if ($username = "admin") {
			echo "You are allowed to see this.";
		}
		elseif ($username = "member") {
			echo "You are allowed to see that.";
		}
		else {
			echo "You are not allowed to see anything!";
		}
		?>
	</p>


</body>
</html>
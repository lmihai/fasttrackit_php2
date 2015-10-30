<html>
<head>
	<title>Conditional Statement</title>
</head>
<body>
	<p>
		<?php
		$username = "admin";
		//example with "if" and "else"
		if ($username = "admin") {
			echo "You are allowed to see this.";
		}
		else {
			echo "You are not allowed to see this.";
		}
		?>
	</p>
	<p>
		<?php
		$points_theory = 7;
		$points_practice = 3;
		$total_points = $points_theory + $points_practice;
		if ($total_points == 10) {
			echo "Perfect grade!";
		}
		else {
			echo "Not perfect! Keep trying!";
		}
		?>
	</p>

</body>
</html>
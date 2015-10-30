<html>
<head>
	<title>Concatenation Operator</title>
</head>
<body>
	<p>
		<?php //Concatenation is the text manipulauin method when you join two ore more texts together.
			$maker = "Ford";
			$model = "Escort";

			$car = $maker . $model;//$car contains "FordEscort"
			$car = $maker . " " . $model;//$car contains "Ford Escort"

			print("I drive a " . $car);//"I drive a Ford Escort"
			print("I drive a " . $maker . " " . $model);// I drive a Ford Escort
		?>
	</p>
	<p>
		<?php
		$count = 10;
		print('There are $count students in the room today. '); // PHP converts number to text when you try to concatenate them. 
		print("There are $count students in the room today. ");// Variables inside double quotes are replaced by their values 
		print('There are ' . $count . ' students in the room today');
		?>
	</p>

</body>
</html>

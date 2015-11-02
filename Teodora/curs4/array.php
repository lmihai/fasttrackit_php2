<html>
<head>
	<title>curs4 PHP array</title>
</head>
<body>
	<p>For loop for array</p>
	<?php
	$colors = array("red", "blue", "green");
	

	for($i = 0; $i < count($colors);  $i++){
		echo $colors[$i];
		echo "<br />";
	}
	
	?>

	<p> Foreach (How to list all team members?) </p>
		<?php
			//foreach syntax
			/*
			foreach ($array as $key => $value) {
				echo $key;
				echo $value;
			}
			*/

			$team = array();
			$team['PM'] = 'John';
			$team['Developer'] = 'Jack';
			$team['Tester'] = 'Jake';

			foreach ($team as $role => $name) {
				echo $role;
				echo ': ';
				echo $name;
				echo '<br>';
			}
	?>
	

</body>
</html>  
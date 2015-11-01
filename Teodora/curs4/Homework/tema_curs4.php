<html>
<head>
	<title>Homework curs 4 PHP</title>
</head>
<body>
	<?php
	//3 friends: John Doe, Jane Foo and Elvis Peanutbutter
	// 6/49 lottery, each select 6 numbers
	//1. Define a nested array to hold their first name, last name and ticket with 6 numbers;

	$friends = array(
		"first_name" => array("John","Jane","Elvis"),
		"last_name" => array("Doe","Foo","Peanutbutter"),
		"tickets" => array(
			"john_ticket" => array(2,15,1,43,24,47),
			"jane_ticket" => array(30,10,9,2,25,18),
			"elvis_ticket" => array(19,39,25,22,7,40)
			)
		);
	var_dump($friends);

	?>

</body>
</html>
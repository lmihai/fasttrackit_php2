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
				array(
					"first_name" => 'John',
					"last_name" => 'Doe',
					"ticket" => array(2,15,1,43,24,47)
					),
				array(
					"first_name" => 'Jane',
					"last_name" => 'Foo',
					"ticket" => array(30,10,9,2,25,18)
					),
				array(
					"first_name" => 'Elvis',
					"last_name" => 'Peanutbutter',
					"ticket" => array(19,38,25,22,7,40)
					)		 
		);
	//var_dump($friends);

	//2. Elvis selects a 7th number, add it to his ticket
	$friends[2]["ticket"][6] = 12;	
	//var_dump($friends[0]["ticket"]);//verificam daca array-ul contine si numarul 12 pe care l-am introdus
	
	//3.Jane cancels her ticket, so remove her numbers array completely
	
	unset($friends[1]["ticket"]);
	//var_dump($friends); verificam si observam ca s-a sters array-ul
	
	
	//4.For each friend, display their first name and number of numbers they have on the ticket
	
	for ($i=0; $i < count($friends); $i++) { 
		if(isset($friends[$i]["ticket"])){ 
		echo "Name: " . $friends[$i]["first_name"] . " \\ " . count($friends[$i]["ticket"]) . " numbers" . "<br>";
		}
		else {
			echo "Name: " . $friends[$i]["first_name"] . " \\ " . "0 numbers" . "<br>";
		}
	}

	//4A. Calculate the sum of all numbers (for each friend) 
	for ($i=0; $i < count($friends); $i++) { 
		if(isset($friends[$i]["ticket"])){ 
		echo "Sum of all numbers from  " . $friends[$i]["first_name"] . "'s ticket is " . array_sum($friends[$i]["ticket"]) . "<br>";
		}
		else {
			echo "Sum of all numbers from  " . $friends[$i]["first_name"] . "'s ticket is " . "0" . "<br>";
		}
		
	}

	
	//4B Calculate the sum of all numbers from all tickets
	
		$total_sum = 0;
		for ($i = 0; $i <= count($friends); $i++)
		{ 
			if (isset($friends[$i]['ticket'])) 
			{
				$total_sum = $total_sum + array_sum($friends[$i]['ticket']);
			}
		}
		echo "The total sum of all numbers from all tickets: " . $total_sum . "<br/>";

			

	?>

</body>
</html>
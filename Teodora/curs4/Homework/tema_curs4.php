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

	//5.Display the biggest number from all tickets.

				
		$biggest_number = 0;

		for ($i=0; $i < count($friends); $i++)
		{ 
			if (isset($friends[$i]['ticket'])) 
			{
				for ($x=0; $x < count($friends[$i]['ticket']); $e++) 
				{ 
					if (isset($friends[$i]['ticket'][$x]) && $biggest_number < $friends[$i]['ticket'][$x]) 
					{
						$biggest_number = $friends[$i]['ticket'][$x];
					}
				}
			}
		}

		print 'The biggest number from all tickets is: ' . $biggest_number . '<br>';
		
	

	//6.Write a program that prints the numbers from 1 to 100. But for multiples of three 
		//print "Fast" instead of the number and for the multiples of five print "Track". 
		//For numbers which are multiles of both three and five print "FastTrak".

		for ($i = 1; $i <= 100; $i++) {
			if(($i % 3 == 0) && ($i % 5 == 0)){
				print "FastTrak" . "<br>";
			}
			elseif ($i % 5 == 0) {
				print "Track" . "<br>";
			}
			elseif ($i % 3 == 0) {
				print "Fast" . "<br>";
			}
			else {
				print $i . "<br>";
			}
		}


	//7.Write a program that orders ascendingly the following array
		$array = array(2, 3, 1, 5, 4);		
		sort($array);		

		for ($i=0; $i < count($array); $i++) 
		{ 
			echo $array[$i] . " ";
		}

		print "<br>";

	//8.Define two arrays with the same number of elements, just numbers.
		$first_array = array(2, 16, 32, 54);
		$second_array = array(3, 24, 36, 53);
	//Create programmatically a third array, which holds on each position the sum 
	//of the numbers from the same position in the first two arrays.
	//For example, the first element in the third array is the sum of first element of first array
	//and the first element of second array.
		$third_array = array();
		
		for ($i=0; $i < count($first_array) ; $i++) { 
			for ($x=0; $x < count($second_array) ; $x++) { 
				if($x == $i) {
					$sum = $first_array[$i] + $second_array[$x];
					$third_array[] = $sum;
				}				
			}			
		}

		for ($i=0; $i < count($third_array) ; $i++) { 
			print  $third_array[$i] . " " ;
		} 
		
		?>
		

</body>
</html>
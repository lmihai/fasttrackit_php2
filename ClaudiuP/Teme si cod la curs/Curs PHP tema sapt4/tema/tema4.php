<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Tema4
		</title>

	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<center>
			<h2>Tema4</h2>
			<hr>
			<?php
	/*Three friends (John Doe, Jane Foo and Elvis Peanutbutter) are playing 
	6/49 lottery and each selects 6 numbers on their lottery tickets.

	1. Define a nested array to hold their first name, 
	last name and the ticket with 6 numbers*/
					echo "Three friends (John Doe, Jane Foo and Elvis Peanutbutter) are playing 
							6/49 lottery and each selects 6 numbers on their lottery tickets.";
					echo "<br>";
				echo('<em><p>1. Define a nested array to hold their first name, 
					last name and the ticket with 6 numbers</p></em>');

				$players = array();
					$players[1]= array(
									'firstname' => 'John',
									'lastname' => 'Doe',
									'numbersplayed' => array(2,4,6,8,3,35)
									);
					$players[2]= array(
									'firstname' => 'Jane',
									'lastname' => 'Foo',
									'numbersplayed' => array(5,3,17,8,3,33)
									);
					$players[3]= array(
									'firstname' => 'Elvis',
									'lastname' => 'Peanutbutter',
									'numbersplayed' => array(6,5,15,22,31,48)
									);

	//2. Elvis selects a 7th number, add it to his ticket.
					echo('<em><p>2. Elvis selects a 7th number, add it to his ticket</p></em>');
					$players[3]["numbersplayed"][6] = 19;

	//3. Jane cancels her ticket, so remove her numbers array completely.
					echo('<em><p>3. Jane cancels her ticket, 
						so remove her numbers array completely.</p></em>');
					unset($players[2]['numbersplayed']);

	//4A. For each friend, display their first name
	// and the number of numbers they have on the ticket.

					echo('<em><p>4A. For each friend, display their first name and 
						the number of numbers they have on their tickets .</p></em>');

		for ($i=1; $i <= count($players); $i++) { 
		if(isset($players[$i]["numbersplayed"])){ 
		echo "The players first names are: " . $players[$i]['firstname'] . " \\ "  . count($players[$i]["numbersplayed"]) . " numbers" . "<br>";
		}
		else {
			echo "The players first names are: " . $players[$i]["firstname"] . " \\ " . "0 numbers" . "<br>";
		}
	}
	echo('<em><p>4A. Calculate the sum of all numbers for each friend.</p></em>');
					$sum = 0;
					foreach ($players as $player) {
						echo "The sum of all numbers that ". $player['firstname'] . " played is: ";

						 if (isset($player['numbersplayed'])) {
     					  echo array_sum($player["numbersplayed"]) .'!'. "<br>";
    					} 
    					else {
    					 echo    '0 .' . '<br>';
    					}

						
					}

	/*4B. Calculate the sum of all friends numbers . */
		echo('<em><p> 4B. Calculate the sum of all friends numbers .</p></em>');


				$sumtotal = 0;
				for ($i=0; $i <= count($players); $i++)
				{
					if (isset($players[$i]['numbersplayed']))
					{
						
						$sumtotal = $sumtotal+array_sum($players[$i]['numbersplayed']);
					}
				}
				echo "The sum of all numbers played in total is ". $sumtotal . ". <br>";

	// 5. Display the highest value from all tickets.


			echo('<em><p> 5. Display the highest value from all tickets. .</p></em>');

		$highestValue = 0;

		for ($i=0; $i <= count($players); $i++)
		{ 
			if (isset($players[$i]['numbersplayed'])) 
			{
				for ($x=0; $x < count($players[$i]['numbersplayed']); $x++) 
				{ 
					if (isset($players[$i]['numbersplayed'][$x]) && $highestValue < $players[$i]['numbersplayed'][$x]) 
					{
						
						$highestValue = $players[$i]['numbersplayed'][$x];

					}
				}
			}
		}
		echo 'The biggest number from all tickets is: ' . $highestValue . '<br>';

	/* 6. Write a program that prints the numbers from 1 to 100 . 
	But for multiples of three print "Fast" instead of the number 
	and for the   multiples of five print "Track". For numbers
	which are multiples  of both three and five print "FastTrack". */
			echo "<hr>";

			echo('<em><p> 6. Write a program that prints the numbers from 1 to 100 .<br> 
			But for multiples of three print "Fast" instead of the number 
			and <br>for the   multiples of five print "Track". <br>For numbers
			which are multiples  of both three and five print "FastTrack".</p></em>');
			$theNumbers = 0;
			$lastNumber=100;
				echo "0 <br>";
				for ($i=1;$i<=$lastNumber;$i++)
				{
					if ($i%3==0 && $i%5==0)
					{
						echo "FastTrack !";
						echo "<br>";
					}
					elseif ($i%5==0)
					{
						echo "Track !";
						echo"<br>";
					}
					elseif ($i%3==0)
					{
						echo "Fast !";
						echo "<br>";
					}
					else echo $i . "<br>";
				}
				echo "<hr>";

	// Write a program that orders ascendingly the following array:
				// $array = array(2,3,1,5,4)

				echo('<em><p> 7. Write a program that orders ascendingly the following array: 
				$array = array(2, 3, 1, 5, 4);</em></p>');
				
		$array = array(2, 3, 1, 5, 4);		
		sort($array);		

		for ($i=0; $i < count($array); $i++) 
		{ 
			echo $array[$i] . " ";
		}
		print "<br>";
			
		?>


		</center>
	
	</body>
</html>


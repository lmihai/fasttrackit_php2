<?php
$loto_players = array(
					array("first_name" => "John", "last_name" => "Doe", "loto_ticket" => array(11, 3, 22, 17,36, 40)),
					array("first_name" => "Jane", "last_name" => "Foo", "loto_ticket" => array(32, 6, 18, 21,13, 42)),
					array("first_name" => "Elvis", "last_name" => "Peanutbutter", "loto_ticket" => array(21, 7, 17, 35, 5, 44))
					);
$loto_players[2]["loto_ticket"][6] = 13;
echo $loto_players[0]["first_name"] . " " . ", number of numbers on the tickets: " . count($loto_players[0]["loto_ticket"]) . "<br>";
echo $loto_players[2]["first_name"] . " " . ", number of numbers on the tickets: " . count($loto_players[2]["loto_ticket"]) . "<br>";
$john_tickets_sum = array_sum($loto_players[0][2]);
$elvis_tickets_sum = array_sum($loto_players[2][2]);
$total_tickets_sum = $john_tickets_sum + $elvis_tickets_sum;
echo "Sum of all numbers on tickets is: " . $total_tickets_sum . "<br>";
$john_tickets_max = max($loto_players[0][2]);
$elvis_tickets_max = max($loto_players[2][2]);
if ($john_tickets_max > $elvis_tickets_max) {
	echo "Maximum is: " . $john_tickets_max . "<br>";
}
else {
	echo "Maximum is: " . $elvis_tickets_max . "<br>";
}
?>
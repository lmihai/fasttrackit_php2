<?php
$loto_players = array(
					array("first_name" => "John",
						  "last_name" => "Doe",
						  "loto_ticket" => array(11, 3, 22, 17, 36, 40)),
					array("first_name" => "Jane",
						  "last_name" => "Foo",
						  "loto_ticket" => array(32, 6, 18, 21, 13, 42)),
					array("first_name" => "Elvis",
						  "last_name" => "Peanutbutter",
						  "loto_ticket" => array(21, 7, 17, 35, 5, 44))
					);
$loto_players[2]["loto_ticket"][6] = 13;
$loto_players[1]["loto_ticket"] = array();
//unset($loto_players[1]["loto_ticket"]);
for ($i=0; $i < count($loto_players); $i++) {
		echo $loto_players[$i]["first_name"];
		echo ", number of numbers on the tickets: ";
		echo count($loto_players[$i]["loto_ticket"]);
		echo"<br>";
}

?>
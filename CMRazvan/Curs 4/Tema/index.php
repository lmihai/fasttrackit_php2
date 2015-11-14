
<?php
echo "<h1>----Tema Curs 4-----</h1>";
?>

<?php
$friends = array();
$friends[1] = array('first_name'=>'John', 'last_name'=>'Doe', 'ticket' => array(1,3,21,4,54,32));
$friends[2] = array('first_name'=>'Jane', 'last_name'=>'Foo','ticket' => array(31,13,12,14,45,43));
$friends[3] = array('first_name'=>'Elvis', 'last_name'=>'Peanutbutter','ticket' => array(33,11,12,24,44,54));
?>

<?php
// 1.define a neasted a array to hold their first name , last name and the ticket with 6 numbers.
$loto_players = array(
					array("John", "Doe", 11, 3, 22, 17,36, 40),
					array("Jane", "Foo", 32, 6, 18, 21,13, 42),
					array("Elvis", "Peanutbutter", 21, 7, 17, 35, 5, 44)
					);
print("1");
print( "<pre>");
print_r($loto_players);
?>
<?php 
//2. Elvis selects a 7th number , add it to his ticket.
$friends[3] ['ticket'][] = "1"; //asa se adauga un element in array si in array+array cu destinatie. paranteza e goala ca sa puna la sfarsit 
print("2");
print( "<pre>");
print_r($friends[3]);
?>
<?php
//3. Jane cancels her ticket , so remove her numbers array completely.
print("3");
print( "<pre>");
unset($friends[3]['ticket'][0]);// am chemat frends 3 , din ticket si pe pozitia 0.
print_r($friends[3]['ticket']);// printeaza din frends 3 arrayiul ticket .

?>
<?php
//4. for each friend, display their first name and the number of numbers they have on the ticket.
print("4");
print( "<pre>");
for ($i=1; $i <= count($friends); $i++) { 
	echo $friends[$i]['first_name'];// intrebare cum ajung la arrayiul din array sa ster doar continut nu si array.
	echo " ";
	echo count($friends[$i]['ticket']);
	echo "<br>";
}

?>

<?php
//Calculate the sum of all numbers.
print("5");
$sum = 0;
for ($i = 1; $i < count($friends); $i++) { 
	for ($j=1; $j < count($friends[$i]['ticket']); $j++) { 
		$sum += $friends[$i]['ticket'][$j];
	}
}
echo "<br>";
echo($sum);
?>
<?php

?>

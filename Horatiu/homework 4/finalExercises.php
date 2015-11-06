<?php

echo "<h1>Tema cea mai importanta de pana acum si de altfel cea mai grea</h1>";
//Define a nested array to hold their first name, last name, and the ticket with 6 numbers
$friends = array();
$friends[0] = array('firstName' => 'John', 'lastName' => 'Doe', 'ticket' => array(11, 33, 25, 5, 17, 15));
$friends[1] = array('firstName' => 'Jane', 'lastName' => 'Foo', 'ticket' => array(10, 1, 44, 21, 28, 48));
$friends[2] = array('firstName' => 'Elvis','lastName' => 'Peanutbutter', 'ticket' => array(8, 4, 39, 33, 22, 46));

var_dump($friends);
//Checking if the results are right
echo "<p></p>";
//adding a number to Elvis
$friends[2]['ticket'][] = 19; 
var_dump($friends[2]);
//Checking if the ticket is there.
echo "<p></p>";

//Removing Jane's ticket
unset($friends[1]['ticket']);
print_r($friends);

echo "<p></p>";
//For each friend, display their first name and the number of numbers they have on the ticket
for ($i=0; $i < count($friends) ; $i++) { 
	if (isset($friends[$i]['firstName']) && isset($friends[$i]['ticket'])) {
	 	echo "Numele lui este ".$friends[$i]['firstName']." si numarul este de ".count($friends[$i]['ticket'])."bilete <br>";
	 } else {
	 	echo "Numele lui este ".$friends[$i]['firstName']." si numarul lui este de 0 bilete <br>";
	 }
	  
}
                                                        
                                                    







?>
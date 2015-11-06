<?php

$players = array();
$players[] = array('first_name' => 'John','last_name' => 'Doe','tickets' => array(2,34,23,44,14,25));
$players[] = array('first_name' => 'Jane','last_name' => 'Foo','tickets' => array(7,38,22,11,9,33));
$players[] = array('first_name' => 'Elvis','last_name' => 'Peanutbutter','tickets' => array(5,43,21,19,15,4));



$players[2]['tickets'][] = "1";



print_r($players);
?>
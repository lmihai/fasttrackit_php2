<?php

echo "<strong><h1>EXERCISES</h1></strong>";

/*THree friends (John Doe , Jane Foo , and Elvis Peanutbutter ) 
are playing the 6/49 lottery and each selects 6 numbers on their
lottery tickets. */

/* 1. Define a nested a array to hold their first
name; last name and the ticket with 6 numbers.*/

$friends = array();
$friends[1] = array('first_name'=>'John', 'last_name'=>'Doe', 'ticket' => array(1,3,21,4,54,32));
$friends[2] = array('first_name'=>'Jane', 'last_name'=>'Foo','ticket' => array(31,13,12,14,45,43));
$friends[3] = array('first_name'=>'Elvis', 'last_name'=>'Peanutbutter','ticket' => array(33,11,12,24,44,54));

/* 2. Elvis selects a 7th number ,  add it to his 
   ticket*/

$friends[3]['ticket'][6] = 5 ;

/* 3. Jane cancels her ticket, so remove her
 numbers array completly*/

 unset($friends[2]['ticket']) ;

 /* 4. For each friend, display their first name and 
 the number of numbers they have on the ticket*/

foreach ( $friends as $friend ) {
    echo $friend['first_name'] . ' has ';

    if ( isset( $friend['ticket'] ) ) {
       echo count($friend['ticket']);
    } 
    else {
     echo    '0';
    }
    echo ' tickets<br>';
}
?>


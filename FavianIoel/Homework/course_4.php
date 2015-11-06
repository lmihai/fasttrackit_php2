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
$friends[3] = array('first_name'=>'Elvis', 'last_name'=>'Peanutbutter','ticket' => array(33,11,12,24,44,56));

/* 2. Elvis selects a 7th number ,  add it to his 
   ticket*/

$friends[3]['ticket'][6] = 5 ;

/* 3. Jane cancels her ticket, so remove her
 numbers array completly*/

 unset($friends[2]['ticket']) ;

 /* 4.a) For each friend, display their first name and 
 the number of numbers they have on the ticket*/
echo('<strong><p>Display their first name and number of numbers they have on their tickets .</p></strong>');
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
/*4.b) Calculate the sum of all numbers (for each friend )*/
echo('<strong><p>Calculate the sum of all  numbers (for each friend).</p></strong>');
foreach ( $friends as $friend ) {
    echo "Sum of all numbers from  " . $friend['first_name'] . "'s ticket is " ;

    if ( isset( $friend['ticket'] ) ) {
       echo array_sum($friend["ticket"]) .'.'. "<br>";
    } 
    else {
     echo    '0 .' . '<br>';
    }
  
}

/* 4.c) Calculate the sum of all friends numbers . */
echo('<strong><p>Calculate the sum of all friends numbers .</p></strong>');
$start = 0;
$sum = 0;

		for ($start ; $start <= count($friends); $start++)
		{ 
			if (isset($friends[$start]['ticket'])) 
			{
				$sum += array_sum($friends[$start]['ticket']);
			}
		}
		echo "The total sum of all numbers from all tickets: " . $sum . "<br/>";

/*5. Display the biggest number from all tickets . */
echo('<strong><p>Dispaly the biggest number from all tickets .</p></strong>');


  $john_max = max($friends[1]['ticket']);
  $elvis_max = max($friends[3]['ticket']);

  if ($john_max  < $elvis_max) {
  	echo 'the biggest number is '.$elvis_max.'. <br>' ;
  }
       else{
       	echo 'the biggest number is '.$john_max.'. <br>';
       }
 
  /* 6. write a program that prints the numbers 
  from 1 to 100 . But for multiples of three print
  "Fast" instead of the number and for the 
  multiples of five print "Track". For numbers
  wich are multiples  of both three and five print
  "FastTrack". */
  echo('<strong><p>Write a program that prints the numbers 
  from 1 to 100 . But for multiples of three print
  "Fast" instead of the number and for the 
  multiples of five print "Track". For numbers
  wich are multiples  of both three and five print
  "FastTrack".</p></strong>');
  $start = 0 ;
  $stop = 100 ;
  $sum = 0;

  for ($start; $start <= $stop ; $start++) { 
  	if ($start %3 == 0) {
  		echo "Fast"."<br>";
  	}
  	elseif ($start % 5 == 0 ) {
  		echo "Track"."<br>";
  	}
  	elseif ($start % 3  == 0 && $start % 5 == 0) {
  		echo "FastTrack"."<br>";
  }
  }
?>
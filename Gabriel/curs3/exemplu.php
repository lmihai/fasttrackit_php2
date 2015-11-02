<?php

	$text = "Hello World";
	echo $text;
	$students = 5;
	define("STUDENTS_COURSE", 10);

	
?>

<p>there are <?php echo $students; ?> students in the PHP course</p>
<p> <?php echo STUDENTS_COURSE?></p>

<?php
	$count = 10;
	print('<p>There are $count in the room today</p>');
	print("There are $count in the room today");
	print('There are' . $count . 'in the room today');
?>

<?php
	
	$a = 1;
	$b = 2;
	$c = 3;
	$d = 4;

	$sum = $a + $b;
	$sum = $sum + $c;
	$sum += $d;
?>

<?php
	
	$students_in_the_room = 13;
	$students_not_prezent = 2;
	$students_in_other_courses = 30;
	$students_php_text = "Students in the PHP course: ";
	$studentstotal_text = "Total FacsttrackIT students: ";
	$students_php_course = $students_in_the_room + $students_not_prezent;

?>

<p><?php print($students_php_text . $students_php_course) ?></p>

<?php
	$username = "admin";
	if($username == "admin"){
		echo "You are allowed to see this.";
	}
	else{
		echo "You are not allowed to see this.";
	}

?>

<?php
	$points_theory = 7;
	$points_practice = 3;
	$sum = $points_practice + $points_theory;
	if($sum == 10){
		echo "<p>Perfect grade!</p>";
	}
	else{
		echo "Not perfect:)";
	}
?>

<?php
	$day = "saturday";
	$hour = 10;
	if (($day == "saturday") && ($hour >= 10))
	{
		echo "<p>PHP course has started</p>";
	}
?>

<?php
	$shoes_color = 'blue';
	switch($shoes_color){
		case 'blue':{
			$shirt_color = 'green';
			break;
		}
		case 'black':{
			$shirt_color = 'white';
			break;
		}
		default:{
			$shirt_color = 'gray';
		}
	}
	echo "<p>$shirt_color</p>";


?>


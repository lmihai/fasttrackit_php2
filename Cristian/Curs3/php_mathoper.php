<?php
	
	$a = 1;
	$b = 2;
	$c = 3;
	$sum = $a + $b;
	print("<p> $sum</p>");
	$sum = $sum + $c;// $sum += $c;
	print("<p> $sum </p>");
	$students_in_the_room = 13;
	$students_not_present = 2;
	$students_in_other_courses = 30;
	$students_php_text = "Students in the PHP course: ";
	$students_total_text = "Total FastTrackIT students: ";
	$sum_students=$students_in_the_room + $students_not_present;
	$students_in_php_course =$students_php_text . $sum_students;
	print("<p>$students_in_php_course  </p>");
	$sum_total_students = $sum_students + $students_in_other_courses;
	$students_in_all_courses = $students_total_text . $sum_total_students;
	print("<p> $students_in_all_courses");


//FLOAT

	$a = 1.75;
	$b = 1.25;
	print("<p>" . ($a+$b) . "</p>");

// BOOLEAN & if

	$surname = "admin";
	$surname2 = "member";
	$is_admin = ($surname == "admin");
	$is_member = ($surname == "member");
	if($is_admin == True)
	{
		print("<p> True </p>");
	}
	else
	{
		echo "<p> False</p>";
	}
	if($surname2 == "member")
	{
		echo "<p> You're ours </p>";
	}
	else
	{
		echo "<p> Please subscribe </p>";
	}

	$points_theory = 7;
	$points_practice = 3;
	if($points_practice + $points_theory == 10)
		print("<p> Perfect grade!</p>");
	else
		print("<p> Not perfect :)</p>");



	$day = "Saturday";
	$hour = 10;
	if(($day == "Saturday") && ($hour >= 10))
	{
		print("<p> PHP course has started</p>");
	}
	else{
		print("<p> Relax </p>");
	}
	$try = "0";
	if($try)
	{
		print("<p> yes </p>");
	}
	else
	{
		print("<p> no </p>");
	}

	$username= "admin";
	if($username == "admin")
	{
		print("<p> You're allowed</p>");
	}
	elseif($username == "member")
	{
		echo "<p> You're allowed </p>";
	}
	else
	{
		echo "<p> You're not allowed </p>";
	}

	$shoes_color = 'blue';
	switch ($shoes_color) {
		case 'blue':
			$shirt_color = 'green';
			break;
		case 'black':
			$shirt_color = 'white';	
			break;		
		
		default:{
			$shirt_color = 'gray';
		}
			break;
			
	}
	echo "<p> $shirt_color </p>";

?>
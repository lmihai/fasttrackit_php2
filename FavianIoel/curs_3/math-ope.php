<?php
//initial values
$students_in_the_room = 13;
$students_not_present = 2;
$students_in_other_courses = 30;
$students_php_text = "Students in the PHP course :  ";
$students_total_text = "Total FastTrackIT students : ";
//task 1
$total_students_php = $students_in_the_room + $students_not_present ;
$students_in_php_course = "students in PHP courses : " . " " . $total_students_php ;

echo $students_in_php_course ;

echo "<h1> </h1> ";
//task 2
$total_students = $students_in_the_room + $students_not_present + $students_in_other_courses ;
$students_in_all_php_courses = "Students in all PHP courses : " . " " . $total_students ;

echo $students_in_all_php_courses ;

?>
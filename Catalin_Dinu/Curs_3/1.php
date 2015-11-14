<?php
$text="Hello world";
echo $text;
$students = 10;
echo "There are $students students in the PHP course";
define("COURSE", "web development with PHP");
define("students", 10);
echo COURSE;
$students_in_the_room = 13;
$students_not_present = 2;
$students_in_other_courses = 30;
$students_php_text = "Students in PHP course: ";
$students_total_text = "Total FastTrackIT students.";
$students_in_PHP_course = $students_in_the_room + $students_not_present;
echo $students_php_text . $students_in_PHP_course;
?>
<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `school`
//

// `school`.`courses`
$courses = array(
  array('id' => '1','coursename' => 'Introducere in C#','trainer' => 'Costea Mihai Razvan'),
  array('id' => '2','coursename' => 'Introducere in Java','trainer' => 'Anca'),
  array('id' => '9','coursename' => 'Introducere in HTML','trainer' => 'Razvan'),
  array('id' => '10','coursename' => 'Intruducere in Php','trainer' => 'Costea Anamaria')
);

// `school`.`students`
$students = array(
  array('id' => '1','firstname' => 'Denisa','lastname' => 'Danciu','course' => '1','score' => '1'),
  array('id' => '2','firstname' => 'Costea','lastname' => 'Mihai','course' => '1','score' => '2'),
  array('id' => '3','firstname' => 'Anca','lastname' => 'Budaca','course' => '2','score' => '6'),
  array('id' => '4','firstname' => 'Dan','lastname' => 'Maier','course' => '2','score' => '3')
);

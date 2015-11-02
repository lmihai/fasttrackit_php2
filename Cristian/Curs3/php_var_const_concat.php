<?php 
	$text="Hello to myself!\n";
	echo $text;
	$students=5;
	define('COURSE', "Web development with PHP");
	define('STUDENTS_COUNT', 10);
	//echo COURSE;
	$maker="Volkswagen";
	$model="Bora";
	$car = $maker . $model;//$car contains "VolkswgagenBora"
	$car = $maker . " " . $model;//$car contains "Volkswagen Bora"
	echo "\n";
	print("<p>I drive a " . $car . "</p>");
	print("<p>I drive a " . $maker." ".$model . "</p>");
	$count = 10;
	print("<p>There are $count students in room today</p>");


 ?>

 <p> There are <?php echo $students; ?>  students in the PHP course</p>
 <p> <?php echo COURSE;?></p>
 
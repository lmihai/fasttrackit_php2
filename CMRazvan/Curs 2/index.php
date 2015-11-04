<?php
$text = "Hello World";
echo $text;
$students =5;

?>

<p> There are <?php echo $students; ?> students in the PHP</p>

<?php define ("COURSE", "Aston Martin ");
	  define ("CARS_COUNT", 30);
	  echo COURSE; 
	  echo CARS_COUNT;
?>
<?php 
	  	$maker = "Ford";
	  	$model= "Escort";
	  	$car = $maker . $model; //$car contains "FordEscort"//
	  	$car = $maker . "" . $model; // $car contains "Ford Escort"//
	  	print("I drive a " . $car); // "I drive a ford escort"//
	  	print("I drive a ". $maker . "" . $model); //"I drive a ford escort"//
?>
<?php
	  	$count = 10;
	  	print('<p>There are $count students in the room today</p>');// ca ii cu ghilimele simple si nu are forma corecta//
	  	print("<p>There are $count students in the room today</p>");
		print('<p>There are ' . $count . ' students in the room today</p>'); // asta este forma corecta de scriere a count//
?>
<?php
	$a = 1;
	$b = 2;
	$c = 3;
	$d = 4;
	$sum = $a + $b; // $sum is 3
	print("<p>$sum</p>");
	$sum = $sum + $c; // $sum is 6
	print("<p>$sum</p>");
	$sum += $d; //$sum is 18 (identical whit $sum = $sum +$d)
	print("<p>$sum</p>");
?>
<?php
$students_in_the_room = 20;
$students_not_present = 5;
$students_in_the_other_courses = 50;
$students_php_text = "Students in the PHP course ";
$students_total_text = "Total FastTrackIT students ";
$sum = $students_in_the_room + $students_not_present;
echo $students_total_text; 
echo $sum;
print('<p> Students in the PHP course ' . $students_in_the_other_courses . ' </p>');

?>
<?php

$a = 1.75;
$b = 2.25;
$c = 7.75;
print($a + $b);// daca calculam direct nu scriem in ghilimele "" // 

?>
<?php

$total = $c / 12;
print('<p>' . round ($total,3) . '</p>');// pentru 3 3 zecimale.

?>

<?php
$username = "member";
$id_admin = ($username == "admin");//$lis_admin is set to True
$id_member = ($username == "member");//$lis_member is set to False

print($id_admin);
print($id_member);
?>

<?php
$a = 6;
$b = 4;
$username = $a + $b;

if ( $username == 10) 
{
	print('<p>IS perfect</p>');
}
else {
	print('<p>not perfect</p>');
}
?>

<?php
$day = "saturday";
$hour = 10;

if (( $day == "saturday") && ( $hour >= 10 )) 
{
	print("<p>Esti la curs</p>");
}
else
{
	print("<p>Nu esti la curs</p>");
}
?>


<?php
$username = "asdasd";

if ($username == "admin") 
{
 	print("<p>Esti Bun</p>");
} 
elseif ($username == "el") 
{
	print("<p>Esti Mediocru</p>");
}
elseif ($username == "eu") 
{
	print("<p>Esti Slab</p>");
}
elseif ($username == "tu") {
	print("<p>Esti cel mai slab</p>");
}
else{
	print("<p>esti nimic</p>");
}
?>


<?php
$shoes_color = "blue";
switch ($shoes_color) 
{
	case 'blue':{
		$shirt_color = 'green';
		break;
	}

	case 'black':
	{
	$shirt_color = 'white';
		break;
}
default: {
$shirt_color = 'red';
		break;


}
}

echo "<p>$shirt_color</p>";





?>

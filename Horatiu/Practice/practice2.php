	<?php

$number = 1001;

$maxNum = 1000;
$minNum = 500;

//Text input si submit..
echo "<h1>Enter a number between 500 and 1000:</h1>";
echo "<p></p>";

echo "<input type='text' name='name'>";
echo "<input type='submit' value='Enter'>";
echo "<p></p>";

if (($number >= $minNum && $number <= $maxNum)) {
	echo "Da, intr-adevar";
} else {
	echo 'Number must be between '.$minNum.' and '.$maxNum;
}








?>

<html>
<head>
</head>

<?php
$age_maria = 20;
$age_ana = 25;
$age_vlad = 17;
$age_ionescu = 25;
$age_george = 30;

// Compare the following ages and print the name of the oldest person
// Maria vs Ana /  George vs Ionescu / Ionescu vs Ana / George vs Vlad.

if ($age_maria > $age_ana) {
	echo "Maria este mai in varsta ca si Ana";
} else {
	echo "Ana este mai in varsta ca si Maria";
}

echo "<p></p>";

//Alex vs Ionescu
if ($age_george > $age_ionescu) {
	echo "George e mai in varsta ca si Ionescu";
} else {
	echo "Ionescu e mai in varsta ca si George";
}
echo "<p></p>";
//Ionescu vs Ana 

if ($age_ionescu > $age_ana) {
	echo "Ionescu este mai in varsta decat Ana";
} else {
	echo "Ana este mai in varsta decat Ionescu";
}
echo "<p></p>";


//George vs Vlad

if ($age_george > $age_vlad ) {
 echo "George este mai in varsta decat Vlad";
} else {
 echo "Vlad este mai in varsta decat George"; 		
}



// Slide 1 finish .....








?>




</html>
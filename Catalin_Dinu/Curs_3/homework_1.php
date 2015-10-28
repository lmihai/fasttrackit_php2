<?php
$age_maria = 20;
$age_ana = 25;
$age_vlad = 17;
$age_ionescu = 25;
$age_george = 30;
// Maria vs Ana
if ($age_maria > $age_ana) {
	echo "Maria este mai mare." . "<br />" ;
}
else {
	echo "Ana este mai mare." . "<br />";
}
//Ionescu vs Ana
if ($age_ionescu > $age_ana) {
	echo "Ionescu este mai mare." . "<br />";
}
elseif ($age_ionescu == $age_ana) {
	echo "Ionescu si Ana au aceeasi varsta." . "<br />";
}
else {
	echo "Ana este mai mare." . "<br />";
}
// George vs Vlad
if ($age_george > $age_vlad) {
	echo "George este mai mare." . "<br />";
}
else {
	echo "Vlad este mai mare.";
}
?>

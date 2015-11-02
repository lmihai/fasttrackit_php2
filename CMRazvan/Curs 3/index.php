<?php

for ($var=1; $var<11; $var++)
{ 
	echo $var;
	echo '<br>';
}
?>


<?php
$start = 1;
$end = 3;
$sum = 0;
for($i= $start ; $i <= $end; $i ++)
{
	$sum = $sum + $i;
}
print($sum);
?>


<?php
$start = 1;
$end = 1000;
$sum = 0;
for($i= $start ; $i <= $end; $i ++)
{

	$sum = $sum + $i;

}
	echo '<br>';
	print($sum);

?>


<?php
$i++;
while ($i <= 100) {

	$i++;
	if ($i == 50) {
		break;
	}
}

?>

<?php
echo "<br>";
$i = 1;
$end = 1000;
$sum = 0;

while ($i <= $end) {
	$sum = $sum = $i;
	$i++;
}
print($sum) ;
?>

<?php
$colors = array("red" , "blue" , "green");// arrai   block de culori 
echo '<br>';
print $colors[1];// cum se apeleaza o culoare din bloc de culori
$color = array(1 =>"red", 2=>"blue", 3=>"green");
echo '<br>';
print $color[1];
$value_exist = in_array("green", $colors);//cautare in array coloarea
echo '<br>';
print $value_exist;
?>

<?php
// print_r($culoare);
// Array
// (
// [0] => red
// [1] => blue
// [2] => green
// );
?>

<?php
$colors = array("red", "blue", "green", "white");
for ($i=0; $i <count($colors); $i++)
{
	echo '<br>';
	echo $colors[$i];
	echo '<br>';
}
?>

<?php
$numbers = array();
$numbers[] = 1;
$numbers[] = 2;
$numbers[] = array(3,1);

var_dump($numbers);
echo '<br>';
echo '<br>';

// Array
// (
// [0] => 1
// [1] => 2
// [3] => array
// 			(
// 				[0]=>3
// 				[1]=>1
// 			)
// )


?>


 

<?php
$team = array();
$team['PM'] = 'John';
$team['Developer'] = 'Jack';
$team['Tester'] = 'Jake';

foreach ($team as $role => $name) {
	echo $role;
	echo ': ';
	echo $name;
	echo '<br>';

}

?>

<?php
$a= 2;
$b= ++$a;// e diferenta intre ++$a si $a++ se face calcul inainte
echo '<br>';
echo $b;
echo '<br>';
print $b;
?>
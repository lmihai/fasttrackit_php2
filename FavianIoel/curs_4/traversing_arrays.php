<?php
print('<strong><h1>Traversing Arrays</h1></strong>');

$colors = array('red','blue','green' );
//the full code:
for ($i=0; $i < count($colors); $i++) { 
	echo $colors[$i];
	echo "<br>";
}

?>

<?php
//An element can hold any variable. So-it can also be an array
$numbers = array();
$numbers[1] =  1;
$numbers[2] =  2;
$numbers[31] = array(3, 1);


$numbers = array();
$numbers['PM'] =  'John';
$numbers['Develoer'] =  'Jack';
$numbers['Tester'] = 'Jake';
//same as :
$team = array('PM' => 'John' , 'Developer' => 'Jack' , 'Tester' => 'Jake' );

?>
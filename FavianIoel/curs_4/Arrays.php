<?php

// ================SLIDE 25-28===============



echo "<strong><h1>ARRAYS</h1></strong><br>";
//first array 
$money = array('Ron','Euro','lira');

print $money[1] . '<br>';


//assigned values
$colors = array(1 =>'red' ,2 => 'blue',3=>'green' );
echo $colors[1] . '<br>';

?>

<?php

//=============SLIDE 29=============


//Define and populate in one step 
$names = array('Favian','Valer','Cassi' );
echo $names[1] . "<br>";

//Define and assign values later
$cars = array ();
$cars[1]="red car";
$cars[2]="blue car";
$cars[3]="orange car";

echo $cars[3]."<br>";  /* yaaaass this is working but a little boring to do 
                          this everytime :))*/


?>
<?php
//===========SLIDE 30==============

// print with print_r command .
print_r($cars);
echo '<br>';
//print with var_dump command .
var_dump($colors );
echo '<br>';

?>

<?php
//=========SLIDE 31-33=============
//-------MODIFYING ARRAYS -----&---- Useful array functions---.

$phones = array('redphone' ,'bluephone' , 'greenphone' );

//add element
$phones[2] = 'yellowphone' ;

//replace element
$phones[0] = 'purplephone' ;

//delete element
unset($phones[0]) ;

//return number of elements in an array 
print count($phones);
echo '<br>';

//search for a specific value
$value_exists = in_array('bluephone', $phones);
echo $value_exists;
echo '<br>';

?>
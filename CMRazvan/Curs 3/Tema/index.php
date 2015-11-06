<?php
$age_maria = 20;
$age_ana = 25;
$age_vlad = 17;
$age_ionescu = 25;
$age_george = 30;
print("<p>Maria are : $age_maria de ani.<p>");
print("<p>Ana are : $age_ana de ani.<p>");
print("<p>Vlad are : $age_vlad de ani.<p>");
print("<p>Ionescu are : $age_ionescu de ani.<p>");
print("<p>George are : $age_george de ani.<p>");

?>
<?php //Maria vs Ana
$age_maria = 20;
$age_ana = 25;

if($age_ana < $age_maria)
{
	print("<p>Maria vs Ana<p>");
	print("<p>Maria este mai mare pentru ca are : $age_maria de ani<p>");	
}
elseif($age_ana > $age_maria)
{
	print("<p>Maria vs Ana<p>");
	print("<p>Ana este mai mare pentru ca are : $age_ana de ani<p>");	
}
elseif ($age_ana = $age_maria) 
{
	print("<p>Maria vs Ana<p>");
	print("<p>Ana si Maria au acceiasi ani. <p>");
}
?>


<?php //Ionescu vs Ana
$age_ionescu = 25;
$age_ana = 25;

if($age_ana < $age_ionescu)
{
	print("<p>Ionescu vs Ana<p>");
	print("<p>Ionescu este mai mare pentru ca are : $age_ionescu de ani<p>");	
}
elseif($age_ana > $age_ionescu)
{
	print("<p>Ionescu vs Ana<p>");
	print("<p>Ana este mai mare pentru ca are : $age_ana de ani<p>");	
}
elseif ($age_ana = $age_ionescu) 
{
	print("<p>Ionescu vs Ana<p>");
	print("<p>Ana si Ionescu au acceiasi ani. <p>");
}
?>

<?php //Vlad vs Ionescu
$age_ionescu = 25;
$age_vlad = 17;

if($age_vlad < $age_ionescu)
{
	print("<p>Vlad vs Ionescu<p>");
	print("<p>Ionescu este mai mare pentru ca are : $age_ionescu de ani<p>");	
}
elseif($age_vlad > $age_ionescu)
{
	print("<p>Vlad vs Ionescu<p>");
	print("<p>Vlad este mai mare pentru ca are : $age_vlad de ani<p>");	
}
elseif ($age_vlad = $age_ionescu) 
{
	print("<p>Vlad vs Ionescu<p>");
	print("<p>Vlad si Ionescu au acceiasi ani. <p>");
}
?>

<?php //George vs Vlad
$age_ionescu = 25;
$age_vlad = 17;

if($age_vlad < $age_george)
{
	print("<p>George vs Vlad<p>");
	print("<p>George este mai mare pentru ca are : $age_george de ani<p>");	
}
elseif($age_vlad > $age_george)
{
	print("<p>George vs Vlad<p>");
	print("<p>Vlad este mai mare pentru ca are : $age_vlad de ani<p>");	
}
elseif ($age_vlad = $age_george) 
{
	print("<p>George vs Vlad<p>");
	print("<p>Vlad si George au acceiasi ani. <p>");
}
?>

<?php
$a = true;
$b = false;
$c = 1;
$d = 0;
//not($a) and $b
print ("<p>" . !($a) && $b . "<p>");
	echo '<br>';
// $a or $b
print ("<p>" . $a || $b . "<p>");
	echo '<br>';
//not($a or $b)
print ("<p>" . !($a && $b) . "<p>");
	echo '<br>';
//$a === $c
print ("<p>" . $a === $c . "<p>");
	echo '<br>';
//$a and $c or $d
print ("<p>" . $a && $c || $d . "<p>");
	echo '<br>';
// not($c) == $b
print ("<p>" . !($c) == $b . "<p>");
	echo '<br>';
// $a == $c
print ("<p>" . $a == $c . "<p>");
	echo '<br>';
// not ($b) === $c
print ("<p>" . !($b) === $c . "<p>");
	echo '<br>';
// $a or not ($b)
print ("<p>" . $a || ! ($b) . "<p>");
	echo '<br>';

?>



<?php
$x = 5;
$y = 6;
if (!($x>6)) {
		echo '<br>';
	print("X mai mare decat 6");
		echo '<br>';
}
?>

<?php
$x = 5;
$y = 6;

if ($x==6 && $x==5) {
		echo '<br>';
	print("Da e bun");
} else {
		echo '<br>';
	print("Ceva nu merge");
}

?>
<?php
$x = 5;
$y = 6;

if ($x==6 || $x==5) {
		echo '<br>';
	print("Da e bun");
} else {
		echo '<br>';
	print("Ceva nu merge");
}

?>

<?php
$x = 5;
$y = 6;

if ($x>-1 && $y<10) {
		echo '<br>';
	print("Da e bun");
} else {
		echo '<br>';
	print("Ceva nu merge");
}

?>



<?php
$a = 3;
$c = 21;
$e = 1;

switch ($a) {
    case ($a>$c && $c>$e):
    		echo '<br>';
        print($e.','.$c.','.$a);
    
        break;
    case ($e>$c && $c>$a):
    		echo '<br>';
        print($a.','.$c.','.$e);
    
        break;
    case ($c>$a && $a>$e):
    		echo '<br>';
        print($e.','.$a.','.$c);
    
        break;

}
?>
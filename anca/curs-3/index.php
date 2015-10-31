<?php
$start = 1;
$end = 1000;
$sum = 0;
for($i=$start; $i<=$end; $i++)
{
	$sum = $sum + $i;
}
print $sum ;
?>
<?php
$i=1;
$end=1000;
$sum=0;
while($i<=$end){
	$sum=$sum+$i;
	$i ++;
}
echo '<br>';
print $sum;

?>
<br>
<br>
<?php
$colors =array (1 =>'red', 2 => "blue",3=>'green' );
echo '<br>';
print_r($colors);
?>
<br>
<br>
<?php
$colors=array('red','blue','green');
for($i=0;$i<count ($colors);$i++){
	echo $colors[$i];
	echo'<br>';
}
?>
<?php
$colors =array (1 =>'red', 2 => "blue",3=>'green' );
$colors[]='yellow';
echo '<br>';
print_r($colors);
?>


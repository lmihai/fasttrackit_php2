<?php
$text="hello world!";
echo $text;
?>
<br/>
<br/>
<?php
$students=10;
echo $students;
?>
<br/>
<br/>
<?php
define('COURSE',"Web development with PHP");
define('STUDENTS_COUNT',10);
echo COURSE;
echo STUDENTS_COUNT;
?>
<br/>
<br/>
<?php
$maker="Ford";
$model=" Escort";
$car= $maker . $model;
print('I drive a'. $car)
?>
<br/>
<br/>
<?php
$count=10;
print('There are'  .$count.' students in class today');
?>
<br/>
<br/>
<?php
$a=1;
$b=2;
$c=3;
$d=4;
$sum=$a+$b;//$sum is 3
$sum=$sum+$c;//$sum is 6
$sum+=$d;// $sum is 10(identical with $sum=$sum+$d)
?>
<br/>
<br/>
<?php
$students_in_the_room= 13;
$students_not_present= 2;
$students_in_other_courses= 30;
$students_php_text="Students in the PHP course: ";
$sum=$students_in_the_room+$students_not_present;//students in the PHP course
print($students_php_text. $sum);
$students_total_text=" Total FastTrackIT students: ";
$sum+=$students_in_other_courses;
print($students_total_text. $sum);
?>
<br/>
<br/>
<?php
$username="admin";
if($username == "admin"){
echo "YOU are allowed to see this.";
}
else {
echo "you are not allowed to see this.";
}
?>
<br/>
<?php
$day="saturday";
$hour=10;
if (($day=="saturday") and ($hour>=10)){
echo "PHP course has started.";
}
?>
<br/>
<?php
$salt=TRUE;
$pepper=TRUE;
if ($salt==$pepper){
echo "Yummy!";
}
?>
<br/>
<?php
$shoes_color= "blue";
switch($shoes_color){
case "blue":{
$shirt_color="green";
break;
}
case "black":{
$shirt_color="white";
break;
}
default: {
$shirt_color="gray";
}
}
echo $shirt_color;
?>






<?php
echo"<h1><b>---R1---</b></h1>';
echo'<p></p>';
/*------------R1---------------------
compare the following ages and print the name of the oldest person:
a)Maria vs Ana   c)Ionescu vs Ana
b)Alex vs Ionescu d)George vs Vlad
*/
//given variables:
$age_Maria = 20;
$age_Ana = 25;
$age_Ionescu= 25;
$age_george=30;
//added
$age_alex=18;
$age_vlad=19;
//a)
if($age_maria>$age_ana) {
print('Maria.');
}
elseif ($age_maria<$age_ana){
print ('Ana.);
}
echo"<p></p>
//b
if($age_alex>$age_ionescu){
print('Alex.');
}
elseif($age_alex<$age_ionescu){
print('Ionescu.');
}
echo'<p></p>';
//c
if($age_ionescu.$age_Ana){
print('Ionescu.');
}
elseif($age_ionescu,$age_ana) {
print('Ana.');
}
elseif($age_ionescu==$age_ana){
print('Bouth Ionescu and Maria are 25.');
}
echo'<p></p>';
//d)if(age_george>$age_vlad){
print("George.");
}
elseif($age_george<$age_vlad){
print('Vlad.');
}
?>
<br/>
<br/>
<br/>
<?php
echo'<h1><b>---R2---</h1></b>;
echo"<p></p>;
/*---R2---
Print the results for the following expressions:
a)not($a)and$b
b)$a or $b
c)not($a or $b)
d)$a===$c
e)$a and $c or $d
f)not($c)==$b
g)$a==$c
not($b)===$c
$a or not ($b)*/
//Given the following variables:
$a=true;
$b=false;
$c=1;
$d=0
//aded values:
$x1=!($a)&& $b;
$x2=$a||$b;
$x3=!($a||$b);
$x4=$a==$c;
$x5=$a&&(&c||$d);
$x6=!($c)==$b;
$x7=$a==$c;
$x8=!($b)===$c;
$x9=$a||!($b);
//a)
echo'<br/>';
if($x1==false){
print('false');
}
//b)
echo'<br/>';
if($a||$b){
print('true');
}
//c)
echo'<br/>'
if($x3==false){
print ('false')
}
//d)
echo '<br/>;
if($x4==false){
print('false');
}
//e)
echo'<br/>';
if($x5==true){
print('true');
}
else{
print('false');
}
//f)
echo"<br/>";
if($x6==true){
echo'true';
}
echo'false';
}
//g)
echo'<br/>';
if($x7==true) {
echo 'true';
//h
echo'<br/>';
if($x8==false){
echo'false';
//i)
echo'<br/>';
if($x9==true){
echo 'true';
}
?>
<br/>
<br/>
>/ php
//---R3---
echo'<h1><b>---R3---</h1></b>';
/*given the following variables*/
$x=5;
$y=6;
/*solve and explain the results for:
a)!(x>6)
b)(x==6 && x=5)
c)(x==6|| x==5)
d) (x>-1&& y<10)*/
//a)
if ($x>6){
echo 'a)x>6';
}
else{
echo'a) !(x>6)-->because x=5.';
}
echo'<p></p>';
//b)
if($x==6 && $x==5){
echo'b)true';
}
else{
echo'b)false -because x<6';
}
echo'<p></p>';
//c)
if($x==6|| $x==5){
echo'c)true=>x=5";
}
echo"<p></p>';
//d)
if($x>-1&& $y<10)[
echo'd)true';
}
?>








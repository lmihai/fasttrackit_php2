<?php
setcookie('friend','yes',time() + 3600 );// trebuie scris prima data si prima data
('friend'numele , 'yes' value, time() + 3600 expiration date)
?>
<?php
echo$_COOKIE['friend'];
?>
<?php
setcookie('friend', null , time() - 3600 ); //asa sterg cookie
?>
<?php
echo$_COOKIE['friend'];
setcookie('friend', visits , time() + 3600 );
?> <?php
echo$_COOKIE['friend'];
?>


<?php
// aici incrementam partea de citire a cookies

if (!isset($_COOKIE['visits'])) {
	setcookie('visits', 1 , time() + 3600);
	echo "Hello";
}
else {
	if ($_COOKIE['visits'] == 1) {
		setcookie('visits', 2 , time() + 3600); // in loc de 2 face $_COOKIE['visits'] ++ pentru incrementare ca sa ajungem la infinit si putem adauga conditia pentru a tot a 5 a vizita sa dea un popul
		echo "Hello again";
	} 
	else {
		setcookie('visits', null , time() - 3600);
		echo "BYE";
	}

}



?>
<?php
session_start();
//echo $_SESSION['name']='John';

//unset($_SESSION['name']);

echo $_SESSION['name'];
?>

<?php
session_start();
if (isset($_GET['name'])) {
	$_SESSION['name'] = $_GET['name'];

}

if (isset($_SESSION['name'])) {

	echo($_SESSION['name']);
}

?>
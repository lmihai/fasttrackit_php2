<?php
print_r($_POST);
if(isset($_POST["name"]) && isset($_POST["email"])) {
	echo "Name: " . $_POST["name"];
	echo "<br>";
	echo "Email: " . $_POST["email"];
	echo "<br>";
}
$name = $_POST["bought"];
if(isset($_POST["bought"])) {
	echo "I BOUGHT: <br>";
	echo "<br>";
	foreach ($name as $bought){
		echo $bought."<br />";
	}
}
else {

	echo "I have not bought anything. <br>";

}
$taste = $_POST["tasted"];
if(isset($_POST["tasted"])) {
	echo "It TASTED: <br>";
	echo "<br>";
	foreach ($taste as $tastes) {
		echo $tastes."<br />";
	}
}
$style = $_POST["style"];
if(isset($_POST["style"])) {
	echo "The STYLE was: <br>";
	echo "<br>";
	foreach ($style as $styles) {
		echo $styles."<br />";
	}
}
$style = $_POST["style"];
if(isset($_POST["style"])) {
	echo "The STYLE was: <br>";
	echo "<br>";
	foreach ($style as $styles) {
		echo $styles."<br />";
	}
}
?>
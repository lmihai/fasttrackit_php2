<?php
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
		echo $bought ."<br />";
	}
}
else {

	echo "I have not bought anything . <br>";

}
$taste = $_POST["tasted"];
if(isset($_POST["tasted"])) {
	echo "It TASTED: <br>";
	echo "<br>";
	foreach ($taste as $tastes) {
		echo $tastes ."<br />";
	}
}
$style = $_POST["style"];
if(isset($_POST["style"])) {
	echo "The STYLE was: <br>";
	echo "<br>";
	foreach ($style as $styles) {
		echo $styles ."<br />";
	}
}
$purchase = $_POST["purchase"];
if(isset($_POST["purchase"])) {
	echo "How satisfied are you with the purchase you made: <br>";
	echo "<br>";
	foreach ($purchase as $purchases) {
		echo $purchases ."<br />";
	}
}
$service = $_POST["service"];
if(isset($_POST["service"])) {
	echo "How satisfied are you with the service you received: <br>";
	echo "<br>";
	foreach ($service as $services) {
		echo $services ."<br />";
	}
}
$company = $_POST["company"];
if(isset($_POST["company"])) {
	echo "How satisfied are you with our company overall: <br>";
	echo "<br>";
	foreach ($company as $companies) {
		echo $companies ."<br />";
	}
}
$buy = $_POST["buy"];
if(isset($_POST["buy"])) {
	echo "How likely are you to buy from us again: <br>";
	echo "<br>";
	foreach ($buy as $buy_from) {
		echo $buy_from ."<br />";
	}
}
$product = $_POST["reccommend_products"];
if(isset($_POST["reccommend_products"])) {
	echo "How likely are you to recommend our products to others: <br>";
	echo "<br>";
	foreach ($product as $products) {
		echo $products ."<br />";
	}
}
$shop = $_POST["reccommend_shop"];
if(isset($_POST["reccommend_shop"])) {
	echo "How likely are you to recommend our shop to others: <br>";
	echo "<br>";
	foreach ($shop as $shops) {
		echo $shops ."<br />";
	}
}
?>
<html>
<head>
	<title>ANSWER</title>
</head>
<body>
<form action="survey.php">
	<input type="submit" value="Take the survey again">
</form>
</body>
</html>
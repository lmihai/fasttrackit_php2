<?php
if (isset($_POST['username']) &&
	isset($_POST['password'])) {
	//
	echo "Hello ".$_POST['username'].", your password ".$_POST['password']." was correct";
}
echo "<p></p>";
if (isset($_POST['checkbox'])) {
	echo "Yeeei ai bifat singura casuta care exista";
} else {
	echo "Ai ratat casuta";
}







?>
<?php
echo "Hello " . $_POST['username'] . ", your password:\n " . $_POST['password'] 
. " was corect.";
echo "<p>";
if(isset($_POST['checkbox'])){
	echo "Yeey you want us to remember you!";
}else {
	echo "Oh no, you chose that we'll forget you :(";
}
echo "</p>";

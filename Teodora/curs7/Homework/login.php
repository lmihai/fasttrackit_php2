<?php

echo "<h2>Log In</h2>";

echo '<form method = "post" action= "process.php">';
	echo '<p><strong>Please insert your username</strong></p><br>';
	echo '<input type = "text" name = "username" value ="Username">';
	echo '<p><strong>Please insert your password</strong></p><br>';
	echo '<input type = "text" name = "password" value ="Password"><br><br>';
	echo '<input type = "submit" value = "SUBMIT">';
echo '</form>';

?>
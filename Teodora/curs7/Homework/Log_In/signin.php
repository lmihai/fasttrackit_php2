<?php
	echo "<h2>Sign In</h2>";

echo '<form method = "post" action= "process_new.php">';
	echo '<p><strong>Please insert your username</strong></p><br>';
	echo '<input type = "text" name = "username" value ="Username">';
	echo '<p><strong>Please insert your password</strong></p><br>';
	echo '<input type = "password" name = "password" value ="Password"><br><br>';
	echo '<input type = "submit" value = "Sign in">';
echo '</form>';

?>
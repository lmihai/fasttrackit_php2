<?php
require('config.php');

if(isset($_POST['submit'])) {

} else {
	$form = <<<EOT
	<form action="register.php" method="POST">
	First Name: <input type="text" name="name" /> <br>
	Last Name: <input type="text" name="lname" /> <br>
	Username: <input type="text" name="uname" /> <br>
	<input type="text" name="name" /> <br>
	Email: <input type="text" name="email" /> <br>
	Confirm Email: <input type="text" name="email2" /> <br>
	Password: <input type="password" name="pass1" /> <br>
	Confirm Password: <input type="password" name="pass2" /> <br>
	<input type="submit" value="Register" name="submit" />
	</form>
	EOT;

	echo $form;
}

?>
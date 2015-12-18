<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Login cu PHP
		</title>

	</head>
	<body>

		<center>
			<br><br><br><hr>
				<h1> Login cu PHP </h1><br>
				<form name="Formular_login" method="post" action=""> <!-- aici in action, 
					faci redirectionare eventual pentru a procesa php-ul in 
					alt fisier, gen home.php. Daca il lasi gol, procesarea
					 se face la self, adica chiar in acest fisier -->

					<label for="Username"> Introduceti numele de utilizator: </label>
					<INPUT TYPE = "textarea" name = "Username" id="Username"><br><br>
					<label for="Password"> Introduceti parola: </label>
					<INPUT TYPE = "textarea" name = "Password" id="Password"> <br> <br>
					<INPUT type="checkbox" name="remember" id="remember">
						<label for = "remember"> Remember me on this computer </label>
					<INPUT TYPE = "Submit" Name = "Submit" VALUE="Login">


				</form>
			<?php
				
				if (isset($_POST["Username"]) && isset($_POST["Password"]))
						{
							print "Hello " . $_POST["Username"] . ", your password, " . $_POST["Password"] . " was correct. ";
						}
						else
						{
							echo "WHAT IS HAPPENING?";
						}

				//termina asta acasa ! Display if the login was correct or not.

			?>

		</center>
	
	</body>
</html>


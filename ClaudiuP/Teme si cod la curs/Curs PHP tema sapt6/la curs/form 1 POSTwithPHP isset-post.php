<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Form1 POST
		</title>

		<link rel="stylesheet" type="text/css" href="oddandeven.css" />

	</head>
	<body>

		<center>
			<br><br><br><hr>
			
				<p> Iar acest formular este similar cu metoda "get", dar foloseste metoda POST pentru a colecta informatii, ascunzand informatii pentru a nu fi vizibile in URL.  </p>

			<form name="form1" method="post" action=>

				<INPUT TYPE = "TEXT" Name = "Username" VALUE = "username">

					<br><br>

				<label for="bine">Intrebarea dumneavoastra pentru boboci este: </label>

				<br><br>

				<INPUT TYPE = "textarea" name = "myTextArea" value = "Doriti sa cumparati o paine?" id="bine">
				<br>
				

					
					<select name="options" form="options">
  						<option value="Yes">Yes</option>
 						<option value="No">No</option>
 						<option value="Maybe">Maybe</option>
 					</select>

 					<br><br>
					<label for ="comentariu"> Ce parere aveti despre cutare lucru ?</label> <br>
					<textarea rows ="4" cols="20" name = "comentariu"></textarea><br>

				<INPUT TYPE = "Submit" Name = "Submit1" VALUE="Login">	
				</form>
				<br>
					<?php

					//Verifica daca ai INPUT.
						if (isset($_POST["Username"]) && isset($_POST["myTextArea"]) && isset($_POST["options"]))
						{
							print "Hello my name is" . $_POST["Username"] . "and I've just submitted: " . $_POST["myTextArea"] . "with the option: " . $_POST["options"];
						}
						else
						{
							echo "WHAT IS HAPPENING?";
						}




					 ?>
			
		</center>
	
	</body>
</html>


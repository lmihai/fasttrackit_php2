<html>
	<head>
		<title>FORM</title>
	</head>
	<body>
		<form name="form1" method="post" action="">
				<input type = "text" name="textfield" value = "">
                <br>
				<textarea rows="4" cols="50" name = "text"></textarea>
                <br>
				<input type = "submit" Name = "submit1" value = "Send">
				<select name = "opt">
					<option value="empty"></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
					<option value="Maybe">Maybe</option>
				</select>
		</form>
            <?php
				if(isset($_POST["textfield"]) && isset($_POST["text"]) && isset($_POST["opt"])) {
					echo "My name is " . $_POST["textfield"] . " " . "i`ve posted " . $_POST["text"] . " " . "and my option is " . $_POST["opt"];
						}
				 else {
				 	echo "you have posted nothing";
				 }
            ?>
	</body>
</html>
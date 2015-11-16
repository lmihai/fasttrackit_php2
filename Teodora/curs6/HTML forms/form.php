<html>
<head>
	<title>A Basic HTML Form</title>
</head>
<body>
		<form name = "form1" method="post" action="output.php">
			<input type="text" name="myName" value="MyName">
			<br/>		
			<br/>
			<textarea name="myTextArea" rows="10" cols="20"></textarea>
			<br/>
			<br/>
			<select name="mySelect">
				<option>Yes</option>
				<option>No</option>
				<option>Maybe</option>
			</select>
			<br/>
			<br/>
			<input type="submit" name="submit1" value="Send">
		</form>
		<hr>
		<?php
			//print $_POST['myName'];
			//print $_POST['myTextArea'];
			//print $_POST['mySelect'];
		//echo "Hello my name is " . $_POST['myName'] . " and I just
		//submitted: " . $_POST['myTextArea'] . " with option " . $_POST['mySelect'];
		?>	

</body>
</html>
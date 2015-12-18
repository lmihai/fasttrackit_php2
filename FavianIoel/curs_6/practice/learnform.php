<html>
<head>
	<title>Form</title>
</head>
<body>
   <p>Form prin metoda "get" si actiunea catre alt fisier!</p>
		<form name="form1" method="get" action="formdestination.php">
			<input type ="text" value="username">
			<input type = "submit" name = "submit1" value = "login">
		
		</form>
        <hr>
        <p>Form cu metoda post si actiunea catre acest fisier!</p>
		<form name="form1" method="post" action="learnform.php">
			<input type ="text" value="username">
			<input type = "submit" name = "submit1" value = "login">
		
		</form>
		<br>
		<br>
        <hr>
        <p>form fara  type = "submit"</p>
        <form name="form1" method="get" action="">
        	<input type="text" value="username">
        </form>

        <hr>
        <p>form cu type="submit" !</p>
        <form name ="form1" method="get" action="">
        	<input type ="text" value="username">
        	<input type = "submit" name="submit1" value="enter!">
        </form>

</body>
</html>


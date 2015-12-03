<!--<?php
// print("Curs 6");

?>



<html>
<head>
	<title>A Bassic HTML FORM</title>
</head>
	<body>
		<form name="form1" method="post" action="">
			<br>
				<select>
				  <option value="Yes">Yes</option>
				  <option value="No">No</option>
				  <option value="Maybe">Maybe</option>
				</select>
			<br>
				<textarea name="comment">Ce apare</textarea>
			<br>
				<label for="male">Barbatei</label>
			<br>
				<label for="female">Femeiute</label>
			<br>
					  <input type="submit" value="Submit">
				<br>
			<INPUT TYPE="TEXT" Name="form1" VALUE="username">
			<INPUT TYPE="Submit" Name="Submit1" VALUE="Login">
				<?php
					// print $_POST['testfiled'];
					// print 
					// print $_POST
				?>
		</form>
	</body>
</html>
-->


<html>
		<head>
			<title>A basic html form</title>
		</head>
	<body>
<center>
	<form name="form1" method="post" action="">
		<textarea name="textarea" rows="10" cols="50"></textarea>
<br>
		<input type ="text" Name= "textfild" value="MyName">
			<select>
			    <option value="yess" name="yes">yes</option>
			    <option value="no" name="noo">no</option>
			    <option value="maybe">maybe</option>
			</select>
		<input type="submit" Name = "Submit1" value="send">
	</form>
</center>
	<?php
		if (isset($_POST['textfild']) 
		{
			echo $_POST['textfild' && 'yes'];
		}
			print "<br>";
		if (isset($_POST['textarea']) 
		{
			echo $_POST['textarea'];
		}
	?>
	</body>
</html>
<!-- 

<html>
<head>
	<title>Login To Web App</title>
</head>
<body>
	<form name="login" method="post" action="home.php">
	<p>Login to Web App</p>
	<input type="text" name="username" value="username">
	<br/>
	<input type="text" name="password" value="password">
	<br/>
	<select name="select">
		<option value="YES">Remember me on this computer</option>
		<option value="NO">Don't remember me on this computer</option>
		<option value="MAYBE">Maybe remember me on this computer</option>
	</select>
	<input type="submit" name="login" value="Login">

</body>
</html>
deci faza e asa name de la forum e login metot post e ascuns action home php unde ne duce
la input type e partea unde se introduce text cu valoare username si la name username sa face legatura ca username!
lafel si la password
la selectie este ca si la array selectam ['numele de la select name ']
dupa care la == value de la option asa si la butonul de submit este name login ca si al froum ca sa actioneze forumul catre home php
-->

<?php
print("Hello " . $_POST['username'] . " your password " . $_POST['password'] . " was correct");
print "<br/>";
if ($_POST['select']=='YES') 
{
	print "Yeey you want us to remember you.";
}
elseif($_POST['select']=='NO')
{
	print "Oh no you don't want us to remember you.";
}
else
{
	print "Hmm maybe you want us to remember you";
}
?>

 
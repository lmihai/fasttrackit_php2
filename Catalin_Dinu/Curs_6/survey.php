<html>
<head>
	<title>SURVEY</title>
</head>
<body>
<form method="post" action="answer.php">
<table style="width:100%">
<tr>
		<td>Name (optional)</td>
		<td>Email (optional)</td>
</tr>
	<tr>
		<td><input type = "text" name="name" value = ""></td>
		<td><input type = "text" name="email" value = ""></td>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<td>I BOUGHT...*</td>
		<td>It TASTED...*</td>
		<td>The STYLE was...*</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="bought" id="bought">
			<label for="bought">Breakfast Food</label>
		</td>
		<td><input type="radio" name="tasted" id="remember">Excelent</td>
		<td><input type="radio" name="style" id="remember">Excelent</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="bought" id="remember">Baked Goods</td>
		<td><input type="radio" name="tasted" id="remember">Good</td>
		<td><input type="radio" name="style" id="remember">Good</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="bought" id="remember">Cake/Cupcakes</td>
		<td><input type="radio" name="tasted" id="remember">Neutral</td>
		<td><input type="radio" name="style" id="remember">Neutral</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="bought" id="remember">Beverage</td>
		<td><input type="radio" name="tasted" id="remember">Bad</td>
		<td><input type="radio" name="style" id="remember">Bad</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="radio" name="tasted" id="remember">Horrible</td>
		<td><input type="radio" name="style" id="remember">Horrible</td>
	</tr>
</table>
<p>How satisfied are you with...*</p>
<table style="width:100%">
	<tr>
		<td></td>
		<td>Very Satisfied</td>
		<td>Satisfied</td>
		<td>Neutral</td>
		<td>Unsatisfied</td>
		<td>Very Unsatisfied</td>
	</tr>
	<tr>
		<td>The purchase you made.</td>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
	</tr>
	<tr>
		<td>The service you received.</td>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
	</tr>
	<tr>
		<td>Our company overall.</td>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
		<th><input type="radio" name="checkbox" id="remember"></th>
	</tr>
</table>
<p>How likely are you to...*</p>
	<table style="width:100%">
		<tr>
			<td></td>
			<td>Very Satisfied</td>
			<td>Satisfied</td>
			<td>Neutral</td>
			<td>Unsatisfied</td>
			<td>Very Unsatisfied</td>
		</tr>
		<tr>
			<td>Buy from us again.</td>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
		</tr>
		<tr>
			<td>Recommend our products to others.</td>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
		</tr>
		<tr>
			<td>Recommend our shop to others.</td>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
			<th><input type="radio" name="checkbox" id="remember"></th>
		</tr>
	</table>
	<input type="submit" value="SEND SURVEY">
</form>
</body>
</html>




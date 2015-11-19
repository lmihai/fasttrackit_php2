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
			<td><input type="checkbox" name="bought[]" value="Breakfast Food">Breakfast Food</td>
			<td><input type="radio" name="tasted[]" value="Excelent">Excelent</td>
			<td><input type="radio" name="style[]" value="Excelent">Excelent</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="bought[]" value="Baked Goods">Baked Goods</td>
			<td><input type="radio" name="tasted[]" value="Good">Good</td>
			<td><input type="radio" name="style[]" value="Good">Good</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="bought[]" value="Cake/Cupcakes">Cake/Cupcakes</td>
			<td><input type="radio" name="tasted[]" value="Neutral">Neutral</td>
			<td><input type="radio" name="style[]" value="Neutral">Neutral</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="bought[]" value="Beverage">Beverage</td>
			<td><input type="radio" name="tasted[]" value="Bad">Bad</td>
			<td><input type="radio" name="style[]" value="Bad">Bad</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="radio" name="tasted[]" value="Horrible">Horrible</td>
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
			<th><input type="radio" name="purchase[]" value="Very Satisfied"></th>
			<th><input type="radio" name="purchase[]" value="Satisfied"></th>
			<th><input type="radio" name="purchase[]" value="Neutral"></th>
			<th><input type="radio" name="purchase[]" value="Unsatisfied"></th>
			<th><input type="radio" name="purchase[]" value="Very Unsatisfied"></th>
		</tr>
		<tr>
			<td>The service you received.</td>
			<th><input type="radio" name="service[]" value="Very Satisfied"></th>
			<th><input type="radio" name="service[]" value="Satisfied"></th>
			<th><input type="radio" name="service[]" value="Neutral"></th>
			<th><input type="radio" name="service[]" value="remember"></th>
			<th><input type="radio" name="service[]" value="Very Unsatisfied"></th>
		</tr>
		<tr>
			<td>Our company overall.</td>
			<th><input type="radio" name="company[]" value="Very Satisfied"></th>
			<th><input type="radio" name="company[]" value="Satisfied"></th>
			<th><input type="radio" name="company[]" value="Neutral"></th>
			<th><input type="radio" name="company[]" value="Unsatisfied"></th>
			<th><input type="radio" name="company[]" value="Very Unsatisfied"></th>
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
			<th><input type="radio" name="buy[]" value="Very Satisfied"></th>
			<th><input type="radio" name="buy[]" value="Satisfied"></th>
			<th><input type="radio" name="buy[]" value="Neutral"></th>
			<th><input type="radio" name="buy[]" value="Unsatisfied"></th>
			<th><input type="radio" name="buy[]" value="Very Unsatisfied"></th>
		</tr>
		<tr>
			<td>Recommend our products to others.</td>
			<th><input type="radio" name="reccommend_products[]" value="Very Satisfied"></th>
			<th><input type="radio" name="reccommend_products[]" value="Satisfied"></th>
			<th><input type="radio" name="reccommend_products[]" value="Neutral"></th>
			<th><input type="radio" name="reccommend_products[]" value="Unsatisfied"></th>
			<th><input type="radio" name="reccommend_products[]" value="Very Unsatisfied"></th>
		</tr>
		<tr>
			<td>Recommend our shop to others.</td>
			<th><input type="radio" name="reccommend_shop[]" value="Very Satisfied"></th>
			<th><input type="radio" name="reccommend_shop[]" value="Satisfied"></th>
			<th><input type="radio" name="reccommend_shop[]" value="Neutral"></th>
			<th><input type="radio" name="reccommend_shop[]" value="Unsatisfied"></th>
			<th><input type="radio" name="reccommend_shop[]" value="Very Unsatisfied"></th>
		</tr>
	</table>



	<input type="submit" value="SEND SURVEY">
</form>
</body>
</html>




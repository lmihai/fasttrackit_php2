<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Form1 POST
		</title>

		<link rel="stylesheet" type="text/css" href="style.css" />

	</head>
	<body>
		<center><p>Comentariu: am ceva probleme cu stilizarea paginii,<br> am observat ca asezarea in pagina functioneaza corect<br> doar in cazul in care pagina e maximizata. </p><br>
		<h3>Formular</h3></center>
		<form method="post" action="answers.php">
		<div id="nameinput">
			<br>
			<label for="name">Name: (Optional)</label><br>
			<INPUT TYPE = "TEXT" Name = "Username"  VALUE = ""><br>
		</div>
		<div id="emailinput">
			<label for="email">Email: (Optional)</label><br>
			<INPUT TYPE = "TEXT" Name = "Username" VALUE = ""><br>
		</div>
		<br><br><br><br>
		<div class="product">
			<label for="product" id="label_product">I bought*</label><br>
			<input type="radio" name="product" id="label_product" value="Breakfast food">Breakfast food<br>
			<input type="radio" name="product" id="label_product" value="Baked Goods">Baked Goods<br>
			<input type="radio" name="product" id="label_product" value="Cake/Cupcakes">Cake/Cupcakes<br>
			<input type="radio" name="product" id="label_product" value="Beverages">Beverage<br>
		</div>
		
		<div class="taste">
			<label for="taste" id="label_feedback_taste">It tasted*</label><br>
			<input type="radio" name="taste" value="excellent">Excellent<br>
			<input type="radio" name="taste" value="good">Good<br>
			<input type="radio" name="taste" value="Neutral">Neutral<br>
			<input type="radio" name="taste" value="bad">Bad<br>
			<input type="radio" name="taste" value="horrible">Horrible<br>
		</div>
		
		<div class="style">
			<label for="style" id="label_feedback_style">The style was*</label><br>
			<input type="radio" name="style" value="excellent">Excellent<br>
			<input type="radio" name="style" value="good">Good<br>
			<input type="radio" name="style" value="Neutral">Neutral<br>
			<input type="radio" name="style" value="bad">Bad<br>
			<input type="radio" name="style" value="horrible">Horrible<br>
		</div>
		<br><br><br>
		<center>
			<label for="table1">How satisfied are you with...*</label><br>
			<!-- TAAABLEEE 1 -->
			<table id="table1">
				<tr>
					<th></th>
					<th>Very Satisfied</th>
					<th>Satisfied</th>
					<th>Neutral</th>
					<th>Unsatisfied</th>
					<th>Very Unsatisfied</th>
				</tr>
				<tr>
					<td>The purchase<br>you made</td>
					<td><input type="radio" name="purchasesatisfaction" value="very satisfied"></a></td>
					<td><input type="radio" name="purchasesatisfaction" value="satisfied"></a></td>
					<td><input type="radio" name="purchasesatisfaction" value="neutral"></a></td>
					<td><input type="radio" name="purchasesatisfaction" value="unsatisfied"></a></td>
					<td><input type="radio" name="purchasesatisfaction" value="very unsatisfied"></a></td>
				</tr>
				<tr>
					<td>The service you<br>received</td>
					<td><input type="radio" name="servicesatisfaction" value="Very Satisfied"></a></td>
					<td><input type="radio" name="servicesatisfaction" value="Satisfied"></a></td>
					<td><input type="radio" name="servicesatisfaction" value="Neutral"></a></td>
					<td><input type="radio" name="servicesatisfaction" value="Unsatisfied"></a></td>
					<td><input type="radio" name="servicesatisfaction" value="Very Unsatisfied"></a></td>
				</tr>
				<tr>
					<td>Our company<br>overall</td>
					<td><input type="radio" name="companysatisfaction" value="Very Satisfied"></a></td>
					<td><input type="radio" name="companysatisfaction" value="Satisfied"></a></td>
					<td><input type="radio" name="companysatisfaction" value="Neutral"></a></td>
					<td><input type="radio" name="companysatisfaction" value="Unsatisfied"></a></td>
					<td><input type="radio" name="companysatisfaction" value="Very Unsatisfied"></a></td>
				</tr>
			</table><br><br>

			<!-- TAAABLEEE 2 -->
			<label for="table2">How likely are you to...*</label><br>
			<table id="table2">
				<tr>
					<th></th>
					<th>Very Likely</th>
					<th>Likely</th>
					<th>Neutral</th>
					<th>Unlikely</th>
					<th>Very Unlikely</th>
				</tr>
				<tr>
					<td>Buy from us<br>again.</td>
					<td><input type="radio" name="buyagain" value="very likely"></a></td>
					<td><input type="radio" name="buyagain" value="likely"></a></td>
					<td><input type="radio" name="buyagain" value="neutral"></a></td>
					<td><input type="radio" name="buyagain" value="unlikely"></a></td>
					<td><input type="radio" name="buyagain" value="very unlikely"></a></td>
				</tr>
				<tr>
					<td>Recommend our<br>products to<br>others.</td>
					<td><input type="radio" name="recommendproducts" value="very likely"></a></td>
					<td><input type="radio" name="recommendproducts" value="likely"></a></td>
					<td><input type="radio" name="recommendproducts" value="neutral"></a></td>
					<td><input type="radio" name="recommendproducts" value="unlikely"></a></td>
					<td><input type="radio" name="recommendproducts" value="very unlikely"></a></td>
				</tr>
				<tr>
					<td>Recommend our<br>shop to<br>others.</td>
					<td><input type="radio" name="recommendshop" value="very likely"></a></td>
					<td><input type="radio" name="recommendshop" value="likely"></a></td>
					<td><input type="radio" name="recommendshop" value="neutral"></a></td>
					<td><input type="radio" name="recommendshop" value="unlikely"></a></td>
					<td><input type="radio" name="recommendshop" value="very unlikely"></a></td>
				</tr>
			</table>
			<br><br><br>
			<INPUT id="btn" TYPE = "Submit" Name = "Submit" VALUE="SEND SURVEY" >
				<br><br>
		
				<br><br>
			
			</form>
				
</center>
			
			
			
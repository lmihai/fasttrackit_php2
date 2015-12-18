<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Form1 POST
		</title>
       
		<link rel="stylesheet" type="text/css" href="style.css" />
      
	</head>
	<body>

<?php
		

				if (isset($_POST["product"]) && isset($_POST["taste"]) && isset($_POST["style"])) 
					{
						print "Hello, you bought <strong>" . $_POST["product"] . "</strong>, it tasted <strong>" . $_POST["taste"] . "</strong> and you thought the style was <strong>" . $_POST["style"] . "</strong>."; 
						echo "<br><br><br>";
					}
					else {
						echo "! Mandatory fields: <br>You forgot to mention what you bought, what it tasted like or what you thought the style was.<br><br><br>";
					}

				if (isset($_POST["purchasesatisfaction"]) && isset($_POST["servicesatisfaction"]) && isset($_POST["companysatisfaction"])) {
						print "Overall, you were <strong>" . $_POST["purchasesatisfaction"] . "</strong> with the purchase you made.<br>";
						print" You were <strong>" . $_POST["servicesatisfaction"] . "</strong> with the service you received.<br>";
						print " You were  <strong>" . $_POST["companysatisfaction"] . "</strong> with the company that served you. ";
						print "<br><br><br>";
					}
					else {
						echo "! Mandatory fields: <br>You forgot to check something in the first table.<br><br><br>";
					}

				if (isset($_POST["buyagain"]) && isset($_POST["recommendproducts"]) && isset($_POST["recommendshop"])) {
						print "It is  <strong>" . $_POST["buyagain"] . "</strong> that you will buy from us again.<br>";
						print "It is  <strong>" . $_POST["recommendproducts"] . "</strong> that you will recommend our products to others.<br>";
						print "It is  <strong>" . $_POST["recommendshop"] . "</strong> that you will recommend our shop to others. ";
						print "<br>";
					}
					else {
						echo "! Mandatory fields: <br>You forgot to check something in the second table.";
						echo "<br><br>";
					}
					
?>

	</body>
</html>
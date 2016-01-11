<?php
	require 'connections/connections.php';
?>
<?php
	if(isset($_POST['Register'])){ //check if the form is submitted

		session_start();
		$FName = $_POST['First_Name'];
		$LName = $_POST['Last_Name'];
		$Email = $_POST['Email'];
		$Pw = $_POST['Password'];
		$ocupation = $_POST['ocupation'];
		$Company = $_POST['Company'];
		$Phone = $_POST['Phone'];
		$location = $_POST['location'];
		//securizarea parolei
		$StorePw = password_hash($Pw, PASSWORD_BCRYPT, array('cost'=>10)); //recomandat 10 poate fi 14 sau 20 etc.

		$sql = $con->query("INSERT INTO user (Fname, LName, Email, Password, ocupation, Company, Phone, location ) 
							Values('{$FName}', '{$LName}', '{$Email}', '{$StorePw}', '{$ocupation}','{$Company}', '{$Phone}','{$location}')");

		//dupa inregistrare vrem sa directionam utiliz. catre pagina de login

		//header('Location:Login.php'); //aici vreau confirmare ca inreg a fost cu succes!	
				
	}	
?>
<!doctype html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="RightBody">
			<h2>Romanian membership</h2>
			</div>
		</div>
			<div class="menu">
				<div id="Menu">
					<nav>
						<ul class="cssmenu">
							<li><a href="Register.php">Register</a></li>
							<li><a href="Login.php">LogIn</a></li>
						</ul>
					</nav>
				</div>
					</div>
					<div class="container">
						<form action="" method="post" name="RegisterForm" id="RegisterForm">
							<div class="FormElement">
								<input type="text" name="First_Name" required="required" class="TField" id="First_Name" placeholder="First Name" >	
							</div>
							<div class="FormElement">
								<input type="text" name="Last_Name" required="required" class="TField" id="Last_Name" placeholder="Last Name" >	
							</div>
							<div class="FormElement">
								<input type="email" name="Email" required="required" class="TField" id="Email" placeholder="Email">									
							</div>
							<div class="FormElement">
								<input type="password" name="Password" required="required" class="TField" id="Password" placeholder="Password">									
							</div>
							<div class="FormElement">
								<select name="ocupation" required="required" class="TField"  placeholder="ocupation">
									<option value="Web developer">Web developer</option>
									<option value="Web designer">Web designer</option>
									<option value="Programator">Programator Web</option>
									<option value="Freelancer">Freelancer</option>
									<option value="Administrator firma">Administrator firma</option>
									<option value="Trainer">Trainer</option>						
								</select>	
							</div>
							<div class="FormElement">
								<input type="text" name="Company" required="required" class="TField"  placeholder="Company">									
							</div>
							<div class="FormElement">
								<select name="location" required="required" class="TField"  placeholder="Location">								
									<option value="Bucuresti">Bucuresti</option>
									<option value="Cluj-Napoca">Cluj-Napoca</option>
									<option value="Timisoara">Timisoara</option>
									<option value="Iasi">Iasi</option>
									<option value="Constanta">Constanta</option>
									<option value="Arad">Arad</option>
									<option value="Deva">Deva</option>			
								</select>
							</div>
							<div class="FormElement">
								<input type="text" name="Phone" required="required" class="TField" id="Phone" placeholder="Phone">									
							</div>							
							<div class="FormElement">
								<input type="submit" name="Register" class="button" value="Register" >
							</div>

						</form>
						<?php
						//mesaj confirmare inregistrare corecta si directionare catre logIn
							if(isset($_POST['Register'])) {
								if($sql){
								print "<h3>Successfuly registration!</h3>";
								//header('Location:update.php');
								echo '<h2>Go to<a href ="Login.php">LogIn</a></h2>';
								}
						}
	
						?>
					</div>
					
					<br style="clear:both;"/>
					<div class="footer">
						<p>Copyright &copy; <?php echo date('Y'); ?> | Awesome Team |  
						<a  href="mailto:grupPHP2@gmail.com">Contact</a></p>
					</div>
			</div>
			<?php include ('footer.php'); ?>
		</div>
	
</body>
</html>
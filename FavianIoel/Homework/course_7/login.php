<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login Form</title>
</head>
<body>

	<center>
		<div class="login">
		 <div class="titlu">Login</div>
		  	<div>

				 <form name="login" method="post" action="validation.php">
				  <input type="text" name="username"  placeholder="username" required>
				  <br>
				  <br>
				  <input type="password" name="password" placeholder="password" required>
				  <br>
				  <br>
				     <p class="remember_me">
                        <label>
                          <input type="checkbox" name="remember_me" id="remember_me">
                            Remember me on this computer
                        </label>
                     </p>
				  <input type="submit" name="submit" value="Login">
				 </form>
		   </div>
	   </div>
	</center>
	
	
</body>
</html>
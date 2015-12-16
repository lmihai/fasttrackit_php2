<html>
<head>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
</head>
<body>
	<br>
    <br>
    <div class="nav " >
      <div class="container">

        <ul   class="nav nav-pills pull-right" role="tablist" >
          <li><a href="index.php" >Try again</a></li>
             
        </ul>
      </div>
    </div> 
    <br>
     <div class="jumbotron">
      <div class="container">
      
        <h1>Home</h1>
        <p><div class="fail">
            <?php
              echo "<h3>Invalid login information. Please try again.</h3><br>";
              echo "anyway !!!  the username and password is <strong>admin</strong> ";
            ?>
          </div></p>
        

        
        </div>
	
</body>

<html>
<head>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
</head>
<body>
	<br>
     <div class="nav " >
      <div class="container">

        <ul  class="nav nav-pills pull-left" role="tablist" >
          <li class="active"><a href="#">Home</a></li> 
        </ul>

        <ul   class="nav nav-pills pull-right" role="tablist" >
          <li><a href="#">Contact</a></li>
          <li><a href="index.php" >Logout</a></li>
             
        </ul>
      </div>
    </div> 
    <br>
     <div class="jumbotron">
      <div class="container">
      
        <h1>Home</h1>
        <p><div class="hello">
            <?php
             echo "You are logged in";
            ?>
          </div></p>
        

        
        </div>
	
</body>
</html>
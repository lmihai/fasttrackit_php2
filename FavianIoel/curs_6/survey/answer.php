<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Answer</title>
</head>
<body>
<div class="container">
<div class="panel panel-danger">
      <div class="panel-heading"><h2>Answer</h2></div>
      <div class="panel-body">
      	<?php
      	echo "Name :  <strong>".$_POST['myName']."</strong><br>";
      	echo "Email :  <strong>".$_POST['myEmail']."</strong><br><hr><br>";
      	echo "Today i bought <strong>".$_POST['bought']."</strong> and of course the taste was <strong>". $_POST['tasted']."</strong>.<br>";
      	echo  "The style was <strong>".$_POST['style']."</strong> like always !!!<br>"; 
      	?>
      	<br>
      	<p><a class="btn btn-default" href="survey.php" role="button">Back to survey</a></p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
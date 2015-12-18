<html>

  <head>
  	<!-- rendering & touch zooming (mobile) -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">

     <style type="text/css">
         <?php include('views/style.css'); ?>
         </style>

  
    
  </head>

  <body>
	<center>
		
<?php
echo ('<li><a href="movies_details.php?movie=' . $i . '">' . $movie_title . '</a></li><br>');

?>
 </center>

</body>
</head>
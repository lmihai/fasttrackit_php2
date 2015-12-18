<html>

<head>
  <!-- rendering & touch zooming (mobile) -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
      
          <style type="text/css">
          <?php include('views/style.css'); ?>
          </style>
</head>

<body>

   <center>

     <div class="container-fluid">
      <h1>My movies</h1>
     </div>



     <div class="container">
  <ul>

       <?php for ($i = 1; $i <= count($movies); $i++) { ?>
  <li>
	   <a href="movies_details.php?movie=<?php print($i); ?>">
       <?php print($movies[$i]['title']); ?>
       </a>
 </li>
       <?php } ?>

  <ul>	
 </div>




 

</center>

</body>

</html>
<html>

<head>
<style type="text/css">

html {
background: url(images/background.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
 background-size: cover;
} 
h1 , p , h2 , h3 , a , li {
  color: white ;
 }
 </style>
 

  </head>

<body>

   <center>
      <h1>My movies</h1>
  <ul>

       <?php for ($i = 1; $i <= count($movies); $i++) { ?>
  <li>
	   <a href="movies_details.php?movie=<?php print($i); ?>">
       <?php print($movies[$i]['title']); ?>
       </a>
 </li>
       <?php } ?>

  <ul>	

</center>

</body>

</html>
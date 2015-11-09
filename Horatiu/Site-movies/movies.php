<html>
<head>
<style type="text/css">


h1 {color : red; font-size: 50px; font-family: sans-serif;
	 background-position: center; text-align: center;}



</style>

<title>My movies
</title>


</head>


<body>
  
<?php

//echo "<h1><strong>Top Movies</strong></h1>";

include('models/movies.php');

//check the position of the movie in array
include('views/view_movies.tpl.php');


?>

</body>


</html>
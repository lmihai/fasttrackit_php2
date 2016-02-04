<html>
<head>

  <style type="text/css">
  <?php include('views/style.css'); ?>
  </style>

</head>
<body>

  <center>

    <header>
      <h1>My movies</h1>
    </header>
    
    <section>
      <ul>
       <?php for ($i = 1; $i <= count($movies); $i++) { ?>
       <li>
        <a href="movies_details.php?movie=<?php print($i); ?>">
         <?php print($movies[$i]['title']); ?>
       </a>
     </li>
     <?php } ?>
     <ul> 
     </section>


   </center>

 </body>
 </html>
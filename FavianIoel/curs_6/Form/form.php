<html>
  <head>
	<title>A BASIC HTML FORM</title>
  </head>
  <body>
     <?php
     //recap
     /*In order to get a form wrking one would need to define:

     + a METHOD
     + a ACTION
     + a SUBMIT handler

     Let's build our first form!
     */
     ?>

       <form name="form1" method="post" action="">
        Name:<input type="text" name="Name" value=""><br><br>
             <textarea rows="4" cols="50" name="comment">Enter text here...</textarea><br><br>
             <input type="submit" name="submit1" value="Send">
       </form>
  </body>
</html>

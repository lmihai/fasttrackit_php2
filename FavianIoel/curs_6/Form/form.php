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
        Name:<input type="text" name="myName" value="">
        <br>
        <br>
             <textarea rows="4" cols="50" name="myTextArea">Enter text here...</textarea>
             <br>
             <br>
             <select>
                <option value="yes">yes</option>
                <option value="no">no</option>
                <option value="maybe">maybe</option>
             </select>
             <br>
             <br>
             <p>ho can see this? :</p>
                <label for="onlyme">only me</label>
                <input type="radio" name="privacy" id="onlyme" value="onlyme">
                <label for="everybody">everybody</label>
                <input type="radio" name="privacy" id="everybody" value="everybody">

             <input type="submit" name="submit1" value="Send">
       </form>
  </body>
</html>

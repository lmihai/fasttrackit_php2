<html>
<head>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <title>Survey</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
   
   <br><br>
  <form name="survey1" method="post" action="answer.php">
  
    <div class="row">
    <div class="container bg-success">
  
    <div class="col-md-6">
      Name (optional)<br>
     <input type="text" name="myName" value="">
    </div><!-- /col-md-6 -->


    <div class="col-md-6">
      Email (otional)<br>
      <input type="text" name="myEmail" value="">
    </div><!-- /col-md-6 -->
    
    </div>
  </div><!--/row-->
<br>
<hr>
<br>
  <div class="row">
    <div class="container bg-warning">

     <div class="col-md-4 ">
      <p>I BOUGHT...*</p>
                <label for="Breackfast Food">Breackfast Food</label>
                <input type="radio" name="bought" id="Breackfast Food" value="Breackfast Food"><br>
                <label for="BakedGoods">Baked Goods</label>
                <input type="radio" name="bought" id="BakedGoods" value="BakedGoods"><br>
                <label for="Cake/Cupcakes">Cake/Cupcakes</label>
                <input type="radio" name="bought" id="Cake/Cupcakes" value="Cake/Cupcakes"><br>
                <label for="Beverage">Beverage</label>
                <input type="radio" name="bought" id="Beverage" value="Beverage"><br><br>
    </div><!-- /col-md-4 -->
         <div class="col-md-4 ">
          <p>It TASTED...*</p>
                <label for="Excellent">Excellent</label>
                <input type="radio" name="tasted" id="Excellent" value="Excellent"><br>
                <label for="Good">Good</label>
                <input type="radio" name="tasted" id="Good" value="Good"><br>
                <label for="Neutral">Neutral</label>
                <input type="radio" name="tasted" id="Neutral" value="Neutral"><br>
                <label for="Bad">Bad</label>
                <input type="radio" name="tasted" id="Bad" value="Bad"><br>
                <label for="Horrible">Horrible</label>
                <input type="radio" name="tasted" id="Horrible" value="Horrible"><br>
    </div><!-- /col-md-4 -->
         <div class="col-md-4 ">
          <p>The STYLE was...*</p>
                <label for="Excellent">Excellent</label>
                <input type="radio" name="style" id="Excellent" value="Excellent"><br>
                <label for="Good">Good</label>
                <input type="radio" name="style" id="Good" value="Good"><br>
                <label for="Neutral">Neutral</label>
                <input type="radio" name="style" id="Neutral" value="Neutral"><br>
                <label for="Bad">Bad</label>
                <input type="radio" name="style" id="Bad" value="Bad"><br>
                <label for="Horrible">Horrible</label>
                <input type="radio" name="style" id="Horrible" value="Horrible"><br>
    </div><!-- /col-md-4 -->

    </div>
  </div>
  <br>
  <hr>
  <br>
  <center><input type="submit" name="survey1" value="SEND SURVEY"></center>



  </form>
</body>
</html>




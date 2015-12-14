<html>
<head>
	<title>A basic html form</title>
	</head>
	<body>
<center>
<form name="form1" method="post" action="">

     <textarea name="com" rows="20" cols="70">
    
     </textarea><br><br>
<input type ="text" Name= "ion" value="MyName">

  <select>
    <option value="yes">yes</option>
    <option value="no">no</option>
    <option value="maybe">maybe</option>
  </select>

<input type="submit" Name = "Submit1" value="send">





</form>
</center>
<?php
if (isset($_POST['com'])) {
	echo $_POST['com'];
}
if (isset($_POST['ion'])) {
	echo $_POST['ion'];
}
?>
</body>
</html>
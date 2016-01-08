<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Upoad form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center>
        <titlu>Upload file</titlu><br>
        <div id="inputcontainer">
		<form enctype="multipart/form-data" method="POST" action="file-upload.php" name"fileupload" type="file"><br><br>
			Student ID<br><input type="text" name="studentId"><br><br>
			Photo<br><input  type="file" name="filePhoto" onchange="document.getElementById('file-path').value = this.value.split('\\')[this.value.split('\\').length-1];" ><br><br>
			<input class="button"type="submit" name="btnSubmit" value="submit" class="button" />
		</form>
        <div>
     </center>
	
	
</body>
</html>
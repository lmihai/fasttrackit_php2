<html>
<body>
	<!-- A FILE UPLOAD FORM -->
	<!-- to tell browser taht this form contain file uploads,
	we need to add a special attribute named enctype -->
	<!-- make sure you set the form method to POST -->
	<!-- make sure you set the form action to go to a PHP file
	which knows how to handle file uploads -->
	<!-- finally, add a file field to the form. 
	Creating a separate form / page for uploading files
	<input type="file" name="filePhoto"  />-->
<form method="post" enctype="multipart/form-data"  
	action="file-upload.php" type="file" name="fileUpload">
	StudentID:<input type="text" name="studentId" /><br /><br />
	Photo:<input type="file" name="filePhoto" /><br /><br />
	<input type="submit" name="btnSubmit" value="Submit" />
</form>
</body>
</html>	
<?php
//create a page called student_photo.php
// the page should accept a $_GET parameter called id
if(isset($_GET['ID'])){
	$studentId = $_GET['ID'];
	//echo $studentId;
}
else {
	echo 'No student ID provided';
}	
//the page should contain a form with a file field
//also - a hidden field pre-filled with th student ID

?>
<html>
<body>
<form action="photo_upload.php" method="post" enctype = "multipart/form-data"
type = "file" name = "fileUpload"/>
Photo:	<input type="file" name="filePhoto" /><br /><br />
		<input type = "hidden" name = "studentId" value="<?php echo $studentId; ?>" />
		<input type="submit" name="btnSubmit" value="Submit" />
</form>
</body>
</html>
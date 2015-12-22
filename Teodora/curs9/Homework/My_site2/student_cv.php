<?php
//similar with the upload photo page, create a page for uploading
//a CV for the students. Can be DOC or PDF file

if(isset($_GET['ID'])){
	$studentId = $_GET['ID'];
	//echo $studentId;
}
else {
	echo 'No student ID provided';
}	
?>
<html>
<body>
<form action="cv_upload_new.php" method="post" enctype = "multipart/form-data"
type = "file" name = "fileUpload"/>
Photo:	<input type="file" name="fileCV" /><br /><br />
		<input type = "hidden" name = "studentId" value="<?php echo $studentId; ?>" />
		<input type="submit" name="btnSubmit" value="Submit" />
</form>
</body>
</html>
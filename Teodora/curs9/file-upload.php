<?php
print "<pre>";
var_dump($_POST);
print "<hr>";
var_dump($_FILES);//ALL the information about the uploaded file
					//stored in the $_FILES variable

	/*
	name = file name of the uploaded file
	type = the mime type of the uploaded file
	tmp_name = the temporary location of the uploaded file
			(we need to copy it to a permanent location)
	error = the error code(if no errors value will be zero)		
	size = the file size of uploaded file in bytes
	*/
		


?>
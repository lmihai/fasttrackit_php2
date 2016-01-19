<?php
if (isset($_POST['btnSubmit'])) {

if ($_FILES['filePhoto']['error'] === 0) //trew sa fac partea de conditie pe partea de doc  ) {
	if ($_FILES['filePhoto']['type']== 'image/gif'
		|| $_FILES['filePhoto']['type']== 'image/png'
		|| $_FILES['filePhoto']['type']== 'image/jpeg'){

					$filename_photo = $_FILES['filePhoto']['tmp_name'];
					$destination_photo = "uploads/userphoto/" . $_FILES['filePhoto']['name'];
					echo $destination_photo;
					if (move_uploaded_file($filename_photo, $destination_photo)) {
		 
								$sql = 'INSERT INTO file (FilePhotoLocation ) VALUES ("' . $destination_photo . '")';
								
							}
					}
				}

?>
<form align="center" method="post" enctype="multipart/form-data" action="" name="fileUpload">
		<input type='file' size='40' name='filePhoto' />
		<input type='submit' name='btnSubmit' value='Trimite' />
		</div>
	</div>
</form>
<?php
?>
<html>
	<title>Formular Upload</title>
<body>
	<hr>
	<br>
<form align="center" method="post" enctype="multipart/form-data" action="file-upload.php" name="fileUpload">
	<div class='main' align="center">
		<div style='padding-top: 5px;float:center;max-width:320px;'>
			<div style='float:left;padding: 4px 10px 4px 0px;font-weight:bold;font-size:18px;'>Adauga Poza si CV</div>
			<!-- am pus issetul ca sa nu afiseze atuncea cand apas buton direct fata de butonul indirect de upload -->
					<?php if(isset($_GET['upload_direct'])){
						echo "<div class='clearfix'></div><div style='float:right;padding: 4px 10px 4px 0px;'><input type='hidden' size='40' name='id_student' value='".$_GET['upload_direct']."' /></div>";	
					}else{
						echo "<div class='clearfix'></div><div style='float:right;padding: 4px 10px 4px 0px;'><input type='text' size='40' name='id_student' value='Id' /></div>";
					}?>
			<div style='float:right;padding: 4px 10px 4px 0px;'>Poza: <input type='file' size='40' name='filePhoto' /></div>
			<div style='float:right;padding: 4px 10px 4px 0px;'>CV: <input type='file' size='40' name='fileCV' /></div>
			<div style='float:right;padding: 4px 10px 4px 0px;'><input type='submit' name='btnSubmit' value='Trimite' /></div>
		</div>
	</div>
</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<a href="students.php"><input type="submit" value="Inapoi la Studenti"></a>
	<hr>
	<br>
</body>
</html>

<?php
include('students.php');
?>


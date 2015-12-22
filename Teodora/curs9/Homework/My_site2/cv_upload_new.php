<?php
//obtinem aceleasi informatii despre document ca in cazul imaginilor
//name, type,tmp_name,error,size
/*
echo '<pre>';
var_dump($_POST);
echo '<hr>';
echo '<pre>';
var_dump($_FILES);
*/
//crearea tabelului 
//trebuie tabel nou deoarece pe acelasi ID al studentului
//vom avea 2 var $file_location, una cu poza si una cu pdf
//astfel vom diferentia cele doua fisiere


//conectarea la db
	require_once('connection.php');
//crearea tabelului Files_cv

$sql_create_table = "CREATE TABLE Files_cv (
		ID INT NOT NULL AUTO_INCREMENT,
		Filelocation_cv TEXT NOT NULL,		
		PRIMARY KEY (ID)
		);";

	mysqli_query($db_conn, $sql_create_table);

//validare in fuctie de eroare si type
if($_FILES['fileCV']['error'] === 0) {
	if($_FILES['fileCV']['type'] == "application/msword" 
			|| $_FILES['fileCV']['type'] == "application/pdf") {
		//mutam fisierul din tmp intr-o locatie permanenta
		$fileName = $_FILES['fileCV']['tmp_name'];
		$destination = 'uploads_CV/' . $_FILES['fileCV']['name'];
		//verificam ID student
		$studentId = $_POST['studentId']; 
		//folosim functia move_uploaded_file cu parametrii $fileName si $destination
		if(move_uploaded_file($fileName, $destination)){
			
			$sql2 = 'INSERT INTO Files_cv (Filelocation) 
						VALUES ("' . $destination . '")';
			$result1 = mysqli_query($db_conn, $sql2);
			if($file_id = mysqli_insert_id($db_conn)){	//daca id-ul este acelasi se face UPDATE					
							
				$sql3 = 'UPDATE students SET CV = ' . $file_id . '
						 WHERE ID = " '. $studentId . '"';
				$result2 = mysqli_query($db_conn, $sql3);

					if($result1 and $result2){
						echo 'Your CV was successfully uploaded!';
						echo '<br />';
						echo '<a href = "students.php">Go back to the students list </a>';
					}//inchide if pt afisare mesaj succes 

			}//inchide if pentru UPDATE

		}//inchide if pt functia move_uploaded_file
		else{
			print 'Destination not writable, cannot move file';
		}
	} //inchide if ptr validare in functie de type
	else {
		echo "Only word or pdf files allowed.";
	}
}//inchide if in functie de eroare
else {
	print "Upload error: " . $_FILES['fileCV']['error'];
}
<?php
session_start();
if (isset($_SESSION['id']))
{

	echo "
<html>
	<head>
		<title>User</title>
		<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
	</head>
	<body>
	<div class='div_header'>
	</div>
	<div class='div_nav'>
<ul>
	<li><a class='active' href='user.php'>Acasa</a></li>
	<li><a href='courses.php'>Cursuri</a></li>
	<li><a href='students.php'>Studenti</a></li>
	<li><a href='stats.php'>Statistica</a></li>
		<ul style='float:right;list-style-type:none;'>
			<li><a href=''>Despre</a></li>
			<li><a href='logoff.php' name='log_off'>Deconectare</a></li>
		</ul> 
</ul>
	</div>
	<div class='div_body'>
	</div>
	<div class='div_foother'>
	</div>
	</body>
</html> ";

}
else
{
	header("Location: login.php");
	exit;
}

include ('connect.php');


$conn = new mysqli($server, $user, $pass, $dbname);


//aici fac conectarea la server
$conn_list = mysql_connect($server, $user, $pass, $dbname);
//aici citeste baza de date
mysql_select_db($dbname,$conn_list);
//afiseaza tabelul
$result = mysql_query("SELECT * FROM Courses",$conn_list) or die('Nu pot arata Tabelul');
//aici creez tabel tu topurile 
echo '<table cellpadding="6" cellspacing="12" class="db-course" value="List">
<th>Nr</th>
<th>ID</th>
<th>Numele Cursului</th>
<th>Numele Trainer</th> 
<th>Nr studenti</th>
<th>Operatiuni Directe</th>';

$j= 0;
while($row = mysql_fetch_row($result)) 
{
		echo '<tr>';
		echo '<td>';
		$j = $j + 1;
		print $j;
	for ($i=0; $i < count($row); $i++) 
	{ 
		// deci for-ul face sa afiseze arayurile si ele de obicei incep de la 0 si numara cate 
		// spatii am pe o coloana exemplu 0 1 2  0 e pozitia 1 e numele cursului 2 este numele trainerului
		echo '<td>' . $row[$i] . '</td>';
	}
echo '<td>';
	$sqal = 'SELECT COUNT(*) AS NrOfStudentsAtCours FROM students WHERE course = "'.$row[0].'"';
	$resultz = $conn->query($sqal);
	if ($resultz->num_rows > 0) {
    	while($row = $resultz->fetch_assoc()) {
        	if ($row['NrOfStudentsAtCours']>0) {
        		$raspuns = $row['NrOfStudentsAtCours'];
        		echo $raspuns;
        	}else{
				$raspuns = 'Nu sunt Studenti';
				echo $raspuns;
        }
    }
}
	echo '</td>';

		// aici ii zic sa stearga id_delete ca asta e namele la functia care 
		//face sa stearga row de 0 adica dupa pozitia care o da pt fiecare
	echo '	<td>
				<a href="courses_update.php?courses_update='.$row[0].'"><input type="submit" name="course_update" style="width:100px;" value="Modifica(d)"></a>
				<a href="courses_delete.php?id_delete='. $row[0] .'"><input type="submit" name="sterge" value="Sterge(d)"></a>
			</td>';
		echo '</tr>';
}

		// Butoane sub tabel
		echo '</table>';
		// print('	<a href="courses_add.php" text-align="left"><input type="submit" style="width:200px;" value="Add New Courses"></a>
		// 		<a href="courses_edit.php"><input type="submit" style="width:100px;" value="Edit"></a>  
		// 		<a href="courses_delete.php"><input type="submit" style="width:100px;" value="Delete"></a>
		// 		');
		echo '<br>'; 	
		echo '<hr>';

$connection = mysql_connect($server, $user, $pass, $dbname);

mysql_select_db($dbname,$connection);

$result = mysql_query("SELECT * FROM students",$connection) or die('Cannot show tables ');


echo '<table cellpadding="6" cellspacing="12" class="db-course" value="List">
<th>Nr</th>
<th>ID</th>
<th>Primul Nume</th>
<th>Al doilea Nume</th>
<th>Curs</th>
<th>Nota</th>
<th>Poza</th>
<th>CV</th>
<th>Operatiuni Directe</th>';
$j = 0;

while($row = mysql_fetch_row($result)) 
{
		echo '<tr>';
		echo '<td>';
		$j = $j + 1;
		print($j);
		echo '</td>';

	for ($i=0; $i < count($row); $i++) 
	{ 
		// deci for-ul face sa afiseze arayurile si ele de obicei incep de la 0 si numara cate 
		// spatii am pe o coloana exemplu 0 1 2  0 e pozitia 1 e numele cursului 2 este numele trainerului
		echo '<td>' . $row[$i] . '</td>';
	}//operatiuni

		// aici ii zic sa stearga id_delete ca asta e namele la functia care 
		//face sa stearga row de 0 adica dupa pozitia care o da pt fiecare
		//experiment <a href="file-upload.php?filePhoto='. $row[0] .'">
	// <a href="students_edit.php?validez_editarea='.$row[0].'"><input type="submit" style="width:100px" name="validez_editareabb" value="Edit(direct)"></a> 
	echo '	<td>
				
				<a href="students_update.php?validez_updatelebb='.$row[0].'"><input type="submit" style="width:100px" name="validez_updatelebb" value="Modifica(d)"></a> 		
				<a href="upload-form.php?upload_direct='.$row[0].'"><input type="submit" style="width:100px " name="upload_direct" value="Incarca(d)"></a> 
				<a href="students_delete.php?id_delete='. $row[0] .'"><input type="submit" style="width:100px" name="id_delete" value="Sterge(d)"></a>
				<a href="user-profile.php?profil='. $row[0] .'"><input type="submit" style="width:100px" name="profil" value="Profil(d)"></a>
			</td>';
		echo '</tr>';
}
		echo '</table>';
		// print('	<a href="students_add.php" text-align="left"><input type="submit" style="width:200px;" value="Add New Student"></a>		
		// 		<a href="students_edit.php"><input type="submit" style="width:100px" value="Edit"></a> 
		// 		<a href="upload-form.php"><input type="submit" style="width:100px " value="Upload"></a> 
		// 		<a href="students_delete.php"><input type="submit" style="width:100px" value="Delete"></a>
		// 		<a href="user-profile.php"><input type="submit" style="width:100px" name="profil" value="Profil"></a>');
		echo '<br>'; 	
		echo '<hr>';


?>
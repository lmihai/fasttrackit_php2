<?php
session_start();
if (isset($_SESSION['id'])) {

include ('connect.php');

//aici fac conectarea la server

$conn_list = mysql_connect($server, $user, $pass, $dbname);
//aici citeste baza de date
mysql_select_db($dbname,$conn_list);
//afiseaza tabelul
$result = mysql_query("SELECT * FROM Courses",$conn_list) or die('Nu pot arata Tabelul');


//aici creez tabel tu topurile 
echo "<html>
<head>
	<title>Cursuri</title>
	<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
</head>
	<body>
		<div class='div_body'>
				<div class='div_nav'>
					<ul>
						<li><a href='user.php'>Acasa</a></li>
						<li><a class='active' href='courses.php'>Cursuri</a></li>
						<li><a href='students.php'>Studenti</a></li>
						<li><a href='stats.php'>Statistica</a></li>
							<ul style='float:right;list-style-type:none;'>
								<li><a href=''>Despre</a></li>
								<li><a href='logoff.php'>Deconectare</a></li>
							</ul> 
					</ul>
				";
				//aici incepe sa creez tabelul
echo '<table cellpadding="6" cellspacing="16" class="db-course" value="List">
		<tr>
			<th>Nr</th>
			<th>ID</th>
			<th>Numele Cursului</th>
			<th>Numele Trainer</th>
			<th>Nr studenti</th>
			<th>Operatiuni Directe</th>
		</tr>';
$j= 0;
while($rowa = mysql_fetch_row($result)) 
{
		echo '<tr>';
		echo '<td>';
		$j = $j + 1;
		print $j;
				echo '</td>';

	for ($i=0; $i < count($rowa); $i++) 
	{ 
		// deci for-ul face sa afiseze arayurile si ele de obicei incep de la 0 si numara cate 
		// spatii am pe o coloana exemplu 0 1 2  0 e pozitia 1 e numele cursului 2 este numele trainerului
		echo '<td>' . $rowa[$i] . '</td>';
	}
echo '<td>';
$conn = new mysqli($server, $user, $pass, $dbname);
	$sqal = 'SELECT COUNT(*) AS NrOfStudentsAtCours FROM students WHERE course = "'.$rowa[0].'"';
	$resultz = $conn->query($sqal);
	if ($resultz->num_rows > 0) {
    	while($row = $resultz->fetch_assoc()) {
        	if ($row['NrOfStudentsAtCours']>0) {
        		echo $row['NrOfStudentsAtCours'];

        	}else{
				echo "Nu sunt studenti";
        }
    }
}
	echo '</td>';
		// aici ii zic sa stearga id_delete ca asta e namele la functia care 
		//face sa stearga row de 0 adica dupa pozitia care o da pt fiecare

		echo '	<td>
					<a href="courses_update.php?courses_update='.$rowa[0].'"><input type="submit" name="course_update" style="width:100px;" value="Modifica(d)"></a>
					<a href="courses_delete.php?id_delete_direct='. $rowa[0] .'"><input type="submit" name="id_delete_direct" value="Sterge(d)"></a>
				</td></tr>';

}

		echo '</table><br/>';
		// Butoane sub tabel
		print('	<a href="courses_add.php" text-align="left"><input type="submit" style="width:200px;" value="Adauga Curs"></a>
				<a href="user.php"><input type="submit" style="width:100px;"  value="Acasa"></a>
				<a href="courses_edit.php"><input type="submit" style="width:100px;" value="Modifica"></a>  
				<a href="courses_delete.php"><input type="submit" style="width:100px;" value="Sterge"></a>
			
			</div>
		</div>
	</body>
</html>');

	}
else
{
	header("Location: login.php");
	exit;
}
?>

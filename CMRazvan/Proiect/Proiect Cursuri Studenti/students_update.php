<html>
	<head>
		<title>Modifica Student</title>
</head>
	<body>
<?php
include ('connect.php');
$connection = mysql_connect($server, $user, $pass, $dbname);
mysql_select_db($dbname,$connection);
$result = mysql_query("SELECT * FROM students WHERE ID = ".$_GET['validez_updatelebb']."",$connection) or die('Cannot show tables ');
while($rowa = mysql_fetch_row($result)) 
{
	echo "
	<hr>
	<br>
	<form align='center' name='form' method='post' action=''>
		<table align='center'>
			<tr>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Curs</th>
				<th>Nota</th>
			</tr>
			<tr>
				<td><input type='text' name='ID' value='". $rowa[0] ."'></td>
				<td><input type='text' name='fistname_modificare' value='". $rowa[1] ."'></td>
				<td><input type='text' name='lastname_modificare'value='". $rowa[2] ."'></td>
				<td><select name='curs_modificare'>

				";
				// <td><input type='text' name='curs_modificare' value='". $row[3] ."'></td>
				
$connections = mysql_connect($server, $user, $pass, $dbname);
mysql_select_db($dbname,$connections);
$resultz = mysql_query("SELECT * FROM courses",$connections) or die('Cannot show tables ');
while($row = mysql_fetch_row($resultz)) 
{
	for ($i=0; $i < count($row); $i++) 	{ }
	echo "<option name='curs_modificare' value='". $row[0] ."'>".  $row[1]."</option>";
}
echo "
	</select></td>
		<td><input type='text' name='score_modificare' value='". $rowa[5] ."'></td>
	</tr>
		</table>
		<br>
		<input  type='Submit' name='validez_updatele' value='Valideaza Modificarea'>
	</form>";		
			
}
if (isset($_POST['validez_updatele'])) {
$conn_edit = new mysqli($server, $user, $pass, $dbname);

	$sql = "UPDATE students SET firstname='". $_POST['fistname_modificare'] . "', lastname='". $_POST['lastname_modificare'] . "', course='". $_POST['curs_modificare'] . "', score='". $_POST['score_modificare'] . "' WHERE id ='". $_POST['ID']. "'";
	if ($conn_edit->query($sql) === TRUE) 
			{
		   		header("Location: students.php");
				exit;
			} 
				else 
			{
		   		echo "Erroare: " . $sql . "<br>" . $conn_edit->error;
			}	
}
			?>
			<a href='students.php'><input type='submit' value='Inapoi la Studenti'></a>
	</body>
</html>
<?php
print '<hr>';
include('students.php');
?>
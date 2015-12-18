<?php 

$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "school";

$connect_error = 'Sorry, we are experiencing connection problems';
mysql_connect('localhost', 'root', '') or die($connect_error);

mysql_select_db('school') or die($connect_error);


$db_conn = mysqli_connect($server, $db_user, $db_pass, $db_name);
$sql = "SELECT courses.ID, courses.CourseName, courses.Trainer, Count(students.ID) AS number FROM courses LEFT JOIN students ON students.Course = courses.ID GROUP  BY courses.ID";
$result = mysqli_query($db_conn, $sql);


//This adds a new field.
if(isset($_POST['addcourse'])) {
  if (isset($_POST["CourseName"]) && isset($_POST["Trainer"]) && $_POST["CourseName"] != "" && $_POST["Trainer"] != "") {
    $course_Name = $_POST['CourseName'];
    $trainer = $_POST['Trainer'];
    $sql_add = "INSERT INTO Courses (CourseName, Trainer) VALUES ('$course_Name', '$trainer')";
    $result = mysqli_query($db_conn, $sql_add);
    header('location:list.php');
    mysqli_close($db_conn);
    }
  else {
    echo "<center>You need to have both course name and trainer name, please try again.";
  }
}


?>

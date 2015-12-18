<?php

require 'connect.php';

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

<html>
<head>
  <title>Add Course</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<br><br><br><br><br><br>
<center>

<h2>    TEMA CURS 8   </h2>
<br>

  <?php  ?>

<h3>You can add another course here: </h3><br>
    

    <form  method="POST" action="list.php">
            
          <label for="course_name">Name of the course: </label>
          <input type="text" name="CourseName" id="course_name"></td>
          <br><br>
          <label for="name_of_the_trainer">Name of the trainer: </label>
          <input type="text" name="Trainer" id="name_of_the_trainer"></td>

          <br><br><br><br><br><br><hr width="30%"><br>

          <input name="addcourse" type="submit" value="Add another course" id="btn2">

    </form>


</center>
<body>

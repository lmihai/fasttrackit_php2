<?php

require_once('conn.php');
if(isset($_GET['id'])){
  $courseID = $_GET['id'];
  $sql_details = "SELECT * FROM courses
          WHERE ID = $courseID";
  $result = mysqli_query($conn, $sql_details) or die 
  (error_reporting(E_ALL ^ E_DEPRECATED));
  $row = mysqli_fetch_array($result);   

  ?>
  <html>
  <head>
    <title>Edit Courses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body> 
    <center>
    <div class="titlu"><h1>Update Course Name</h1></div><br><br>
   
    <?php 
  //create a form with two text fields,pre-filled with the
  //values from the db: Course name and Trainer
  echo '<div class="form">';
  echo '<form method = "post" action ="process_edit.php" id="edit">';
      echo 'Course name <br><br>';
      echo '<input type = "text" name = "CourseName" value="'.$row['CourseName'].'"required>';
      echo '<br>';
      echo '<br>';
      echo 'Trainer <br><br>';
      echo '<input type = "text" name = "Trainer" value ="'.$row['Trainer'].'" required>';
      echo '<br>';
      echo '<br>'; 
      echo "Course No. <br><br>";
      echo '<input type = "text" name = "ID" value="'.$row['ID'].'"required>';
      echo '<br>';
      echo '<br>';
      echo '<input type = "submit" value = "Update Course" class="button" id="link">';
  echo '</form>';
  echo '</div>';  
  }

  ?>
</center>
  </body>
  </html>

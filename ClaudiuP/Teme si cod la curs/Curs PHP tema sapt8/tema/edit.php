<?php

require('connect.php');
if(isset($_GET['id'])){
  $courseID = $_GET['id'];
  $sql_details = "SELECT * FROM courses
          WHERE ID = $courseID";
  $result = mysqli_query($db_conn, $sql_details) or die 
  (error_reporting(E_ALL ^ E_DEPRECATED));
  $row = mysqli_fetch_array($result);   
  //create a form with two text fields,pre-filled with the
  //values from the db: Course name and Trainer
  echo '<div>';
  echo '<form method = "post" action ="process_edit.php" id="edit">';
      echo '<label for="CourseName">Course name: </label>';
      echo '<input type = "text" name = "CourseName" value="'.$row['CourseName'].'">';
      echo '<br>';
      echo '<br>';
      echo '<label for="Trainer">Trainer: </label>';
      echo '<input type = "text" name = "Trainer" value ="'.$row['Trainer'].'">';
      echo '<br>';
      echo '<br>'; 
      echo '<input type = "text" name = "ID" value="'.$row['ID'].'">';
      echo '<br>';
      echo '<br>';
      echo '<input type = "submit" value = "UPDATE">';
  echo '</form>';
  echo '</div>';  
  }//end if(isset)
  //on submit, verify if the text field are filled(not empty)
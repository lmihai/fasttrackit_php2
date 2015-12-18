<?php

require 'connect.php';

?>

<html>
<head>
  <title>List</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<br><br><br><br>
<center>

<h2>    TEMA CURS 8   </h2>
<br>
<?php 
// Read from the db.
$sql = "SELECT courses.ID, courses.CourseName, courses.Trainer, Count(students.ID) AS number FROM courses LEFT JOIN students ON students.Course = courses.ID GROUP  BY courses.ID";
?>

<table class="table-fill">
  <tr>
    <th>Course No.</th>
    <th>Course Name</th>
    <th>Trainer</th>
    <th>Student Count</th>
    <th>Operations</th>
  </tr>
  <tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <td>  <?php echo $row['ID']               ?></td>
    <td>  <?php echo $row['CourseName']       ?></td>
    <td>  <?php echo $row['Trainer']          ?></td>
    <td>  <?php echo $row['number']           ?></td>
    <?php echo "<td><a href=\"delete.php?id=$row[ID]\"\>Delete</a><br><br><a href=\"edit.php?id=$row[ID]\"\>Edit</a>";?>
  </tr>
  <?php } ?>
</table>

<br><hr width="30%"> <br>
<a href="add.php" id="btn2">Add another course</a>
</center>
<body>
</html>
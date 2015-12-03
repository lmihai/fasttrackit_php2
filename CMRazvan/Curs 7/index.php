<?php
 $server = 'localhost';
 $user ='root';
 $pass ='';
 $db_name = 'fasttrackit';

 $db_conn = mysql_connect($server, $user, $pass);
 mysql_select_db($db_name, $db_conn);
 error_reporting(E_ALL);

 $sql = "SELECT * FROM students WHERE student_id = 1";
 $result = mysql_query($sql, $db_conn);
 $row = mysql_fetch_assoc($result);
 echo $row['student_name'];

 $dasa = "razva";
 echo md5($dasa);
?>
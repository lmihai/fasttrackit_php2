<?php
session_start();
if (isset($_SESSION['id']))
{
	echo " ";

}else{
	header('Location: login.php');
	exit;
}
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
  <li><a href='user.php'>Acasa</a></li>
  <li><a href='courses.php'>Cursuri</a></li>
  <li><a href='students.php'>Studenti</a></li>
  <li><a class='active' href='stats.php'>Statistica</a></li>
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
?>
<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "school";


// Create connection
$conn = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// SELECT COUNT(*) AS TOTALSTUD FROM students WHERE course > 0
// SELECT coursename, students.lastname FROM courses JOIN students ON courses.id=students.course

$sqla = "SELECT course, COUNT(*) AS NumberCS FROM students GROUP BY course";
//echo $sqla;
echo "
<html>
  <head>
    <script type='text/javascript' src='javascript/chartjavascript.js'></script>
    <script type='text/javascript'>
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['CURSURI', 'STUDENTI' ],
          ['','1000'],
          ";
$resulta = $conn->query($sqla);
if ($resulta->num_rows > 0) {
    // output data of each row
    while($rowa = $resulta->fetch_assoc()) {

           echo " ['".$rowa['course']."','".$rowa['NumberCS']."'],";

  }
  // echo " ['".$rowa[0]."','".$rowa[1]."']";
  

}
echo"       
         ]);

var options = {
        title: 'Density of Precious Metals, in g/cm^3',
        width: 600,
        height: 400,
        bar: {groupWidth: '95%'},
        legend: { position: 'none' },
      };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id='columnchart_material' style='width: 900px; height: 500px;'></div>
  </body>
</html>
";
//echo "<html><body><hr style='border: solid 5px black;'></body></html>";
// echo " 
// <html>
//   <head>
//     <script type='text/javascript' src='https://www.google.com/jsapi'></script>
//     <script type='text/javascript'>
//       google.load('visualization', '1', {packages:['corechart']});
//       google.setOnLoadCallback(drawChart);
//       function drawChart() {

//         var data = google.visualization.arrayToDataTable([
//           ['Curs','Da'],
//           ['Curs1','5'],
//           ['Curs2','10']
    
//         ]);

//         var options = {
//           title: 'Numarul de studenti'
//         };

//         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

//         chart.draw(data, options);
//       }
//     </script>
//   </head>
//   <body>
//     <div id='piechart' style='width: 900px; height: 500px;'></div>
//   </body>
// </html>
// ";

 echo " 
 <html>
  <head>
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
  <script type='text/javascript'>
    google.charts.load('current', {packages:['corechart']});
    google.charts.setOnLoadCallback(drawCharta);
    function drawCharta() {
      var data = google.visualization.arrayToDataTable([
        ['Element', 'Density', { role: 'style' } ],
        ['Copper', 8.94, '#b87333'],
        ['Silver', 10.49, 'silver'],
        ['Gold', 19.30, 'gold'],
        ['Platinum', 21.45, 'color': #e5e4e2']
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: 'stringify',
                         sourceColumn: 1,
                         type: 'string',
                         role: 'annotation' },
                       2]);

      var options = {
        title: 'Density of Precious Metals, in g/cm^3',
        width: 600,
        height: 400,
        bar: {groupWidth: '95%'},
        legend: { position: 'none' },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_valuesa'));
      chart.draw(view, options);
  }
  </script>
  </head>
  <body>
    <div id='columnchart_valuesa' style='width: 900px; height: 300px;'></div>
  </body>
</html>
";


?>

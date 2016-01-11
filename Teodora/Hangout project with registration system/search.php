<?php
	require 'connections/connections.php';
?>	
<?php
session_start();
if(isset($_SESSION['UserID']))
{

}
else{
	header('Location:login.php');
}
?>
<!doctype html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="RightBody">
			<h2>Romanian membership</h2>
			</div>
		</div>
			<div class="menu">
				<div id="Menu">
					<nav>
						<ul class="cssmenu">
							<li><a href="Profile.php">Profile</a></li>
							<li><a href="account.php">Account</a></li>
							<li><a href="LogOut.php">Log out</a></li>
						</ul>
					</nav>
				</div>
				</div>
					<div class="container_center">
					<!--aici punem :lista membri
									lista cu propunerile actuale
									rezultatele de la propunerile anterioare
									form pentru propunere noua 

					LISTA CU ULTIMII 5 MEMBRII INREGISTRATI + BUTOANE SEARCH DUPA NUME, OCUPATIE SAU LOCALITATE-->
					<?php
						$sql_lastmembers = "SELECT * FROM user GROUP BY Timestamp 
											ORDER BY Timestamp DESC LIMIT 10";
						$searchResultsmembers = mysqli_query($con, $sql_lastmembers);
						echo '<h4>Last members who loves PHP...</h4>';
						echo '<table><tr bgcolor="#ccc"><td>First Name</td><td>Last Name</td>
								<td>Ocupation</td><td>Location</td><td>Company</td><td>View</td>';
							while($row1 = mysqli_fetch_array($searchResultsmembers)){
								echo '<tr>';

								echo'<td>';
								echo $row1['Fname'];
								echo'</td>';

								echo'<td>';
								echo $row1['Lname'];
								echo'</td>';

								echo'<td>';
								echo $row1['ocupation'];
								echo'</td>';

								echo'<td>';
								echo $row1['location'];
								echo'</td>';

								echo'<td>';
								echo $row1['Company'];
								echo'</td>';

								
								echo'<td>';										
								$userid = $row1['UserID'];
								echo '<a href = "http://localhost/fasttrackit_php2\Teodora\Hangout project with registration system/Profile2.php?UserID='.$userid.'">Profile</a>';									
								echo'</td>';
							

								echo '</tr>';
							}
						echo '</table>'	;
						?>
						<div class="LeftBody">
						<h3>Search members by ...</h3>

						<div class="FormElement">
								<form method = "post" action = "searchby.php">
								
								<input type="text" name="search_by_name" id="search_by_name"/>
								<input type="submit" name="search_by_nameButton" value="Search by name" />
								</form>								
						</div>

						<div class="FormElement">
								<form method = "post" action = "searchby.php">
								
								<input type="text" name="search_by_location" id="search_by_location"/>
								<input type="submit" name="search_by_locationButton" value="Search by location" />
								</form>								
						</div>					
						</div>

						<div class="RightBody">
						<h3>Search members by ...</h3>

						<div class="FormElement">
								<form method = "post" action = "searchby.php">
								
								<input type="text" name="search_by_ocupation" id="search_by_ocupation"/>
								<input type="submit" name="search_by_ocupationButton" value="Search by ocupation" />
								</form>								
						</div>

						<div class="FormElement">
								<form method = "post" action = "searchby.php">
								
								<input type="text" name="search_by_company" id="search_by_company"/>
								<input type="submit" name="search_by_companyButton" value="Search by company" />
								</form>								
						</div>					
						</div>
					</div>				
			<?php include ('footer.php'); ?>
		</div>
		

</body>
</html>
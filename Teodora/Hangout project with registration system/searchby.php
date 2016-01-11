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
							<li><a href="search.php">Back</a></li>
							<li><a href="Profile.php">Profile</a></li>
							<li><a href="account.php">Account</a></li>
							<li><a href="LogOut.php">Log out</a></li>
						</ul>
					</nav>
				</div>
				</div>
					<div class="container_center">
					
					<?php
					//rezultate cautare dupa name
					if(isset($_POST['search_by_nameButton'])) { 
						$search = $_POST['search_by_name'];
						$searchQuery = "SELECT * FROM user WHERE Fname like '%$search%' OR Lname LIKE '%$search%'";
						$searchResults = mysqli_query($con, $searchQuery);
						if (!$searchResults) {
   						 printf("Error: %s\n", mysqli_error($con));
    					exit();
						}
						echo '<table><tr bgcolor="#ccc"><td>First Name</td><td>Last Name</td>
								<td>Ocupation</td><td>Location</td><td>Phone</td><td>Email</td>';
							while($row4 = mysqli_fetch_array($searchResults)){
								echo '<tr>';

								echo'<td>';
								echo $row4['Fname'];
								echo'</td>';

								echo'<td>';
								echo $row4['Lname'];
								echo'</td>';

								echo'<td>';
								echo $row4['ocupation'];
								echo'</td>';

								echo'<td>';
								echo $row4['location'];
								echo'</td>';

								echo'<td>';
								echo $row4['Phone'];
								echo'</td>';

								echo'<td>';
								echo $row4['Email'];
								echo'</td>';


								echo '</tr>';
							}
							echo '</table>'	;				
						}
					//rezultate cautare dupa location
					if(isset($_POST['search_by_locationButton'])) { 
						$search = $_POST['search_by_location'];
						$searchQuery = "SELECT * FROM user WHERE location LIKE '%$search%'";
						$searchResults = mysqli_query($con, $searchQuery);
						if (!$searchResults) {
   						 printf("Error: %s\n", mysqli_error($con));
    					exit();
						}
						echo '<table><tr bgcolor="#ccc"><td>First Name</td><td>Last Name</td>
								<td>Ocupation</td><td>Location</td><td>Phone</td><td>Email</td>';
							while($row4 = mysqli_fetch_array($searchResults)){
								echo '<tr>';

								echo'<td>';
								echo $row4['Fname'];
								echo'</td>';

								echo'<td>';
								echo $row4['Lname'];
								echo'</td>';

								echo'<td>';
								echo $row4['ocupation'];
								echo'</td>';

								echo'<td>';
								echo $row4['location'];
								echo'</td>';

								echo'<td>';
								echo $row4['Phone'];
								echo'</td>';

								echo'<td>';
								echo $row4['Email'];
								echo'</td>';


								echo '</tr>';
							}
							echo '</table>'	;				
						}
					//rezultate cautare dupa ocupation
					if(isset($_POST['search_by_ocupationButton'])) { 
						$search = $_POST['search_by_ocupation'];
						$searchQuery = "SELECT * FROM user WHERE ocupation LIKE '%$search%'";
						$searchResults = mysqli_query($con, $searchQuery);
						if (!$searchResults) {
   						 printf("Error: %s\n", mysqli_error($con));   						
       					exit();
						}			
						
						echo '<table><tr bgcolor="#ccc"><td>First Name</td><td>Last Name</td>
								<td>Ocupation</td><td>Location</td><td>Phone</td><td>Email</td>';
							while($row4 = mysqli_fetch_array($searchResults)){
								echo '<tr>';

								echo'<td>';
								echo $row4['Fname'];
								echo'</td>';

								echo'<td>';
								echo $row4['Lname'];
								echo'</td>';

								echo'<td>';
								echo $row4['ocupation'];
								echo'</td>';

								echo'<td>';
								echo $row4['location'];
								echo'</td>';

								echo'<td>';
								echo $row4['Phone'];
								echo'</td>';

								echo'<td>';
								echo $row4['Email'];
								echo'</td>';


								echo '</tr>';
							}
							echo '</table>'	;
											
						}
					//rezultate cautare dupa Company
					if(isset($_POST['search_by_companyButton'])) { 
						$search = $_POST['search_by_company'];
						$searchQuery = "SELECT * FROM user WHERE Company LIKE '%$search%'";
						$searchResults = mysqli_query($con, $searchQuery);
						if (!$searchResults) {
   						 printf("Error: %s\n", mysqli_error($con));
    					exit();
						}
						echo '<table><tr bgcolor="#ccc"><td>First Name</td><td>Last Name</td>
								<td>Ocupation</td><td>Location</td><td>Phone</td><td>Email</td>';
							while($row4 = mysqli_fetch_array($searchResults)){
								echo '<tr>';

								echo'<td>';
								echo $row4['Fname'];
								echo'</td>';

								echo'<td>';
								echo $row4['Lname'];
								echo'</td>';

								echo'<td>';
								echo $row4['ocupation'];
								echo'</td>';

								echo'<td>';
								echo $row4['location'];
								echo'</td>';

								echo'<td>';
								echo $row4['Phone'];
								echo'</td>';

								echo'<td>';
								echo $row4['Email'];
								echo'</td>';


								echo '</tr>';
							}
							echo '</table>'	;				
						}			
				?>					
			
		</div>

			<?php include ('footer.php'); ?>
		
	</div>	
		

</body>
</html>
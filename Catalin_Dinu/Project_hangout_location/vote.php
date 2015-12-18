<html>
	<head>
		<title>VOTE</title>
	</head>
	<body>
	<h2>Please vote the location</h2>
		<form name="form" method="post" action="result.php">
			<input list="browsers" name="CourseName"><br>
			<datalist id="browsers">
				<option value="Location 1">
				<option value="Location 2">
				<option value="Location 3">
				<option value="Location 4">
				<option value="Location 5">
			</datalist>
				<input type = "radio" name="vote" value = ""> 1<br>
				<input type = "radio" name="vote" value = ""> 2<br>
				<input type = "radio" name="vote" value = ""> 3<br>
				<input type = "radio" name="vote" value = ""> 4<br>
				<input type = "radio" name="vote" value = ""> 5<br>
			<!-- sau mai este varianta asta de votare -->
            Vote (between 1 and 5):
			<!-- sau mai este varianta asta de votare -->
            <input type="number" name="vote" min="1" max="5"><br>
			<table style="width:100%">
				<tr>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Location 1</td>
					<td><input type="radio" name="location_1[]" value="1"></td>
					<td><input type="radio" name="location_1[]" value="2"></td>
					<td><input type="radio" name="location_1[]" value="3"></td>
					<td><input type="radio" name="location_1[]" value="4"></td>
					<td><input type="radio" name="location_1[]" value="5"></td>
				</tr>
				<tr>
					<td>Location 2</td>
					<td><input type="radio" name="location_2[]" value="1"></td>
					<td><input type="radio" name="location_2[]" value="2"></td>
					<td><input type="radio" name="location_2[]" value="3"></td>
					<td><input type="radio" name="location_2[]" value="4"></td>
					<td><input type="radio" name="location_2[]" value="5"></td>
				</tr>
				<tr>
					<td>Location 3</td>
					<td><input type="radio" name="location_3[]" value="1"></td>
					<td><input type="radio" name="location_3[]" value="2"></td>
					<td><input type="radio" name="location_3[]" value="3"></td>
					<td><input type="radio" name="location_3[]" value="4"></td>
					<td><input type="radio" name="location_3[]" value="5"></td>
				</tr>
			</table>
            <input type="submit" value="Vote">
    </form>
</body>
</html>


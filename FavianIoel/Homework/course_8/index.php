<?php require('conn.php'); ?>
<html>
<head>
    <title>Courses Management Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><br>
        <div class="titlu"><h1>COURSES MANAGEMENT PAGE</h1></div>
        <br>

        <?php
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

// Attempt select query execution
        $sql = "SELECT * FROM courses";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result)>0) {
                echo "<table>";
                echo "<th>Course<br> No.</th>";
                echo "<th>CourseName</th>";
                echo "<th>Trainer</th>";
                echo "<th>Operations</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['CourseName'] . "</td>";
                    echo "<td>" . $row['Trainer'] . "</td>";
                    echo "<td><a href=\"delete.php?id=$row[ID]\"\>Delete</a><br><br><a href=\"edit.php?id=$row[ID]\"\>Edit</a>";
                    echo "</tr>";
                }
                echo "</table>";

    //Close result set
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found .";
            }
        }else {
            echo "ERROR: Could not able to execute $sql." . mysqli_close($conn);
        }

//close conection
        mysqli_close($conn);
        ?>

        ?><br><br>
        <a class="button" href="add.php" id="link" >Add course</a>
        

    </center>    
</body>
</html>
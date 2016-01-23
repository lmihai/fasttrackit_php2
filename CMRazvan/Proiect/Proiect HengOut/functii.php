<?php
include 'conn.php';

if (isset($_GET['vote'])) {
				$conn = new mysqli($servername, $username, $password, $database);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "UPDATE propuneri SET prop_rank = prop_rank + 1 WHERE prop_id = '".$_GET['vote']."'";
				$result = $conn->query($sql);
				echo "Sa rezolvat";
				header("Location: propuneri.php");
				exit;
}else {
	echo "GRESTI";
}
if (isset($_GET['votea'])) {
				$conn = new mysqli($servername, $username, $password, $database);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "UPDATE propuneri SET prop_rank = prop_rank - 1 WHERE prop_id = '".$_GET['votea']."'";
				$result = $conn->query($sql);
				echo "Sa rezolvat";
				header("Location: propuneri.php");
				exit;
}else {
	echo "GRESTI";
}

if (isset($_GET['del'])) {
				$conn = new mysqli($servername, $username, $password, $database);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "DELETE FROM `propuneri` WHERE `prop_id`  = '".$_GET['del']."'";
				$result = $conn->query($sql);
				echo "Sa rezolvat";
				header("Location: propuneri.php");
				exit;
}else {
	echo "GRESTI";
}





?>
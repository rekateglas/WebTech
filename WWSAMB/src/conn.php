<?php
$servername = "localhost";
$username = "webtech";
$password = "";
$dbname = "webtechwwsamb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Csatlakozási hiba: " . $conn->connect_error);
} 
else{
	echo"";
}
?>
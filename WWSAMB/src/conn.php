<?php
$servername = "localhost";
$username = "webtech";
$password = "";
$dbname = "webtechwwsamb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Csatlakozási hiba: " . $conn->connect_error);
} 
else{
	echo"";
}
?>
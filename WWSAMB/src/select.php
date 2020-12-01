<?php 
include 'D:\Web\WWSAMB\src\conn.php';
$sql = "SELECT *FROM salon";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
	 
    echo "|&nbspNév:&nbsp" . $row["nev"]. "&nbsp|&nbspÖsszeg:&nbsp" . $row["osszeg"]. "&nbsp|&nbspIdőpont sora:&nbsp" . $row["row"]."&nbsp|&nbspIdőpont cellája:&nbsp". $row["cell"]. "<br>";
	
	
	}
} else {
  echo "0 results";
}
$conn->close();
?>
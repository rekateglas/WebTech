<?php
include 'D:\Web\WWSAMB\src\conn.php';
$name = mysqli_real_escape_string($conn, $_REQUEST['frist-name']);

$time = mysqli_real_escape_string($conn, $_REQUEST['time']);
$day= mysqli_real_escape_string($conn,$_REQUEST['day']);
$ar= mysqli_real_escape_string($conn,$_REQUEST['ar']);
 echo $name;

$sql = "INSERT INTO salon (id,nev, row,cell,osszeg) VALUES (NULL,'$name', '$day', '$time','$ar')";
if(mysqli_query($conn, $sql)){
	echo '<script>
             alert("Foglalás Sikeresen rögzítve"); 
             window.history.go(-1);
     </script>";';

} else{
     echo '<script>
             alert("Foglalás sikertelenül futott le"); 
             window.history.go(-1);
     </script>";' . mysqli_error($conn);

}


?>
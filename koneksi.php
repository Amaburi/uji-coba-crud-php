<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "tugas";
 $conn = new mysqli($host,$user,$pass,$db);
 if($conn){
	  echo "BERHASIL";
	  echo "<br/>";
 }else{
	  echo "GAGAL";
 }
?>
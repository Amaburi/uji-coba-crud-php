<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="container"> 
 <div class="card-header bg-warning text-white">
    HASIL PENCARIAN
  </div>
  <div class="card">
<?php
include './koneksi.php';
$search =$_POST['search'];
$sql = "SELECT * FROM jurusan WHERE nama_siswa LIKE '%".$search."%'";
 $result = $conn->query($sql);
 $a = 1;
 while($baris = mysqli_fetch_array($result)){
	  echo "<br/>";
	  echo "$a";
	  echo "<br/>";
	  echo "Nama :".$baris[1]."<br/>";
	  echo "Jurusan :".$baris[2]."<br/>";
	  $a++;
 }
 $conn->close();
?>
</div>
</div>
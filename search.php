<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="container"> 
<div class="card-header bg-success text-white">
    HASIL PENCARIAN
 </div>
<div class="card">
<?php
include './koneksi.php';
$search =$_POST['search'];
$sql = "SELECT * FROM buku WHERE nama_siswa LIKE '%".$search."%'";
 $result = $conn->query($sql);
 $a = 1;
 while($baris = mysqli_fetch_array($result)){
	  echo "<br/>";
	  echo "$a";
	  echo "<br/>";
	  echo "NIS :".$baris[1]."<br/>";
	  echo "Nama :".$baris[2]."<br/>";
	  echo "Jenis Kelamin :".$baris[3]."<br/>";
	  echo "Alamat :".$baris[4]."<br/>";
	  $a++;
 }
 $conn->close();
?>
</div>
</div>
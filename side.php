<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="container">
<h1 style="color:green">SISWA DAN JURUSANNYA</h1>
<!-- awalan -->
<div class="card">
  <div class="card-header bg-danger text-white">
    NAMA SISWA
  </div>
  <div class="card-body">
  <form action="search.php" method="POST">
  <input type="text" name="search" autofocus placeholder="SEARCH DATA DISINI" autocomplete="off">
  <button type="submit" id="cari" value="Search">SEARCH</button>
  </form>
<?php
 include './koneksi.php';
 echo "<a href='main.php'>Tambah data</a><br/>";
 $sql = "SELECT * FROM buku";
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
	  echo "<a href='data.php?id_siswa=$baris[0]'>Ubah &nbsp</a>";
	  echo "<a href='delete.php?id_siswa=$baris[0]'>HAPUSS</a>";
	  $a++;
 }
 $conn->close();
?>
  </div> 
</div>
<div class="card">
  <div class="card-header bg-danger text-white">
    NAMA JURUSAN SISWA
  </div>
  <div class="card-body">
  <form action="search2.php" method="POST">
  <input type="text" name="search" autofocus placeholder="SEARCH DATA DISINI" autocomplete="off">
  <button type="submit" id="cari" value="Search">SEARCH</button>
  </form>
<?php
 include './koneksi.php';
 echo "<a href='main.php'>Tambah data</a><br/>";
 $sql = "SELECT * FROM jurusan";
 $result = $conn->query($sql);
 $a = 1;
 while($baris = mysqli_fetch_array($result)){
	  echo "<br/>";
	  echo "$a";
	  echo "<br/>";
	  echo "NAMA SISWA :".$baris[1]."<br/>";
	  echo "NAMA JURUSAN :".$baris[2]."<br/>";
	  echo "<a href='data2.php?id_jurusan=$baris[0]'>Ubah &nbsp</a>";
	  echo "<a href='delete2.php?id_jurusan=$baris[0]'>HAPUSS</a>";
	  $a++;
 }
 $conn->close();
?>
  </div> 
</div>
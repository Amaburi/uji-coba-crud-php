<?php
  include './koneksi.php';
  $id =$_POST['id'];
  $nis =$_POST['nis'];
  $nama_siswa =$_POST['nama_siswa'];
  $alamat =$_POST['alamat'];
  $sql = "UPDATE siswa SET nis='$nis',nama_siswa='$nama_siswa',alamat='$alamat' WHERE id='$id'";
  if($conn->query($sql)===TRUE){
		echo "UBAH DATA BERHASIL <br/>";
		echo "<a href='tampil.php'>BALIK</a> <br/>";
  }else{
		echo "Error:".$sql."<br/>".$conn->error;
  }
  $conn->close()
?>
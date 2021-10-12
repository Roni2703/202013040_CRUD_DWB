<?php

include('config.php');

if(isset($_GET['Nim'])){

	$Nim = $_GET['Nim'];

	$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

	if(mysqli_num_rows($cek) > 0){

		$del = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil mengahapus data."); document.location="tampil.php";</script>';
		}else{
			echo '<script>alert("Gagal mengahapus data."); document.location="tampil.php";</script>';
		}
	}else{
			echo '<script>alert("ID tidak ditemukan di database."); document.location="tampil.php";</script>';
	}
	}else{
			echo '<script>alert("ID tidak ditemukan di database."); document.location="tampil.php";</script>';
}
?>
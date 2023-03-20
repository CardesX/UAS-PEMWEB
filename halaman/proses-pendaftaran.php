<?php

// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama', '$jurusan', '$alamat', '$jk', '$agama', '$sekolah')");
 
// mengalihkan halaman kembali ke pengguna.php
	header("location:index.php");
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
?>
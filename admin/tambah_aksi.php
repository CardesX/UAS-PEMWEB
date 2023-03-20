<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['song'];
$alamat = $_POST['type'];
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama','$alamat')");
 
// mengalihkan halaman kembali ke pengguna.php
header("location:index.php?page=pengguna");
 
?>
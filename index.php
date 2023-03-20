<!DOCTYPE html>
<html>
<head>
	<title>UAS Pemweb</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Databases Pendaftaran Calon Mahasiswa Baru</h1>
		<h3 class="deskripsi">Diharapkan untuk admin untuk mengisi form yang ada untuk calon mahasiswa untuk didata terimakasih</h3>
		<h4 class="deskripsi"><center>Sekertariat YEET University</center></h4>
	</header>
	<div class="badan">
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=pengguna">DAFTAR CALON MAHASISWA</a></li>
			<li><a href="index.php?page=mlogin">LOGIN ADMIN</a></li>
		</ul>
	</div>

	<div class="badan">

<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<?php 
	if(isset($_GET['page'])){ //ini untuk memeriksa jika tidak ada page maka tidak ditampilkan, akan di arahkan ke home
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'pengguna':
					include "halaman/pengguna.php";
					break;
			case 'mlogin':
				include "mlogin.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>
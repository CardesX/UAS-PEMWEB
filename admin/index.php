<html>
<head>
	<title>UAS Pemweb</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<br/>
 	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../mlogin.php?pesan=belum_login");
	}
	?>
	<?php 
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
	<header>
		<h1 class="judul">DATABASES CALON MAHASISWA<h1>
		<h3 class="deskripsi">Website pengisian data untuk calon mahasiswa Bruh University </h3>
	</header>
	<h3><center>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</center></h3>
	<div class="menu">
		<ul>
			<li><a href="index.php?page=pengguna">DATA CALON MAHASISWA</a></li>
			<li><a href="index.php?page=tutorial">CARI CALON MAHASISWA</a></li>
			<li><a href="index.php?page=logout">LOGOUT</a></li>
		</ul>
	</div>
	<div class="badan">
		<?php 
		function display(){
			if(isset($_GET['page'])){ //ini untuk memeriksa jika tidak ada page maka tidak ditampilkan, akan di arahkan ke home
				$page = $_GET['page'];
				switch ($page) {
					case 'admin':
						include "home.php";
						break;
					case 'pengguna':
						include "pengguna.php";
						break;
					case 'tutorial':
						include "tutorial.php";
						break;	
					case 'logout':
						include "logout.php";
						break;				
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}
		}
	
	display();
	 ?>
	 <div class="halaman">
	 
	 <p>Silahkan untuk memasukkan data calon mahasiswa YEET University jika ada pertanyaan mengenai inputan harap melakukan panggilan ke sekretariat, terimakasih</p>
	</div>
	</div>
</div>
</body>
</html>
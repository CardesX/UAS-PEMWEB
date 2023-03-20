<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
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
	<header>
		<h1 class="judul">YEET UNIVERSITY</h1>
		<h3 class="deskripsi">Halaman Admin</h3>
	</header>
	<h4><center>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</center></h4>
	<div class="menu">
		<ul>
			<li><a href="index.php?page=pengguna">DAFTAR CALON MAHASISWA</a></li>
			<li><a href="index.php?page=tutorial">EDIT CALON MAHASISWA</a></li>
			<li><a href="index.php?page=logout">LOGOUT</a></li>
		</ul>
	</div>
	<div class="badan">
	<h2><Center> 
	<br>EDIT DATA CALON MAHASISWA</center></h2>
 
	<?php
	include '../config.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table align="center">
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Juruan</td>
					<td>
					<?php $jurusan = $d['jurusan']; ?>
            <label><input type="radio" name="jurusan" value="TI" <?php echo ($jurusan == 'ti') ? "checked": "" ?>> TI</label>
            <label><input type="radio" name="jurusan" value="SI" <?php echo ($jurusan == 'si') ? "checked": "" ?>> SI</label>
			<label><input type="radio" name="jurusan" value="DKV" <?php echo ($jurusan == 'dkv') ? "checked": "" ?>> DKV</label>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>			
					<td>Jenis Kelamin</td>
					<td>
					<?php $jk = $d['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
					</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td><?php $agama = $d['agama']; ?>
           		<select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
              
            </select></td>
				</tr>
				<tr>			
					<td>Sekolah Asal</td>
					<td>
						<input type="text" name="sekolah_asal" value="<?php echo $d['sekolah_asal']; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="tombol"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 </div>
 </div>
 </div>
</body>
</html>
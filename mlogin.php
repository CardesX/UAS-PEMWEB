<!DOCTYPE html>
<html>
<head>
	<title>Admin_Login</title>
</head>
<body>
	<h2><center>Admin Login</center></h2>
	<br/>
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
	<br/>
	<div class="login">
	<br/>
	<form method="post" action="login.php" onSubmit="return validasi()" >
		<table>
			<tr>
				<td><label>Username</td>
				<td>:</label></td>
				<td><input type="text" name="username" placeholder="Masukkan username" id="username"></td>
			</tr>
			<tr>
				<td><label>Password</td>
				<td>:</label></td>
				<td><input type="password" name="password" placeholder="Masukkan password" id="password"></td>
			</tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN" class="tombol"></td>
			</tr>
		</table>			
	</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>
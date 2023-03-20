<div class="halaman">
	<h2>Menampilkan data dari database</h2>
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
	<table border="0" align="center">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah asal</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include '../config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['agama']; ?></td>
				<td><?php echo $d['sekolah_asal']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>" class="tombol">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>" class="tombol">HAPUS</a>
					
				</td>
			</tr>
			<?php 
		}
		?>
		
	</table>
	</table>
</div>
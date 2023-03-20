<div class="halaman">
	<br>

	<form method="post">
<input type="text" name="nt" placeholder="cari ...">
<input type="submit" name="submit" value="cari" class="tombol">
<form>
<br/>
<br/>

<table border=1 align="center">
<tr> 
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah asal</th> </tr>
<?php
if(!ISSET($_POST['submit'])){
	include '../config.php';
$sql = "SELECT * FROM user";
$query = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_array($query)){

?>
<tr>
 <td><?php echo $row['nama']; ?></td>
 <td><?php echo $row['jurusan']; ?></td>
 <td><?php echo $row['alamat']; ?></td>
 <td><?php echo $row['jenis_kelamin']; ?></td>
 <td><?php echo $row['agama']; ?></td>
 <td><?php echo $row['sekolah_asal']; ?></td>
</tr>

<?php } } ?>

<?php 
include '../config.php';
if (ISSET($_POST['submit'])){
 $cari = $_POST['nt'];
 $query2 = "SELECT * FROM user WHERE nama LIKE '%$cari%'";
 
 $sql = mysqli_query($koneksi, $query2);
 while ($r = mysqli_fetch_array($sql)){
  ?>
<tr>
 <td><?php echo $r['nama']; ?></td>
 <td><?php echo $r['jurusan']; ?></td>
 <td><?php echo $r['alamat']; ?></td>
 <td><?php echo $r['jenis_kelamin']; ?></td>
 <td><?php echo $r['agama']; ?></td>
 <td><?php echo $r['sekolah_asal']; ?></td>
</tr>  
 <?php }} ?>

</table>	
	
</div>
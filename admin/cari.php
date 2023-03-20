<?php 
include '../config.php';
?>
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
<form method="post">
<input type="text" name="nt" placeholder="cari ...">
<input type="submit" name="submit" value="cari" class="tombol">
<form>
<br/>
<br/>

<table border=1>
<tr> <td>NAMA</td>
<td>KELAMIN</td> </tr>
<?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM siswa";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)){

?>
<tr>
 <td><?php echo $row['nama']; ?></td>
 <td><?php echo $row['sex']; ?></td>
</tr>

<?php } } ?>

<?php if (ISSET($_POST['submit'])){
 $cari = $_POST['nt'];
 $query2 = "SELECT * FROM siswa WHERE nama LIKE '%$cari%'";
 
 $sql = mysqli_query($conn, $query2);
 while ($r = mysqli_fetch_array($sql)){
  ?>
<tr>
 <td><?php echo $r['nama']; ?></td>
 <td><?php echo $r['sex']; ?></td>
</tr>  
 <?php }} ?>

</table>
</body>
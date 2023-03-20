<div class="halaman">
<form action="proses-pendaftaran.php" method="POST">
<fieldset>
<p>
	<label for="nama">Nama: </label>
	<input type="text" name="nama" placeholder="nama lengkap" required/>
</p>
<p>
	<label for="jurusan">Jurusan: </label>
	<label><input type="radio" name="jurusan" value="TI" > TI</label>
	<label><input type="radio" name="jurusan" value="SI"> SI</label>
	<label><input type="radio" name="jurusan" value="DKV"> DKV</label>
</p>
<p>
	<label for="alamat">Alamat: </label>
	<textarea name="alamat" required></textarea>
</p>
<p>
	<label for="jenis_kelamin">Jenis Kelamin: </label>
	<label><input type="radio" name="jenis_kelamin" value="laki-laki" > Laki-laki</label>
	<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
</p>
<p>
	<label for="agama">Agama: </label>
	<select name="agama">
		<option>Islam</option>
		<option>Kristen</option>
		<option>Hindu</option>
		<option>Budha</option>
	</select>
</p>
<p>
	<label for="sekolah_asal">Sekolah Asal: </label>
	<input type="text" name="sekolah_asal" placeholder="nama sekolah" required/>
</p>
<p>
	<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</div>
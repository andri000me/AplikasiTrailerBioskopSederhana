	<h3 align="center">Tambah Daftar Film Baru </h3>
	<p>&nbsp;</p>
		<form action="insert_film.php" method="POST">
		<table align="center">
		<tr>
		<td><font face="Arial" size="3">ID FILM</font></td>
		<td>:</td>
		<td><input type="text" name="id_film" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">JUDUL</font></td>
		<td>:</td>
		<td><input type="text" name="judul" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">TANGGAL TAYANG</font></td>
		<td>:</td>
		<td><input type="date" name="tgl_tayang" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">TANGGAL BATAS TAYANG</font></td>
		<td>:</td>
		<td><input type="date" name="sampai_dengan" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">SUTRADARA</font></td>
		<td>:</td>
		<td><input type="text" name="sutradara" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">DURASI</font></td>
		<td>:</td>
		<td><input type="text" name="durasi" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">SINOPSIS</font></td>
		<td>:</td>
		<td><textarea name="sinopsis" id="sinopsis" size="30" required></textarea></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">GAMBAR</font></td>
		<td>:</td>
		<td><input type="file" name="gambar" size="30" required></td>
		</tr>
		<tr>
		<td></td><td></td>
		<td><input type="submit" value="Add">
		<font face="Arial" size="3">
		<a href="homeAdmin.php">Cancel</font></a>
		</td>
		</tr>
		</table>
		<p>&nbsp;</p>
		
<?php
require_once '../koneksi/koneksi.php';
$sql = 'select * from film';
$ress = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if ($ress){
if (mysqli_num_rows($ress)){ ?>
<table align="center"  border="1">
<tr>
<td width="20px;">No</td>
<td width="50px;">Id Film</td>
<td width="100px;">Judul</td>
<td width="100px;">Tgl Tayang</td>
<td width="100px;">Batas Tayang</td>
<td width="70px;">Sutradara</td>
<td width="50px;">Durasi</td>
<td width="250px;">Sinopsis</td>
<td width="100px;">Gambar</td>
</tr>
<?php
$i =1;
while ($row = mysqli_fetch_row($ress)){ ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; ?></td>
<td><?php echo $row[6]; ?></td>
<td><?php echo $row[7]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
} else {
echo 'tidak ada';
}}
?>
</form>
</div>
</div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
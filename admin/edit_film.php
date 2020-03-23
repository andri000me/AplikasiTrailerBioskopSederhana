<div class="content">
	<div align="center">
		<h2>Perbarui Data Film</h2>
		<?php
		include "../koneksi/koneksi.php";
		$id_film = $_GET['id_film'];
		$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM film WHERE id_film='$id_film'");
		while ($row=mysqli_fetch_array($query)){
		$judul = $row['judul'];
		$tgl_tayang = $row['tgl_tayang'];
		$sampai_dengan = $row['sampai_dengan'];
		$sutradara = $row['sutradara'];
		$durasi = $row['durasi'];
		$sinopsis = $row['sinopsis'];
		$gambar = $row['gambar'];
		echo"
		<table align='center'>
		<form action='update_film.php' method='POST'>
		<tr>
		<td><font face='Arial' size='3'>JUDUL</font></td>
		<td>:</td>
		<td><input type='text' name='judul' value='$judul' size='30' required></td>
		</tr>
		<tr>
		<td><font face='Arial' size='3'>TANGGAL TAYANG</font></td>
		<td>:</td>
		<td><input type='date' name='tgl_tayang' value='$tgl_tayang' size='3' required></td>
		</tr>
		<tr>
		<td><font face='Arial' size='3'>TANGGAL BATAS TAYANG</font></td>
		<td>:</td>
		<td><input type='date' name='sampai_dengan' value='sampai_dengan' size='30' required></td>
		</tr>
		<tr>
		<td><font face='Arial' size='3'>SUTRADARA</font></td>
		<td>:</td>
		<td><input type='text' name='sutradara' value='sutradara' size='30' required></td>
		</tr>
		<tr>
		<td><font face='Arial' size='3'>DURASI</font></td>
		<td>:</td>
		<td><input type='text' name='durasi' value='durasi' size='30' required></td>
		</tr>
		<tr>
		<td><font face='Arial' size='3'>SINOPSIS</font></td>
		<td>:</td>
		<td><textarea name='sinopsis' value='sinopsis' size='30' required></textarea></td>
		</tr>
		<tr>
		<td><font face='Arial' size='3'>GAMBAR</font></td>
		<td>:</td>
		<td><input type='file' name='gambar' value='$gambar' size='30' required></td>
		</tr>
		<tr>
		<td></td><td></td>
		<td><input type='submit' value='Update'>
		<font face='Arial' size=3>
		<a href='editing.php'>Cancel</font></a>
		</td>
		</tr>
		</form>
		</table>";
		
		}
		?>
	</div>
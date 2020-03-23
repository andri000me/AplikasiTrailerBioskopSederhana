
<div align="center">
	<div id="terbaru">
		<h2>Hasil Pencarian</h2>
		<?php
		include "koneksi/koneksi.php";
		$query = mysqli_query($konek, "SELECT * FROM film WHERE judul LIKE '%".$_POST['search']."%' LIMIT 0,12");	
		while($row=mysqli_fetch_array($query)){
			echo "<a href='film.php?id_film=".$row['id_film']."'>".$row['judul']."</a><br>";
		}
		?>
	</div>
</div>	

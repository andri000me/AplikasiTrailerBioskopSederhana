<?php
include "../koneksi/koneksi.php";
$id_film = $row['id_film'];
		$judul = $row['judul'];
		$tgl_tayang = $row['tgl_tayang'];
		$sampai_dengan = $row['sampai_dengan'];
		$sutradara = $row['sutradara'];
		$durasi = $row['durasi'];
		$sinopsis = $row['sinopsis'];
		$gambar = $row['gambar'];
$query=mysqli_query($konek, "UPDATE film SET judul='$judul', tgl_tayang='$tgl_tayang', sampai_dengan='$sampai_dengan', sutradara='$sutradara', durasi='$durasi', sinopsis='$sinopsis', gambar='$gambar' WHERE
id_film='$id_film'")or die (mysqli_error($GLOBALS["___mysqli_ston"]));
if($query) {
?>
<script language="JavaScript">
document.location='editing.php'</script>
<?php
}
?>
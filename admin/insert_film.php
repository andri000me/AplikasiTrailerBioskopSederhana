<?php
include "../koneksi/koneksi.php";
$id_film = $_POST['id_film'];
$judul = $_POST['judul'];
$tgl_tayang = $_POST['tgl_tayang'];
$sampai_dengan = $_POST['sampai_dengan'];
$sutradara = $_POST['sutradara'];
$durasi = $_POST['durasi'];
$sinopsis = $_POST['sinopsis'];
$gambar = $_POST['gambar'];

$query = mysqli_query($konek, "INSERT INTO film(id_film, judul, tgl_tayang, sampai_dengan, sutradara, durasi, sinopsis, gambar ) 
		VALUES ('$id_film', '$judul', '$tgl_tayang', '$sampai_dengan', '$sutradara', '$durasi', '$sinopsis', '$gambar')")or die (mysqli_error($GLOBALS["___mysqli_ston"]));
if($query) {
?>
<script language="JavaScript">
document.location='addFilm.php'</script>
<?php
}
?>
<?php
include "../koneksi/koneksi.php";
$id_film = $_GET['id_film'];
$query = "DELETE FROM film WHERE id_film = $id_film";
mysqli_query($GLOBALS["___mysqli_ston"], $query);
?>
<script language="JavaScript">
document.location='editing.php'</script>
<?php
?>
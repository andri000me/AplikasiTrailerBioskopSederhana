<?php
include "../koneksi/koneksi.php";
$id_user = $_GET['id_user'];
$query = "DELETE FROM user WHERE id_user = $id_user";
mysqli_query($GLOBALS["___mysqli_ston"], $query);
?>
<script language="JavaScript">
document.location='editing.php'</script>
<?php
?>
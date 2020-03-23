<?php
include "../koneksi/koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$query=mysqli_query($konek, "UPDATE user SET nama='$nama', username='$username', password='$password', no_hp='$no_hp' WHERE
id_user='$id_user'")or die (mysqli_error($GLOBALS["___mysqli_ston"]));
if($query) {
?>
<script language="JavaScript">
document.location='editing.php'</script>
<?php
}
?>
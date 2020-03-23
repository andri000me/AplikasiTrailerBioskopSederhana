<?php
include "../koneksi/koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$query = mysqli_query($konek, "INSERT INTO user(id_user, nama, username, password, no_hp ) 
		VALUES ('','$nama' ,'$username','$password','$no_hp')")or die (mysqli_error($GLOBALS["___mysqli_ston"]));
if($query) {
?>
<script language="JavaScript">
document.location='addUser.php'</script>
<?php
}
?>
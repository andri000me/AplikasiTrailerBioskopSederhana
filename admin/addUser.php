<!DOCTYPE html>
<html>
<head>
	<title>E-Cinema | Tambah User</title>
</head>
<body>

</body>
</html>
<?php
include"header.php";
?>

<div class="content">
<div align="center">
	<p>&nbsp;</p>
	<h3>Tambahkan User Baru </h3>
	<p>&nbsp;</p>
		<form action="insert_user.php" method="POST">
		<table align="center">
		<tr>
		<td><font face="Arial" size="3">Nama</font></td>
		<td>:</td>
		<td><input type="text" name="nama" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">Username</font></td>
		<td>:</td>
		<td><input type="text" name="username" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">Password</font></td>
		<td>:</td>
		<td><input type="password" name="password" size="30" required></td>
		</tr>
		<tr>
		<td><font face="Arial" size="3">No Telp</font></td>
		<td>:</td>
		<td><input type="text" name="no_hp" size="30" required></td>
		</tr>
		<tr>
		<td></td><td></td>
		<td><input type="submit" value="Add">
		<font face="Arial" size="3">
		<a href="./editing.php">Cancel</font></a>
		</td>
		</tr>
		</table>
		<p>&nbsp;</p>
		
<?php
require_once '../koneksi/koneksi.php';
$sql = 'select * from user';
$ress = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if ($ress){
if (mysqli_num_rows($ress)){ ?>
<table align="center"  border="1">
<tr>
<td width="20px;">No</td>
<td width="20px;">ID User</td>
<td width="100px;">Nama</td>
<td width="100px;">Username</td>
<td width="100px;">Password</td>
<td width="100px;">No hp</td>
</tr>
<?php
$i =1;
while ($row = mysqli_fetch_row($ress)){ ?>
<tr>
<td align="center"><font size="2"><?php echo $i; ?></font></td>
<td align="center"><font size="2"><?php echo $row[0]; ?></font></td>
<td><font size="2"><?php echo $row[1]; ?></font></td>
<td><font size="2"><?php echo $row[2]; ?></font></td>
<td><font size="2"><?php echo $row[3]; ?></font></td>
<td><font size="2"><?php echo $row[4]; ?></font></td>

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

<?php
include"footer.php";
?>

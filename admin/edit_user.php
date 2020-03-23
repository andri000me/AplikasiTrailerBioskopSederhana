<!DOCTYPE html>
<html>
<head>
	<title>E-Cinema | Perbarui Data User</title>
</head>
<body>

</body>
</html>
<div class="content">
	<div align="center">
		<h2>Perbarui Data User</h2>
		<?php
		include "../koneksi/koneksi.php";
		$id_user = $_GET['id_user'];
		$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user WHERE id_user ='$id_user'");
		while ($row=mysqli_fetch_array($query)){
		$nama = $row['nama'];
		$username = $row['username'];
		$password = $row['password'];
		$no_hp = $row['no_hp'];
		echo "<table>";
		echo "<form method='POST' action='update.php?id_user=$id_user' enctype='multipart/form-data'>";
		echo "
		<tr>
		<td><font face='Arial' size=3>Nama</font></td>
		<td>:</td>
		<td><input type='text' name='nama' value='$nama' size='30'></td>
		</tr>
		<tr>
		<td><font face='Arial' size=3>Username</font></td>
		<td>:</td>
		<td><input type='text' name='username' value='$username' size='30'></td>
		</tr>
		<tr>
		<td><font face='Arial' size=3>Password</font></td>
		<td>:</td>
		<td><input type='text' name='password' value='$password' size='30'></td>
		</tr>
		<tr>
		<td><font face='Arial' size=3>No Hp</font></td>
		<td>:</td>
		<td><input type='text' name='no_hp' value='$no_hp' size='30'></td>
		</tr>
		
		<tr>
		<td></td><td></td>
		<td><input type='submit' name='submit' value='Update'>
		<font face='Arial' size=3>
		<a href='editing.php'>Cancel</font></a>
		</td>
		</tr>
		
		</table></form>";
		}
		?>
	</div>
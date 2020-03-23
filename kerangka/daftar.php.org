<?php
include "header.php";
?>
	<div align="center">
	<p>&nbsp;</p>
	<h3>Silahkan Daftar Terlebih Dahulu !</h3>
		<p>&nbsp;</p>
			<form action="simpan_user.php" method="POST">
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
				<td><font face="Arial" size="3">E-mail</font></td>
				<td>:</td>
				<td><input type="email" name="email" size="30" required></td>
			</tr>
			<tr>
				<td><font face="Arial" size="3">Jenis Kelamin</font></td>
				<td>:</td>
				<td><select name="jenis_kelamin">
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
						</select>
				</td>
			</tr>
			<tr>
				<td><font face="Arial" size="3">Usia</font></td>
				<td>:</td>
				<td><input type="text" name="usia" size="30" required></td>
			</tr>
			<tr>
				<td><font face="Arial" size="3">No Telp</font></td>
				<td>:</td>
				<td><input type="text" name="no_hp" size="30" required></td>
			</tr>
			<tr>
				<td></td><td></td>
					<td>
						<button type="submit">Daftar</button>
					</td>
			</tr>
			</table>
		</form>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<?php
include "footer.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Cinema | Update</title>
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
	<h3>Edit Data User </h3>
	<p>&nbsp;</p>

<?php
			include "../koneksi/koneksi.php";
			$query = mysqli_query($konek, "SELECT * FROM user");
			$jumlah = mysqli_num_rows($query);
			echo "<br><table border='0' cellpadding='1' cellspacing='1' bordercolor='black' bgcolor='black'>
			<tr bgcolor='#333' height='30'><font color='black'>
			<th align='center'><font color='white' face='Arial' size=4>No</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Id User</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Nama</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Username</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Password</font></th>
			<th align='center'><font color='white' face='Arial' size=4>No Hp</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Action</font></th>
			</tr>";
			$j=0;
			while ($row=mysqli_fetch_array($query)) {
			echo "<tr><td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $j+1;
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["id_user"];
			echo"</font>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["nama"];
			echo"</font>";
			echo"</td>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["username"];
			echo"</font>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["password"];
			echo"</font>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["no_hp"];
			echo"</font>";
			echo"<td align='center' bgcolor='white'>";
			echo "<a href='edit_user.php?id_user=".$row['id_user']."'><input type='submit' value=' Edit '></a> | <a href='delete.php?id_user=".$row['id_user']."'><input type='submit' value=' Delete '></a>";
			$j++;
			}
			echo"</table>";
?>

<p>&nbsp;</p>
<h3>Edit Data Film </h3>
	<p>&nbsp;</p>

<?php
	$query = mysqli_query($konek, "SELECT * FROM film");
			$jumlah = mysqli_num_rows($query);
			echo "<br><table border='0' cellpadding='1' cellspacing='1' bordercolor='black' bgcolor='black'>
			<tr bgcolor='#333' height='30'><font color='black'>
			<th align='center'><font color='white' face='Arial' size=4>No</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Id Film</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Judul</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Tgl Tayang</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Batas Tayang</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Sutradara</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Durasi</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Sinopsis</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Gambar</font></th>
			<th align='center'><font color='white' face='Arial' size=4>Action</font></th>
			</tr>";
			$j=0;
			while ($row=mysqli_fetch_array($query)) {
			echo "<tr><td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $j+1;
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["id_film"];
			echo"</font>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["judul"];
			echo"</font>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["tgl_tayang"];
			echo"</font>";
			echo"</td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["sampai_dengan"];
			echo"</font></td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["sutradara"];
			echo"</font></td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["durasi"];
			echo"</font></td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["sinopsis"];
			echo"</font></td>";
			echo "<td align='center' bgcolor='white'>";
			echo "<font face='Arial' size=3>";
			echo $row["gambar"];
			echo"</font>";
			echo"</td>";
			echo"<td align='center' bgcolor='white'>";
			echo "<a href='edit_film.php?id_film=".$row['id_film']."'><input type='submit' value=' Edit '></a> | <a href='delete_film.php?id_film=".$row['id_film']."'><input type='submit' value=' Delete '></a>";
			$j++;
			}
			echo"</table>";
?>
</div>
<?php
include"footer.php";
?>
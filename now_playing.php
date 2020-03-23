<html>
<head>
<title>E-Cinema</title>
</head>
<body>
		<?php
			include "koneksi/koneksi.php";
			$query = mysqli_query("SELECT * FROM film ORDER BY judul ASC LIMIT 12 ");
				$j=1;
			while($row=mysqli_fetch_array($query)){
				$ex=$row['tgl_tayang'];
				$ex2=$row['sampai_dengan'];
				$tgl=date("Y-m-d");
				if($ex<=$tgl){
					if($ex2>=$tgl){
						if ($j%4 !=0){
			echo"<td>";
			echo"<table>";
			echo"<tr><td><font face='Arial' size=3>";
			echo"<a href='kerangka/film.php?id_film=".$row['id_film']."'>";
			echo $row["judul"];
			echo"</a></font></td></tr>";
			echo"<tr><td align='center'>";
			echo"<font face='Arial' size=3><a href='kerangka/film.php?id_film=".$row['id_film']."'>";
			echo'<img src="image/';echo $row['gambar'];echo'" width="203" height="190" border="0"/>';
			echo"</a></font>";
			echo"</td></tr>";
			echo"<tr><td>";
			
			echo"</td></tr>";
			echo"</table></td>";
			}
			else{
			echo"<td>";
			echo"<table border='1'>";
			echo "<td><font face='Arial' size=3><a href='film.php?id_film=".$row['id_film']."'>";
			echo $row["judul"];
			echo"</a></font></td>";
			echo"<tr><td align='center'>";
			echo"<font face='Arial' size=3><a href='film.php?id_film=".$row['id_film']."'>";
			echo'<img src="image/';echo $row['gambar'];echo'" width="203" height="190" border="0"/>';
			echo"</a></font>";
			echo"</td></tr>";
			echo"<tr><td>";
			
			echo"</td></tr>";
			echo"</table></td>";
		    echo"<tr>";
			}
			$j++;
			}
					}
				}
		?>
		</tr>
	</table>
</body>
</html>
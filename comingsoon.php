<html>
<head>
<title>Untitled Document</title>
</head>
<body>
		<?php
			include "koneksi/koneksi.php";
			$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM film ORDER BY judul ASC LIMIT 12 ");
			$j=1;
			while($row=mysqli_fetch_array($query)){
				$ex=$row['tgl_tayang'];
				$tgl=date("Y-m-d");
				$date1=strtotime($tgl);
				$date2=strtotime($ex);
				$sel=$date1-$date2;
				$har=floor($sel/(60*60*34));
				
				if($har<0){
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
			
			echo"</table></td>";
		    echo"<tr>";
			}
			$j++;
			}
					}
		?>
			
</body>
</html>
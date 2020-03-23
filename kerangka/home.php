<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<div class="header">
		<div id="gambar">
			<img src="image/header.gif" width="600">
		</div>
		<div id="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="kerangka/playnow.php">PLAYING NOW</a></li>
			<li><a href="kerangka/comingsoon.php">COOMING SOON</a></li>
			<li><a href="#">INFO</a></li>
		</ul>
		</div>
	</div>
	<div class="content">
		<table width="956" border="0">
    <tr>
      <td width="178">
		<h3 align="center">Selamat Datang Di Web Ini</h3>
      &nbsp; Di Web ini anda dapat melakukan pemesanan tiket tanpa harus mengantri membentuk deretan seperti ular
			saat diriliskan film terbaru.
	  </td>
      <td width="420" valign="top"><h3 align="left"></h3>
			<script src="js/jquery-1.8.0.min.js"></script>
			<script src="js/headline.js"></script>
			<script type="text/javascript"> 
				$(document).ready(function(){
					// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
					bukaContent($('#slideAwal'),'div1');			
				});
			</script>
			<table width="420" height="250" border="0">
				 <tr>
					<td>
				
				<div id="divContent">
				  <div id="div1">
					 <img src="image/1.jpg" align="left" width="420" height="400" /> 
				  </div>
				  <div id="div2">
					 <img src="image/2.jpg" align="left" width="420" height="400"/> 
				  </div>
				  <div id="div3">
					 <img src="image/3.jpg" align="left" width="420" height="400" /> 
				  </div>
				  <div id="div4">
					 <img src="image/4.jpg" align="left" width="420" height="400" /> 
				  </div>
				</div>
				<div id="divTrigger">
				  <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
				  <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
				  <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
				  <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
				</div>
				</td>
				 </tr>
			</table>
	  </td>
      <td width="344" valign="top">
	  <div class="sidebar">
	<table width="344" height="403" border="0" >
		<tr>
		  <td height="100" valign="center" bgcolor="#999999" align="center"><ul>
		  <form action="search.php"method="POST">
			<input class="cari"type="text"name="search"placeholder="Cari disini..."/>
			<input class="btn_cari"type="submit"name="cari"value="Q"/>
		</form>
		  <p>&nbsp;</br>
		  <?php
		 session_start();
	if (empty($_SESSION['username'])){
		echo "<a href='kerangka/formlogin.php'><button type='submit' name='login'>Sign In</button></a>";
		echo "<a href='kerangka/daftar.php'><button type='submit' name='daftar'>Daftar Acount</button></td>
		  </td>";
	}else{
		echo "<form action='logout.php' method='POST'><button type='submit'>LogOut</button></form>";
		$id_user = $_SESSION['username'];
	}
	?> 
		</tr>
		<tr>
		  <td height="300" bgcolor="#999999"><img src="image/promo.jpg" height="295" width="344"></td>
		</tr>
    </table>
		</div>
    </td>
    </tr>
		</table>
	<p>&nbsp;
	<h1 align="center">PLAYING</h1>
	<table>
		<tr>
	<?php
			include "koneksi/koneksi.php";
			$query = mysqli_query($konek, "SELECT * FROM film ORDER BY id_film DESC LIMIT 0,5");
			$j=1;
			while ($row=mysqli_fetch_array($query)) {
			if ($j%4 !=0){
			echo"<td>";
			echo"<table>";
			echo"<tr><td><font face='Arial' size=3>";
			echo"<a href='film.php?id_film=".$row['id_film']."'>";
			echo $row["judul"];
			echo"</a></font></td></tr>";
			echo"<tr><td align='center'>";
			echo"<font face='Arial' size=3><a href='film.php?id_film=".$row['id_film']."'>";
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
	?>
	</tr>
	</table>	
	<p>&nbsp;
	<h1 align="center">SEGERA</h1>
	<table width="900" border="0" align="center">
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td align="center"><img src="image/9.jpg" width="158" height="160" align="center"></td>
			<td align="center"><img src="image/11.jpg" width="158" height="160" align="center"></td>
			<td align="center"><img src="image/5.jpg" width="155" height="160" align="center"></td>
			<td align="center"><img src="image/8.jpg" width="155" height="160" align="center"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><a href="daftar.php" style="text-decoration:none"><center><font face="Comic Sans MS" size="4" color="blue">Detail</font>
			<font face="Comic Sans MS" size="4" color="blue">Film</font></center></a></td></td>
			<td><a href="daftar.php" style="text-decoration:none"><center><font face="Comic Sans MS" size="4" color="blue">Detail</font>
			<font face="Comic Sans MS" size="4" color="blue">Film</font></center></a></td></td>
			<td><a href="daftar.php" style="text-decoration:none"><center><font face="Comic Sans MS" size="4" color="blue">Detail</font>
			<font face="Comic Sans MS" size="4" color="blue">Film</font></center></a></td></td>
			<td><a href="daftar.php" style="text-decoration:none"><center><font face="Comic Sans MS" size="4" color="blue">Detail</font>
			<font face="Comic Sans MS" size="4" color="blue">Film</font></center></a></td></td>
		</tr>
	</table>
	
	</div>
	<div class="footer" align="center">
		<font color="#CCCCCC">Copy Defi Dwi W &copy;13_XIIRPL A </font>
	</div>
</div>
</body>
</html>